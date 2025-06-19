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
  <link rel="stylesheet" href="general.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="contents.css">
  <title>Cats Page</title>
  <link rel="icon" type="image/x-icon" href="pethub/android-chrome-512x512.ico">
  <link rel="stylesheet" href="nosearch.css">
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
    const category = "Dogs";  // Change this dynamically if on a different page
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
      <button class="button-style" id="button-spacing">DOMESTIC PETS<div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Dogs Dropdown -->
          <div class="nested-dropdown">
              <a href="dogs.php#grooming">DOGS</a>
              <div class="nested-dropdown-content">
                  <a href="dogs.php#grooming">Grooming</a>
                  <a href="dogs-environment.php#environment">Proper Environment/Caging</a>
                  <a href="dogs-nutrition.php#nutrition">Nutrition</a>
                  <a href="dogs-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="dogs.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Cats Dropdown -->
          <div class="nested-dropdown">
              <a href="cats.php#grooming">CATS</a>
              <div class="nested-dropdown-content">
                  <a href="cats.php#grooming">Grooming</a>
                  <a href="cats-environment.php#environment">Proper Environment/Caging</a>
                  <a href="cats-nutrition.php#nutrition">Nutrition</a>
                  <a href="cats-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="cats.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Birds Dropdown -->
          <div class="nested-dropdown">
              <a href="birds.php#grooming">BIRDS</a>
              <div class="nested-dropdown-content">
                  <a href="birds-grooming.php#grooming">Grooming</a>
                  <a href="birds-environment.php#environment">Proper Environment/Caging</a>
                  <a href="birds-nutrition.php#nutrition">Nutrition</a>
                  <a href="birds-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="birds.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Fishes Dropdown -->
          <div class="nested-dropdown">
              <a href="fishes.php#grooming">FISHES</a>
              <div class="nested-dropdown-content">
                  <a href="fishes-grooming.php#grooming">Grooming</a>
                  <a href="fishes-environment.php#environment">Proper Environment/Caging</a>
                  <a href="fishes-nutrition.php#nutrition">Nutrition</a>
                  <a href="fishes-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="fishes.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Rabbit Dropdown -->
          <div class="nested-dropdown">
              <a href="rabbit.php#grooming">RABBIT</a>
              <div class="nested-dropdown-content">
                  <a href="rabbit-grooming.php#grooming">Grooming</a>
                  <a href="rabbit-environment.php#environment">Proper Environment/Caging</a>
                  <a href="rabbit-nutrition.php#nutrition">Nutrition</a>
                  <a href="rabbit-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="rabbit.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Rodents Dropdown -->
          <div class="nested-dropdown">
              <a href="rodents.php#grooming">RODENTS</a>
              <div class="nested-dropdown-content">
                  <a href="rodents-grooming.php#grooming">Grooming</a>
                  <a href="rodents-environment.php#environment">Proper Environment/Caging</a>
                  <a href="rodents-nutrition.php#nutrition">Nutrition</a>
                  <a href="rodents-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="rodents.php#products">Recommended Products</a>
              </div>
          </div>
      </div>
    </div>
    <!-- Main Dropdown for Exotic Pets -->
    <div class="dropdown">
      <button class="button-style">EXOTIC PETS <div class="chevron-down"><i class="fa fa-chevron-down"></i></div></button>
      <div class="dropdown-content">
          <!-- Ball Python Dropdown -->
          <div class="nested-dropdown">
              <a href="ballpython.php#grooming">Snake (Ball Python)</a>
              <div class="nested-dropdown-content">
                  <a href="ballpython.php#grooming">Grooming</a>
                  <a href="ballpython.php#environment">Proper Environment/Caging</a>
                  <a href="ballpython.php#nutrition">Nutrition</a>
                  <a href="ballpython.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="ballpython.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Tarantulas Dropdown -->
          <div class="nested-dropdown">
              <a href="tarantulas.php#grooming">Tarantulas</a>
              <div class="nested-dropdown-content">
                  <a href="tarantulas.php#grooming">Grooming</a>
                  <a href="tarantulas.php#environment">Proper Environment/Caging</a>
                  <a href="tarantulas.php#nutrition">Nutrition</a>
                  <a href="tarantulas.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="tarantulas.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Domestic Pig Dropdown -->
          <div class="nested-dropdown">
              <a href="domesticpig.php#grooming">Domestic Pig</a>
              <div class="nested-dropdown-content">
                  <a href="domesticpig.php#grooming">Grooming</a>
                  <a href="domesticpig.php#environment">Proper Environment/Caging</a>
                  <a href="domesticpig.php#nutrition">Nutrition</a>
                  <a href="domesticpig.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="domesticpig.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Turtle Dropdown -->
          <div class="nested-dropdown">
              <a href="turtle.php#grooming">Turtle</a>
              <div class="nested-dropdown-content">
                  <a href="turtle.php#grooming">Grooming</a>
                  <a href="turtle.php#environment">Proper Environment/Caging</a>
                  <a href="turtle.php#nutrition">Nutrition</a>
                  <a href="turtle.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="turtle.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Hedgehogs Dropdown -->
          <div class="nested-dropdown">
              <a href="hedgehogs.php#grooming">Hedgehogs</a>
              <div class="nested-dropdown-content">
                  <a href="hedgehogs.php#grooming">Grooming</a>
                  <a href="hedgehogs.php#environment">Proper Environment/Caging</a>
                  <a href="hedgehogs.php#nutrition">Nutrition</a>
                  <a href="hedgehogs.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="hedgehogs.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Bearded Dragons Dropdown -->
          <div class="nested-dropdown">
              <a href="bearded_dragons.php#grooming">Bearded Dragons</a>
              <div class="nested-dropdown-content">
                  <a href="bearded_dragons.php#grooming">Grooming</a>
                  <a href="bearded_dragons.php#environment">Proper Environment/Caging</a>
                  <a href="bearded_dragons.php#nutrition">Nutrition</a>
                  <a href="bearded_dragons.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="bearded_dragons.php#products">Recommended Products</a>
              </div>
          </div>

          <!-- Axolotl Dropdown -->
          <div class="nested-dropdown">
              <a href="axolotl.php#grooming">Axolotl</a>
              <div class="nested-dropdown-content">
                  <a href="axolotl.php#grooming">Grooming</a>
                  <a href="axolotl.php#environment">Proper Environment/Caging</a>
                  <a href="axolotl.php#nutrition">Nutrition</a>
                  <a href="axolotl.php#teaching">Dos and Don’ts (Teaching)</a>
                  <a href="axolotl.php#products">Recommended Products</a>
              </div>
          </div>
      </div>
    </div>
  </div>
  <div class="right-section">
    <div class="search-section">
      <input class="search-bar" type="text" name="search" placeholder="Search">
      <img class="search-icon" src="/img/search.png" alt="search-icon">
    </div>
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
    
      <a class="back-text" href="#">Back to Cat Care</a>
    
  </div>
  <div class="thumbnail-container">
    <img id="thumbnail" src="/img/cats/CAT_Grooming.jpeg" alt="">
    <div class="corner"></div>
  </div>
  <div class="content">
    <div class="header-text">
      <h1 class="h1-text">Grooming for Cats</h1>
    </div>
    <div class="line-bar">
      <hr>
    </div>
    <div class="paragraph-section">
      <div class="paragraph">
      <br>
      <p>Grooming might take a long or short time, depending on the cat's breed and hair texture. To ensure that your grooming sessions go successfully, make sure you have all of the necessary equipment and a designated grooming area.</p>
            
      <h3>Fur Brushing</h3>
     <p>For short haired cats, groom weekly with a fine-toothed metal comb to remove tangles and a natural-bristle or rubber brush for loose hairs, brushing in the direction of hair growth. For longhaired cats, groom daily with a steel comb, teasing out knots by hand or with a damp cloth—never scissors. Seek vet help for severe knots. Make grooming easier by using treats, gentle strokes, and soothing words to calm and distract your cat. Take the opportunity to check their overall health, including teeth, eyes, ears, and gums, but take a break if grooming causes stress.</p>

      <h3>Checking your cat’s claw</h3>
      <p>Outdoor and active cats often maintain their claws naturally, but indoor or elderly cats may need assistance. Weekly checks and occasional trims prevent overgrown claws, which can cause pain or infection if they grow into the paw pads. Overgrown claws in senior cats might indicate osteoarthritis, so consult a vet if needed. Trim claws only when necessary, as cats rely on them for defense, climbing, and grooming.</p>

      <h3>Trimming your cat’s claw</h3>
      <p>Before trimming a cat's claws, ensure it’s necessary, especially for outdoor cats that rely on claws for climbing and defense. Check claws weekly, focusing on dew claws and extra toes (polydactyl cats), which don’t wear down naturally. Seek veterinary help for ingrown, ripped, or missing claws. Introduce claw-trimming early, filing soft kitten claws and using sharp, cat-specific clippers for adults. Gently press the paw to unsheathe the claw, trimming only the transparent tip to avoid the quick (the sensitive, blood-filled area). If you accidentally nick the quick, use silver nitrate sticks and cotton to stop bleeding, and consult a vet if it persists. Check paw pads and between toes for cuts, soreness, or foreign objects during claw checks, and contact a vet for abnormalities. If unsure about trimming, ask your vet for guidance or assistance.</p>

      <h3>Grooming a kitten</h3>
      <p>Cats rarely require bathing since they clean themselves. However, if your cat comes home after rolling in something unpleasant, is coated in muck, or has matted fur, you may need to take matters into your own hands. However, bathing cats can be difficult and stressful because the majority of them loathe baths.</p>

      <h3>Cleaning your cat’s ear</h3> 
      <p>
        Cats enjoy keeping themselves clean, but they occasionally require assistance in reaching specific places for TLC. Cleaning a cat's ears might be difficult because they are quite sensitive in that area. Some cats may struggle to keep their ears clean, therefore they can benefit from occasional cleaning.
      </p>  
        <a href="https://www.purina.co.uk/articles/cats/health/daily-care/grooming-your-cat"><h3>See more</h3></a>
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
      <h2>Dos and Dont's for Dogs</h2>
      <span class="span-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo est quod itaque minus unde nisi iure ea ducimus, totam quasi maiores sapiente inventore dicta autem magni aliquam optio laborum blanditiis!
        </span>
      </div>
    </div>
    <div class="middle-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/img/image1.png">
        </div>
        <div class="bottom-description-grid">
          <h2>Grooming for Dogs</h2>
          <span class="span-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo est quod itaque minus unde nisi iure ea ducimus, totam quasi maiores sapiente inventore dicta autem magni aliquam optio laborum blanditiis!
          </span>
        </div>
      </div>
    <div class="right-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/img/image2.png">
          </div>
          <div class="bottom-description-grid">
            <h2>Nutrition for Dogs</h2>
            <span class="span-text">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo est quod itaque minus unde nisi iure ea ducimus, totam quasi maiores sapiente inventore dicta autem magni aliquam optio laborum blanditiis!
            </span>
          </div>
        </div>
    </div>
  </div>
  
</div>
<div class="footer">
  <div class="footer-content">
    <h3>About us</h3>
    <hr>
      <p>Dogs Grooming</p>
      <p>Dogs Nutrition</p>
      <p>Dogs Dos and Dont's</p>
      <p id="group-4-footer">(c) 2024 TSU, Group 4 WEBPROG </p>
  </div>
</div>
</body>
</html>

<!-- <span id="grooming-bookmark" name="grooming" class="material-symbols-outlined bookmark-icon" style="font-variation-settings: 'FILL' 0;">bookmark</span> -->