<?php
include 'connection.php'; // Assuming the connection to the database
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=bookmark" />
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100..900;1,100..900&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="nosearch.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="general.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="contents.css">
  <title>Pet Hub</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">

</head>
<body>
<div class="navbar">
  <div class="left-section">
    <div class="logo-icon">
      <img class="logo-image" src="/img/logo2.png">
    </div>
    <div class="infurrmation-hub">    
      <h1>INFURRMATION HUB</h1>
    </div>
  </div>
  <div class="middle-section">
    <!-- Main Dropdown for Exotic Pets -->
    <div class="dropdown">
      <button class="button-style" id="button-spacing"><p>Domestic Pets</p><div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Dogs Dropdown -->
          <div class="nested-dropdown">
              <a href="dogs.php#grooming">Dogs</a>
              <div class="nested-dropdown-content">
                  <a href="dogs.php#grooming">Grooming</a>
                  <a href="dogs-environment.php#environment">Proper Environment/Caging</a>
                  <a href="dogs-nutrition.php#nutrition">Nutrition</a>
                  <a href="dogs-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>

          <!-- Cats Dropdown -->
          <div class="nested-dropdown">
              <a href="cats.php#grooming">Cats</a>
              <div class="nested-dropdown-content">
                  <a href="cats-grooming.php#grooming">Grooming</a>
                  <a href="cats-environment.php#environment">Proper Environment/Caging</a>
                  <a href="cats-nutrition.php#nutrition">Nutrition</a>
                  <a href="cats-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>

          <!-- Birds Dropdown -->
          <div class="nested-dropdown">
              <a href="birds.php#grooming">Birds</a>
              <div class="nested-dropdown-content">
                  <a href="birds-grooming.php#grooming">Grooming</a>
                  <a href="birds-environment.php#environment">Proper Environment/Caging</a>
                  <a href="birds-nutrition.php#nutrition">Nutrition</a>
                  <a href="birds-teaching.php#teaching">Dos and Don’ts</a>
                  
              </div>
          </div>

          <!-- Fishes Dropdown -->
          <div class="nested-dropdown">
              <a href="fishes.php#grooming">Fishes</a>
              <div class="nested-dropdown-content">
                  <a href="fishes-grooming.php#grooming">Grooming</a>
                  <a href="fishes-environment.php#environment">Proper Environment/Caging</a>
                  <a href="fishes-nutrition.php#nutrition">Nutrition</a>
                  <a href="fishes-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>

          <!-- Rabbit Dropdown -->
          <div class="nested-dropdown">
              <a href="rabbit.php#grooming">Rabbit</a>
              <div class="nested-dropdown-content">
                  <a href="rabbit-grooming.php#grooming">Grooming</a>
                  <a href="rabbit-environment.php#environment">Proper Environment/Caging</a>
                  <a href="rabbit-nutrition.php#nutrition">Nutrition</a>
                  <a href="rabbit-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>

          <!-- Rodents Dropdown -->
          <div class="nested-dropdown">
              <a href="rodents.php#grooming">Rodents</a>
              <div class="nested-dropdown-content">
                  <a href="rodents-grooming.php#grooming">Grooming</a>
                  <a href="rodents-environment.php#environment">Proper Environment/Caging</a>
                  <a href="rodents-nutrition.php#nutrition">Nutrition</a>
                  <a href="rodents-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>
      </div>
    </div>
    <!-- Main Dropdown for Exotic Pets -->
    <div class="dropdown">
      <button class="button-style"><p>Exotic Pets</p> <div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Ball Python Dropdown -->
          <div class="nested-dropdown">
              <a href="ballpython.php#grooming">Snake (Ball Python)</a>
              <div class="nested-dropdown-content">
                  <a href="ballpython-grooming.php#grooming">Grooming</a>
                  <a href="ballpython-environment.php#environment">Proper Environment/Caging</a>
                  <a href="ballpython-nutrition.php#nutrition">Nutrition</a>
                  <a href="ballpython-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>

          <!-- Tarantulas Dropdown -->
          <div class="nested-dropdown">
              <a href="tarantulas.php#grooming">Tarantulas</a>
              <div class="nested-dropdown-content">
                  <a href="tarantulas-grooming.php#grooming">Grooming</a>
                  <a href="tarantulas-environment.php#environment">Proper Environment/Caging</a>
                  <a href="tarantulas-nutrition.php#nutrition">Nutrition</a>
                  <a href="tarantulas-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                 
              </div>
          </div>

          <!-- Domestic Pig Dropdown -->
          <div class="nested-dropdown">
              <a href="domesticpig.php#grooming">Domestic Pig</a>
              <div class="nested-dropdown-content">
                  <a href="domesticpig-grooming.php#grooming">Grooming</a>
                  <a href="domesticpig-environment.php#environment">Proper Environment/Caging</a>
                  <a href="domesticpig-nutrition.php#nutrition">Nutrition</a>
                  <a href="domesticpig-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                 
              </div>
          </div>

          <!-- Turtle Dropdown -->
          <div class="nested-dropdown">
              <a href="turtle.php#grooming">Turtle</a>
              <div class="nested-dropdown-content">
                  <a href="turtle-grooming.php#grooming">Grooming</a>
                  <a href="turtle-environment.php#environment">Proper Environment/Caging</a>
                  <a href="turtle-nutrition.php#nutrition">Nutrition</a>
                  <a href="turtle-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                 
              </div>
          </div>

          <!-- Hedgehogs Dropdown -->
          <div class="nested-dropdown">
              <a href="hedgehogs.php#grooming">Hedgehogs</a>
              <div class="nested-dropdown-content">
                  <a href="hedgehogs-grooming.php#grooming">Grooming</a>
                  <a href="hedgehogs-environment.php#environment">Proper Environment/Caging</a>
                  <a href="hedgehogs-nutrition.php#nutrition">Nutrition</a>
                  <a href="hedgehogs-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  
              </div>
          </div>

          <!-- Axolotl Dropdown -->
          <div class="nested-dropdown">
              <a href="axolotl.php#grooming">Axolotl</a>
              <div class="nested-dropdown-content">
                  <a href="axolotl-grooming.php#grooming">Grooming</a>
                  <a href="axolotl-environment.php#environment">Proper Environment/Caging</a>
                  <a href="axolotl-nutrition.php#nutrition">Nutrition</a>
                  <a href="axolotl-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="right-section">
    
    
    <div class="profile-section">
      <form method="POST" action="index.php">
        <div class="profile-picture-section">
        <a href="index.php"><img class="profile-img" src="profile-picture-dog.png"></a>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- main -->
<div class="main">
  <div class="go-back-text">
    <a class="back-text" href="home.php"><div class="text-box">
      <div class="arrow-left">
        <i id="left-arrow" class="material-icons">
          keyboard_backspace
</i>
      </div>
        <div class="back-to-home-text">
          <p>Back to Home</p>
        </div>
    </div></a>
  </div>
 

  <div class="thumbnail-container">
    <img id="thumbnail" src="/img\BIRDS\BIRD_Environment.jpg" alt="">
    <div class="corner"></div>
  </div>
  <div class="content">
    <div class="header-text">
      <h1 class="h1-text">Proper Environment for Birds</h1>
    </div>
    <div class="line-bar">
      <hr>
    </div>
    <div class="paragraph-section">
      <div class="paragraph" id="content">


<p>When bringing a pet bird into your house, one of the most crucial tasks in creating a pleasant environment for them is to acquire and correctly set up the appropriate cage. A well-equipped cage or aviary will not only keep your feathery companion secure, but will also help them adjust to their new surroundings and stay happy and healthy. While the specific elements of your bird's cage may vary depending on its species and unique characteristics, here are a few of the most important factors to consider:</p>

<h3>Cage Size</h3>
<p>Most birds require space to roam about and explore their surroundings, so select a cage that is large enough for your pet to fully extend and flap its wings.</p>
<h3>Location</h3>
<p>Once you've chosen the right size cage, you should position it somewhere in your home where your bird will be happy and content. There are a few crucial guidelines to consider:</p>
<p>Avoid drafty areas like windows, doors, and A/C vents. While a room with some natural light can be useful, avoid placing the cage in direct sunlight, since this can cause your bird to overheat. Do not place the cage in the kitchen since cooking smells and airborne particles could hurt your bird. Ideally, choose a location with moderate human activity—areas with high traffic may cause stress for your bird (especially when you first bring them home), but because birds are social creatures, it's important to place them somewhere where they'll have some exposure to your family.</p>
<h3>Perches and Toys</h3>
<p>Birds spend a substantial amount of time sitting, climbing, and playing on perches, so it's critical to supply their cages with perches of all sizes and textures. Perches are commonly made of natural woods like manzanita and ropes like hemp or unprocessed cotton. Make sure the perch fits your bird's size and allows their claws to properly grasp it; if the perch is too thick or thin, it may cause foot discomfort.</p>
<p>Toys are another crucial addition to your bird's cage because they help to combat boredom and provide mental stimulation. Make sure to include a variety of toys, such as puzzles, foraging, and chew toys. However, you should carefully monitor your bird's engagement with toys to prevent the possibility of potential hazards such as eating small pieces.</p>
<h3>Food and Water Stations</h3>
<p>Save space in the cage for your bird's food and water dishes, which should be sturdy enough to withstand tipping. Place them high or away from perches to keep droppings and debris from falling in. Make care to clean and refill the dishes on a regular basis to keep your bird nourished and watered.</p>

<p>After you've created a pleasant cage or aviary for your pet bird, the following step is to clean it on a consistent basis. In addition to replacing the food and water dishes, remove any uneaten food, droppings, and chewed or frayed toys, clean any accessories to minimize bacterial growth, and replace the cage lining on a regular basis.</p>

<a href="https://myrightbird.com/articles/factors-to-consider-when-setting-up-your-birds-cage">See More</a>

        
      </div>
    </div>
  </div>
</div>


<div class="grid-container">
  <div class="latest-articles"><h2>Latest Articles</h2></div>
  <div class="grid-section">
    <div class="left-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/img/image.png">
      </div>
      <div class="bottom-description-grid">
      <h1> </h1>
      <span class="span-text">
            <p class="learn-more-text">Learn More<i id="right-key" class="material-icons">
              east
            </i></p>
        </span>
      </div>
    </div>
    <div class="middle-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/img/image1.png">
        </div>
        <div class="bottom-description-grid">
          <h1></h1>
          <span class="span-text">
          <p class="learn-more-text">Learn More<i id="right-key" class="material-icons">
              east
            </i></p>
          </span>
        </div>
      </div>
    <div class="right-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/img/image2.png">
          </div>
          <div class="bottom-description-grid">
            
              <h1></h1>
            
            <span class="span-text">
            <p class="learn-more-text">Learn More<i id="right-key" class="material-icons">
              east
            </i></p>
            </span>
          </div>
        </div>
    </div>
  </div>
  
</div>
<div class="footer">
  <div class="footer-content">
  
    <a href="credits-page.php">
      <p id="group-4-footer">(c) 2024 TSU, Group 4 WEBPROG | All Rights Reserved</p>
    </a>
  </div>
</div>
<script src="navbar.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
   $(document).ready(function() {
  // Bookmark click event
  $(".bookmark-icon").click(function() {
    const sectionId = $(this).attr("name");  // Get the section name
    const sectionTitle = $("#" + sectionId + " h2").text();  // Get the title (h2 text)
    const sectionContent = $("#" + sectionId + " p").text();  // Get the content (p text)

    console.log(sectionTitle, sectionContent); // For debugging, check in browser console

    // Set the category based on the page
    const category = "Fishes";  // Change this dynamically if on a different page
    console.log(sectionTitle, sectionContent)
    // AJAX call to save the bookmark
    $.ajax({
      url: "save_bookmark.php", // PHP file to save the bookmark
      type: "POST",
      data: {
        title: sectionTitle,
        content: sectionContent,
        category: category  // Pass the category (e.g., "Cats")
      },
      success: function(response) {
        alert(response); // Show a confirmation message
      },
      error: function(xhr, status, error) {
        console.error("AJAX Error: " + error); // For debugging in case of error
      }
    });
  });
});

  </script>
  <script src="navbar.js"></script>
  <script src="search.js"></script>
</body>
</html>

<!-- <span id="grooming-bookmark" name="grooming" class="material-symbols-outlined bookmark-icon" style="font-variation-settings: 'FILL' 0;">bookmark</span> -->