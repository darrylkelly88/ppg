// Initially set parameters when page is loaded.
//
//
document.addEventListener('DOMContentLoaded', function() {
    updateAgeDisplay(); // Initialize sliders for the dog age question
    currentQuestion = 0; // Reset currentQuestion to 0
    questions[currentQuestion].classList.remove('d-none'); // Display the first question
});

//Section that handles showing the next question.
let currentQuestion = 0;
const questions = document.getElementsByClassName('question');
const params = {};

function showNextQuestion() {
    if (currentQuestion < questions.length - 1) {
        questions[currentQuestion].classList.add('d-none');
        currentQuestion++;
        questions[currentQuestion].classList.remove('d-none');
    }
}

function showPreviousQuestion() {
    if (currentQuestion > 0) {
        questions[currentQuestion].classList.add('d-none');
        currentQuestion--;
        questions[currentQuestion].classList.remove('d-none');
    }
}

// Dog Name Functions
//
//
//Handle the ability to press enter on the Dog Name question.
document.getElementById('dogFoodForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    handleFormSubmit(); // Call a function to handle the form submission
});

function handleFormSubmit() {
    // Check if the current question is the first one (dog's name)
    if (currentQuestion === 1) {
        selectDogName(); // If it is, handle the dog's name submission
    } else {
        // If it's not the first question, submit the form or go to the next question
        // Depending on your existing logic, you may call showNextQuestion() or the final submission function here
    }
}

//Function to remember and recall the dogs name within the recommended foods section
function selectDogName() {
    const dogName = document.getElementById('dogName').value.trim();
    if (dogName) {
        showNextQuestion(); // Move to the next question
        updateQuestionsWithDogName(dogName) // Update questions with the dog's name
        params['dogName'] = dogName; // Save the dog's name to params
    } else {
        alert('Please enter the dog\'s name.'); // Alert if the name is not entered
    }
}

//update the dogs name on all items use your dog if not completed.
function updateQuestionsWithDogName(newDogName) {
    // Determine the string to be replaced - either the existing dog name or the placeholder
    const replaceTarget = params['dogName'] ? params['dogName'] : '{dogName}';
    console.log(replaceTarget)
    // Update the params with the new dog name
    params['dogName'] = newDogName;

    // Create a regular expression to find all occurrences of the replaceTarget
    const regex = new RegExp(replaceTarget, 'g');

    // Find all elements that might contain the dog name or placeholder
    const elementsToUpdate = document.querySelectorAll('[id$="Question"] p');

    // Replace the current dog's name or placeholder with the new dog's name in each element
    elementsToUpdate.forEach(element => {
        element.innerHTML = element.innerHTML.replace(regex, newDogName || 'your dog');
    });
}



// Functions for the dogs age
//
//
//function to control sliders on the dogs age selection
function updateAgeDisplay() {
    const years = document.getElementById('ageYears').value;
    const months = document.getElementById('ageMonths').value;

    document.getElementById('yearsDisplay').textContent = years;
    document.getElementById('monthsDisplay').textContent = months;
}

//function to select the dogs age when moving forward.
function selectDogAge() {
    const years = parseInt(document.getElementById('ageYears').value, 10);
    const months = parseInt(document.getElementById('ageMonths').value, 10);
    const totalMonths = (years * 12) + months;

    let ageBracket = '';
    if (totalMonths <= 12) {
        ageBracket = 'Puppy';
    } else if (totalMonths <= 24) {
        ageBracket = 'Junior';
    } else if (totalMonths <= 96) {
        ageBracket = 'Adult';
    } else {
        ageBracket = 'Senior';
    }

    params['ageBracket'] = ageBracket; // Store the age bracket
    showNextQuestion(); // Move to the next question
}


// Functions to handle dogs size
//
//

function selectDogSize() {
    const selectedSize = document.querySelector('input[name="dogSize"]:checked');
    if (selectedSize) {
        params['dogSize'] = selectedSize.id; // Store the ID or you can store another value    
        showNextQuestion();
    } else {
        alert('Please select a size for ' + (params['dogName'] || 'your dog') + '.');
    }
}

// Breed Selection
//
//
// Function to handle breed selection drop down
function selectBreed() {
    const breedValue = document.getElementById('breed').value;
    if (breedValue) {
        params['breed'] = breedValue; // Save the breed value to params
        showNextQuestion(); // Move to the next question
    } else {
        alert('Please select a breed.'); // Alert if no breed is selected
    }
}


// Functions to handle calculation of Calorie Requirements
//
//

let neuteredScore = 0;
let activityLevelScore = 0;
let bodyConditionScore = 0;

//find neutered selection and move to next question
function selectNeutered() {
    const neuteredValue = document.querySelector('input[name="neutered"]:checked').value;
    neuteredScore = parseInt(neuteredValue, 10);
    showNextQuestion();
}

//find activity level selection and move to next question
function selectActivityLevel(value) {
    const activityLevelValue = document.querySelector('input[name="activityLevel"]:checked').value;
    activityLevelScore = parseInt(activityLevelValue, 10);
    showNextQuestion();
}

//find body condition selection and move to next question
function selectBodyCondition(value) {
    const bodyConditionValue = document.querySelector('input[name="activityLevel"]:checked').value;
    bodyConditionScore = parseInt(bodyConditionValue, 10);
    showNextQuestion();
    calculateCalorieDensity()
}

//weighted calculation to find the caloriedensity required
function calculateCalorieDensity() {
    let totalScore = neuteredScore + (2 * activityLevelScore) + (2 * bodyConditionScore);
    let weightedScore = totalScore / 5;
    let calorieDensity;

    if (weightedScore <= 3) {
        calorieDensity = 'low';
    } else if (weightedScore <= 7) {
        calorieDensity = 'medium';
    } else {
        calorieDensity = 'high';
    }

    params['calorieDensity'] = calorieDensity; // Store the calorie density in params for API call
}


// Wet or Dry Functions
//
//

//Function to determine wet or dry selection
function selectWetOrDry() {
    const selectedwetOrDry = document.querySelector('input[name="wetOrDry"]:checked');
    if (selectedwetOrDry) {
        params['wetOrDry'] = selectedwetOrDry.id; // Store the ID or you can store another value 
        showNextQuestion();
    } else {
        alert('Please select a food preference for ' + (params['dogName'] || 'your dog') + '.');
    }
}


// Function to select budget
//
//
function selectCost() {
    const selectedCost = document.querySelector('input[name="cost"]:checked');
    if (selectedCost) {
        params['Cost'] = selectedCost.id; // Store the ID or you can store another value 
        showNextQuestion();
    } else {
        alert('Please select a food preference for ' + (params['dogName'] || 'your dog') + '.');
    }
}



// Function to call the API and trigger the display of results
//
//
function callApi() {
    let url = new URL('http://192.168.1.130:3000/api/v1/food');
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

    // Make the API call
    fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(data); // Log the received data
            displayResults(data);
        })
        .catch(error => console.error('Error:', error));

        console.log(url.toString()); // Log the final URL
};


//Function to display the results based on user selections
//
//
function displayResults(response) {
    let resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = ''; // Clear previous results

    // Access the dog's name from params
    const dogName = params['dogName'] || 'your dog';

    // Display a message with the dog's name, only once
    let nameDiv = document.createElement('div');
    nameDiv.innerHTML = `<h3>${dogName}'s Recommended Foods:</h3>`;
    resultsDiv.appendChild(nameDiv);

    // Check if data array is not empty
    if (response.data && response.data.length > 0) {
        response.data.forEach(item => {
            let div = document.createElement('div');
            div.classList.add('result-item', 'col-md-4', 'ps-3', 'pe-3');
            div.innerHTML = `
                <h4 class="mt-4">${item.name}</h4>
                <div class="calc-image-container mt-3 mb-3">
                <img src="${item.imgURL}" class="calc-img-fluid rounded-3 placeholder-glow " loading="lazy">
                </div>
                <p><b>Description:</b> ${item.description}</p>
                <a href="${item.affiliateLink}" class="btn btn-primary" target="_blank">Check Price</a>
            `;
            resultsDiv.appendChild(div);
        });
    } else {
        resultsDiv.innerHTML += '<p>No results found</p>';
    }
}


// Reset the calculator. 
//
//
function resetCalculator() {
    
    updateQuestionsWithDogName('{dogName}');
    // Reset the current question to the first one
    currentQuestion = 0;

    // Hide all questions and only show the first one
    Array.from(questions).forEach((question, index) => {
        if (index === 0) {
            question.classList.remove('d-none');
        } else {
            question.classList.add('d-none');
        }
    });

    // Reset all form inputs
    document.getElementById('dogFoodForm').reset();

    // Reset the age display
    updateAgeDisplay();

    // Clear the params object
    for (let prop in params) {
        if (params.hasOwnProperty(prop)) {
            delete params[prop];
        }
    }

    // Hide the results section
    let resultsDiv = document.getElementById('results');
    resultsDiv.innerHTML = '';

}

















