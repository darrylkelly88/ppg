
<?php
get_header()
?>

    <!-- Hero section -->
    <div class="container-fluid d-flex align-items-center petweb-hero" >
        
        <div class="container">
        <h1 class="display-1">Discover, Learn, Love</h1>
        <h2 class="display-5">Your Pets Best Life Awaits</h2>
        <button class="btn btn-cta btn-lg me-2 mt-3" type="button" a href="#discover">Start Discovering</button>
        </div>
    </div>

    <!--Welcome / About section-->

    <div class="container mt-5 mb-5 pt-3 pb-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 order-2 order-sm-2 order-md-1 order-lg-1">
                <img src="<?php echo get_template_directory_uri().'/assets/images/ty.jpg' ?>" class="img-fluid rounded-3 placeholder-glow" loading="lazy">
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 order-1 order-sm-1 order-md-2 order-lg-2">
                <h1>Welcome  to Perfect Pet Guides</h1>
                <p>
                    Perfect Pet Guides is your go-to resource for all things pet-related, designed to guide you through the diverse aspects of pet care. Whether you're exploring nutrition, sustainability, pet tech, health & wellbeing, insurance, or seasonal awareness, we've got you covered.
                    <br><br>
                    Join us on this exciting journey of pet care, where we combine our passion for animals with professional expertise to empower you as a pet owner. Here's to creating a world of love, health, and happiness for your beloved pets!
                    <br><br>
                    P.S Just look at our bestest boy in this picture!
                </p>
            </div>
        </div>
    </div>


    <!--New owner section-->
    <div id="new-owner" class="container-fluid bg-light pt-5 pb-5">
        <div class="container">
            <div class="row">
                <h1>New Owner Guide</h1>
                <div class="col-12 col-md-8 order-2 order-md-1">
                    
                    <p>Embarking on the incredible journey of pet ownership? Welcome to your go-to resource for all things pet-related! Our New Owners Guide is designed with love and expertise to provide you with essential information and tips as you embrace the joys of welcoming a furry friend into your home.
                        <br>
                        <br>
                        Ready to become the best pet parent you can be? Click below to explore our New Owners Guide and set the stage for a lifetime of love and companionship! 
                    </p>
                    <a href="https://perfectpetguides.co.uk/new-owners-guide-download/" class="btn btn-cta me-2 mt-4 mb-4 btn-lg" role="button">New Owner Guide</a>
                </div>
                <div class="col-12 col-md-4 order-1 order-md-2">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/newowners.jpg' ?>" class="img-fluid rounded-3 placeholder-glow mt-3 mb-3" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <!--Discover Section-->
    <div id="discover" class="container mt-5">
        
        <h1>Find the Best for Your Pet</h1>
        <p>Click the buttons below to discover more information about each topic and start learning:</p>

        <!--https://getbootstrap.com/docs/5.1/components/navs-tabs/#javascript-behavior-->
        <!--buttons-->
        <ul class="nav nav-pills" id="myTab" role="tablist">
            <li class="nav-item m-1" role="presentation">
                <button class="nav-link active" id="Insurance-tab" data-bs-toggle="pill" data-bs-target="#Insurance" type="button" role="tab" aria-controls="Insurance" aria-selected="false">Insurance</button>
              </li>
            <li class="nav-item m-1" role="presentation">
              <button class="nav-link" id="nutrition-tab" data-bs-toggle="pill" data-bs-target="#nutrition" type="button" role="tab" aria-controls="nutrition" aria-selected="true">Food & Supplements</button>
            </li>
            <li class="nav-item m-1" role="presentation">
              <button class="nav-link" id="Pettech-tab" data-bs-toggle="pill" data-bs-target="#Pettech" type="button" role="tab" aria-controls="Pettech" aria-selected="false">Pet Tech</button>
            </li>
            <li class="nav-item m-1" role="presentation">
                <button class="nav-link" id="Sustainability-tab" data-bs-toggle="pill" data-bs-target="#Sustainability" type="button" role="tab" aria-controls="Sustainability" aria-selected="false">Sustainability</button>
              </li>
            <li class="nav-item m-1" role="presentation">
            <button class="nav-link" id="Health-Wellbeing-tab" data-bs-toggle="pill" data-bs-target="#Health-Wellbeing" type="button" role="tab" aria-controls="Health-Wellbeing" aria-selected="false">Health & Wellbeing</button>
            </li>
          </ul>

        <!--Pages content-->
          <div class="tab-content mt-3" id="myTabContent">
                


            <!--Start Insurance page-->
            <div class="tab-pane fade active show" id="Insurance" role="tabpanel" aria-labelledby="Insurance-tab">
                <div class="row">
                    <h3>Insurance</h3>
                </div>
                    <div class="row">
                        <div class="col-md-6 order-2 mt-3">
                            <h5>Dog Insurance</h5>
                            <br>
                            Start your pet ownership journey with confidence by learning all about dog insurance.
                            <br><br>Our guide shows you how to pick the best insurance for your furry buddy, including help for emergency treatments and regular check-ups. 
                            <br><br>Find out how to keep your pet safe and avoid big bills from surprise health problems. 
                            <br><br>We'll explain why having good insurance is really important for taking care of your dog the right way.
                            <br>
                            <a href="https://perfectpetguides.co.uk/dog-insurance-the-ultimate-guide/" class="btn btn-cta me-2 mt-4 mb-4 btn-lg" role="button">Ultimate Insurance Guide</a>
                        </div>
                        <div class="col-md-6 mt-4 order-1">
                            <img src="https://perfectpetguides.co.uk/wp-content/uploads/2024/02/insurance-document-scaled.jpg" class="img-fluid rounded-3 placeholder-glow" loading="lazy">
                        </div>    
                    </div>
            </div>



            <!--Start Nutrition page-->
                <div class="tab-pane fade " id="nutrition" role="tabpanel" aria-labelledby="nutrition-tab">
                    <div class="row">
                    <h3>Food & Supplements</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 order-2 mt-3">
                            <h5>Dog Food and Nutrition</h5>
                            <br>
                            Finding the best food for your dog can make them healthier, more energetic, and happier. 
                            <br><br>Our guide makes understanding dog food easy, from learning about nutrition basics to picking the right meals and supplements. 
                            <br><br>Discover how choosing the right food can be the best medicine, helping keep their immune system strong, their coat shiny, and their energy levels just right. 
                            <br><br>We'll help you see through the confusing ads to choose the best for your dog's health. 
                            <br>
                            <a href="https://perfectpetguides.co.uk/dog-nutrition/" class="btn btn-cta me-2 mt-4 mb-4 btn-lg" role="button">Dog Nutrition Guide</a>
                        </div>
                        <div class="col-md-6 mt-4 order-1">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="img-fluid rounded-3 placeholder-glow" loading="lazy">
                            
                        </div>
                    </div>


                    <!--start cards-->
                    <div class="row mt-4">
                        <h5>Read Our In Depth Guides</h5>
                        <p>See below for some more information about food & supplements with our guides exploring these topics in more detail.</p>
                    </div>

                    <div class="row">
                        
                      <div id="relatedArticlesCarousel" class="carousel slide container rcc-4" data-bs-ride="carousel">
                        <div class="carousel-inner w-100">
                         
                          <!-- Carousel Item 1 -->
                          <div class="carousel-item active">
                            <div class="col-md-3 p-2">
                              <div class="card h-100">
                                <img src="https://perfectpetguides.co.uk/wp-content/uploads/2024/01/man-holding-dog-biscuits-1024x683.jpg" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                <div class="card-body">
                                  <h5 class="card-title">Dog Food</h5>
                                  <p class="card-text">Unlock the secrets to your dog's diet with our comprehensive guide, making the maze of dog food choices simple and informed.</p>
                                </div>
                                <a href="https://perfectpetguides.co.uk/dog-nutrition/dog-treats-a-guide/" class="btn btn-cta-outline m-3" role="button">Read Our Food Guide</a>
                              </div>
                            </div>
                          </div>
                      
                          <!-- Carousel Item 2 -->
                          <div class="carousel-item">
                            <div class="col-md-3 p-2">
                              <div class="card h-100">
                                <img src="https://perfectpetguides.co.uk/wp-content/uploads/2024/01/oil-tablets-close-up-scaled.jpg" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                <div class="card-body">
                                  <h5 class="card-title">Supplements</h5>
                                  <p class="card-text">Boost your dog's health and vitality with our expert insights into the essential supplements for a thriving canine companion.</p>
                                </div>
                                <a href="https://perfectpetguides.co.uk/dog-nutrition/dog-supplements-guide/" class="btn btn-cta-outline m-3" role="button">Read Our Supplements Guide</a>
                              </div>
                            </div>
                          </div>
                      
                          <!-- Carousel Item 3 -->
                          <div class="carousel-item">
                            <div class="col-md-3 p-2">
                              <div class="card h-100">
                                <img src="https://perfectpetguides.co.uk/wp-content/uploads/2024/02/magnifying-glass-scaled.jpg" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                <div class="card-body">
                                  <h5 class="card-title">Dog Food Finder</h5>
                                  <p class="card-text">Get personalised recommendations for your dogs comlete diet with our dog food finder tool.</p>
                                </div>
                                <a href="https://perfectpetguides.co.uk/dog-nutrition/dog-treats-a-guide/" class="btn btn-cta-outline m-3" role="button">Try it Now!</a>
                              </div>
                            </div>
                          </div>
                      
                          <!-- Carousel Item 4 -->
                          <div class="carousel-item">
                            <div class="col-md-3 p-2">
                              <div class="card h-100">
                                <img src="https://perfectpetguides.co.uk/wp-content/uploads/2024/01/dog-treats-in-jar-scaled.jpg" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                <div class="card-body">
                                  <h5 class="card-title">Treats</h5>
                                  <p class="card-text">Discover the perfect treat for every pup's palate in our guide to dog treats, from training aids to rewarding good behavior and everything in between.</p>
                                </div>
                                <a href="https://perfectpetguides.co.uk/dog-nutrition/dog-treats-a-guide/" class="btn btn-cta-outline m-3" role="button">Read Our Treat Guide</a>
                              </div>
                            </div>
                          </div>
                      
                          <!-- Add more Carousel Items with the new card structure as needed -->
                      
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#relatedArticlesCarousel" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#relatedArticlesCarousel" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      



                      </div>
                </div>
            
                                
                <!--Start tech page-->
                <div class="tab-pane fade" id="Pettech" role="tabpanel" aria-labelledby="Pettech-tab">
                    <div class="row">
                        <h3>Pet Tech</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 order-2 mt-3">
                                <h5>Pet Gadgets</h5>
                                This is a section about technology for pets
                                <br>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br>
                                <button class="btn btn-cta me-2 mt-4 mb-4 btn-lg" type="button">Ultimate Pet Gadget Guide</button>
                            </div>
                            <div class="col-md-6 mt-4 order-1">
                                <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="img-fluid rounded-3 placeholder-glow" loading="lazy">
                                
                            </div>
                        </div>
    
    
                        <!--start cards-->
                        <div class="row mt-4">
                            <h5>Read Our In Depth Guides</h5>
                            <p>See below for some more information about tech with our guides exploring these topics in more detail.</p>
                        </div>
    
                        <div class="row">
                            
                          <div id="relatedArticlesCarousel" class="carousel slide container rcc-4" data-bs-ride="carousel">
                            <div class="carousel-inner w-100">
                             
                              <!-- Carousel Item 1 -->
                              <div class="carousel-item active">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Cameras</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Carousel Item 2 -->
                              <div class="carousel-item">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/ty.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Auto Feeders</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Carousel Item 3 -->
                              <div class="carousel-item">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/newowners.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">GPS Trackers</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                          
                              <!-- Add more Carousel Items with the new card structure as needed -->
                          
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#relatedArticlesCarousel" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#relatedArticlesCarousel" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>


                          </div>
                </div>

                <!--Start sustainability page-->
                <div class="tab-pane fade" id="Sustainability" role="tabpanel" aria-labelledby="Sustainability-tab">
                    <div class="row">
                        <h3>Sustainability</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 order-2 mt-3">
                                <h5>Pet Sustainability</h5>
                                This is a section about sustainability for pets
                                <br>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br>
                                <button class="btn btn-cta me-2 mt-4 mb-4 btn-lg" type="button">Ultimate Sustainability Guide</button>
                            </div>
                            <div class="col-md-6 mt-4 order-1">
                                <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="img-fluid rounded-3 placeholder-glow" loading="lazy">
                                
                            </div>
                        </div>
    
    
                        <!--start cards-->
                        <div class="row mt-4">
                            <h5>Read Our In Depth Guides</h5>
                            <p>See below for some more information about sustainability with our guides exploring these topics in more detail.</p>
                        </div>
    
                        <div class="row">
                            
                          <div id="relatedArticlesCarousel" class="carousel slide container rcc-4" data-bs-ride="carousel">
                            <div class="carousel-inner w-100">
                             
                              <!-- Carousel Item 1 -->
                              <div class="carousel-item active">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Eco-Friendly Toys</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Carousel Item 2 -->
                              <div class="carousel-item">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/ty.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Bathing & Washing</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Carousel Item 3 -->
                              <div class="carousel-item">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/newowners.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Pet Waste Disposal</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Carousel Item 4 -->
                              <div class="carousel-item">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Pet Clothing & Wearables</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Add more Carousel Items with the new card structure as needed -->
                          
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#relatedArticlesCarousel" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#relatedArticlesCarousel" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>




                        </div>
                </div>

                <!--Start health&wellbeing page-->
                <div class="tab-pane fade" id="Health-Wellbeing" role="tabpanel" aria-labelledby="Health-Wellbeing-tab">
                    <div class="row">
                        <h3>Health & Wellbeing</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6 order-2 mt-3">
                                <h5>Pet Health & Wellbeing</h5>
                                This is a section about health & wellbeing for pets
                                <br>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <br>
                                <button class="btn btn-cta me-2 mt-4 mb-4 btn-lg" type="button">Ultimate Health & Wellbeing Guide</button>
                            </div>
                            <div class="col-md-6 mt-4 order-1">
                                <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="img-fluid rounded-3 placeholder-glow" loading="lazy">
                                
                            </div>
                        </div>
    
    
                        <!--start cards-->
                        <div class="row mt-4">
                            <h5>Read Our In Depth Guides</h5>
                            <p>See below for some more information about sustainability with our guides exploring these topics in more detail.</p>
                        </div>
    
                        <div class="row">
                            
                          <div id="relatedArticlesCarousel" class="carousel slide container rcc-4" data-bs-ride="carousel">
                            <div class="carousel-inner w-100">
                             
                              <!-- Carousel Item 1 -->
                              <div class="carousel-item active">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Training</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Carousel Item 2 -->
                              <div class="carousel-item">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/ty.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Preventative Healthcare</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Carousel Item 3 -->
                              <div class="carousel-item">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/newowners.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Grooming & Hygiene</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Carousel Item 4 -->
                              <div class="carousel-item">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Exercise</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>

                              <!-- Carousel Item 5 -->
                              <div class="carousel-item">
                                <div class="col-md-3 p-2">
                                  <div class="card h-100">
                                    <img src="<?php echo get_template_directory_uri().'/assets/images/dog-eating.jpg' ?>" class="card-img-top placeholder-glow card-img-200px" alt="..." loading="lazy">
                                    <div class="card-body">
                                      <h5 class="card-title">Enrichment & Mental Health</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                    <button class="btn btn-cta-outline m-3" type="button">Read Our Ultimate Guide</button>
                                  </div>
                                </div>
                              </div>
                          
                              <!-- Add more Carousel Items with the new card structure as needed -->
                          
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#relatedArticlesCarousel" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#relatedArticlesCarousel" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>



                        </div>
                </div>







            </div>
          </div>
    </div>


<?php
get_footer()
?>