const express = require('express');
const cors = require('cors');
const app = express();
const MongoClient = require('mongodb').MongoClient;

const MONGO_USER = process.env.MONGO_USER;
const MONGO_PASSWORD = process.env.MONGO_PASSWORD;
const MONGO_HOST = process.env.MONGO_HOST;
const MONGO_PORT = process.env.MONGO_PORT;
const MONGO_DB_NAME = process.env.MONGO_DB_NAME;
const MONGO_COLLECTION_NAME = process.env.MONGO_COLLECTION_NAME;
const MONGO_CORS = process.env.MONGO_CORS;

// Connection URL and database name
const url = `mongodb://${MONGO_USER}:${MONGO_PASSWORD}@${MONGO_HOST}:${MONGO_PORT}`;
const dbName = MONGO_DB_NAME;
const collectionName = MONGO_COLLECTION_NAME;

const client = new MongoClient(url, { useUnifiedTopology: true });

client.connect(err => {
  if (err) {
    console.error('Error connecting to MongoDB:', err);
    return;
  }
  console.log('Connected to MongoDB');
});

// Define the weights for each field
const weights = {
  name: 0,
  description: 0,
  calorieDensity: 3,
  ageBracket: 5,
  dogSize: 4,
  breed: 3,
  affiliateLink: 0,
  wetOrDry: 1,
  cost: 3,
};

// Scoring functions for criteria with multiple options
const mapAndScore = (mapping, userValue, docValue) => {
  const userScore = mapping[userValue.toLowerCase()] || 2; // default to medium if not specified
  const productScore = mapping[docValue.toLowerCase()] || 2;

  // Calculate the difference in scores
  const scoreDifference = Math.abs(userScore - productScore);

  // Apply exponential decay based on the difference
  // The base of the exponential can be adjusted to control how quickly the score decreases
  // A smaller base results in a faster decay
  const exponentialDecayBase = 0.9; // Adjust this base value as needed
  const normalizedScore = Math.pow(exponentialDecayBase, scoreDifference);

  return normalizedScore;
};

const calorieDensityMapping = { low: 1, medium: 2, high: 3 };
const ageBracketMapping = { puppy: 1, junior: 2, adult: 3, senior: 4 };
const dogSizeMapping = { miniature: 1, small: 2, medium: 3, large: 4, giant: 5 };
const costMapping = { low: 1, medium: 2, high: 3 };


app.use(cors({ origin: MONGO_CORS }));

app.get('/api/v1/food', async (req, res) => {
  try {
    const db = client.db(dbName);
    const collection = db.collection(collectionName);

    // Retrieve all documents from the database
    const allDocuments = await collection.find({}).toArray();

    // Score each document based on the user's search criteria
    const scoredDocuments = allDocuments.map(doc => {
      let score = 0;

      // Scoring for each field
      for (const field in weights) {
        if (req.query[field] && doc[field]) {
          switch(field) {
            case 'calorieDensity':
              score += weights[field] * mapAndScore(calorieDensityMapping, req.query[field], doc[field]);
              break;
            case 'ageBracket':
              score += weights[field] * mapAndScore(ageBracketMapping, req.query[field], doc[field]);
              break;
            case 'dogSize':
              score += weights[field] * mapAndScore(dogSizeMapping, req.query[field], doc[field]);
              break;
            case 'cost':
              score += weights[field] * mapAndScore(costMapping, req.query[field], doc[field]);
              break;
            default:
              // Default scoring for other fields
              const userValue = req.query[field].toLowerCase();
              const docValue = doc[field].toString().toLowerCase();
              if (docValue.includes(userValue)) {
                score += weights[field];
              }
              break;
          }
        }
      }
      return { ...doc, score };
    });
    
    // Sort the documents by their score in descending order
    scoredDocuments.sort((a, b) => b.score - a.score);
    
    // Select the top 3 results
    const topResults = scoredDocuments.slice(0, 3);
    
    res.json({ message: 'Query successful', data: topResults });
  } catch (error) {
    console.error('Error querying data:', error);
    res.status(500).json({ message: 'Internal server error' });
    }
    });
    
    const port = process.env.PORT || 3000;
    
    app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});