<?php
session_start(); // Start the session
include 'connect.php';


// Check if the user is logged in (if the session is set)
if (isset($_SESSION['firstName']) && isset($_SESSION['lastName']) && isset($_SESSION['email'])) {
  $userFirstName = $_SESSION['firstName'];
    $userLastName = $_SESSION['lastName'];
    $userEmail = $_SESSION['email'];
    $profilePicture = $_SESSION['profilepicture'];
} else {
  // If session variables are not set, you can handle it here (e.g., show a message or redirect)
  $userFirstName = "Guest";
  $userLastName = "User";
  $userEmail = "Not logged in";
}

// Now you can safely access the session variables
$userFirstName = $_SESSION['firstName'];
$userLastName = $_SESSION['lastName'];
$userEmail = $_SESSION['email'];
$profilePicture = $_SESSION['profilepicture'];
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
              <a href="cats-grooming.php#grooming">Cats</a>
              <div class="nested-dropdown-content">
                  <a href="cats-grooming.php#grooming">Grooming</a>
                  <a href="cats-environment.php#environment">Proper Environment/Caging</a>
                  <a href="cats-nutrition.php#nutrition">Nutrition</a>
                  <a href="cats-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>

          <!-- Birds Dropdown -->
          <div class="nested-dropdown">
              <a href="birds-grooming.php#grooming">Birds</a>
              <div class="nested-dropdown-content">
                  <a href="birds-grooming.php#grooming">Grooming</a>
                  <a href="birds-environment.php#environment">Proper Environment/Caging</a>
                  <a href="birds-nutrition.php#nutrition">Nutrition</a>
                  <a href="birds-teaching.php#teaching">Dos and Don’ts</a>
                  
              </div>
          </div>

          <!-- Fishes Dropdown -->
          <div class="nested-dropdown">
              <a href="fishes-grooming.php#grooming">Fishes</a>
              <div class="nested-dropdown-content">
                  <a href="fishes-grooming.php#grooming">Grooming</a>
                  <a href="fishes-environment.php#environment">Proper Environment/Caging</a>
                  <a href="fishes-nutrition.php#nutrition">Nutrition</a>
                  <a href="fishes-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>

          <!-- Rabbit Dropdown -->
          <div class="nested-dropdown">
              <a href="rabbit-grooming.php#grooming">Rabbit</a>
              <div class="nested-dropdown-content">
                  <a href="rabbit-grooming.php#grooming">Grooming</a>
                  <a href="rabbit-environment.php#environment">Proper Environment/Caging</a>
                  <a href="rabbit-nutrition.php#nutrition">Nutrition</a>
                  <a href="rabbit-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>

          <!-- Rodents Dropdown -->
          <div class="nested-dropdown">
              <a href="rodents-grooming.php#grooming">Rodents</a>
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
              <a href="ballpython-grooming.php#grooming">Snake (Ball Python)</a>
              <div class="nested-dropdown-content">
                  <a href="ballpython-grooming.php#grooming">Grooming</a>
                  <a href="ballpython-environment.php#environment">Proper Environment/Caging</a>
                  <a href="ballpython-nutrition.php#nutrition">Nutrition</a>
                  <a href="ballpython-teaching.php#teaching">Dos and Don’ts</a>
                 
              </div>
          </div>

          <!-- Tarantulas Dropdown -->
          <div class="nested-dropdown">
              <a href="tarantulas-grooming.php#grooming">Tarantulas</a>
              <div class="nested-dropdown-content">
                  <a href="tarantulas-grooming.php#grooming">Grooming</a>
                  <a href="tarantulas-environment.php#environment">Proper Environment/Caging</a>
                  <a href="tarantulas-nutrition.php#nutrition">Nutrition</a>
                  <a href="tarantulas-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                 
              </div>
          </div>

          <!-- Domestic Pig Dropdown -->
          <div class="nested-dropdown">
              <a href="domesticpig-grooming.php#grooming">Domestic Pig</a>
              <div class="nested-dropdown-content">
                  <a href="domesticpig-grooming.php#grooming">Grooming</a>
                  <a href="domesticpig-environment.php#environment">Proper Environment/Caging</a>
                  <a href="domesticpig-nutrition.php#nutrition">Nutrition</a>
                  <a href="domesticpig-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                 
              </div>
          </div>

          <!-- Turtle Dropdown -->
          <div class="nested-dropdown">
              <a href="turtle-grooming.php#grooming">Turtle</a>
              <div class="nested-dropdown-content">
                  <a href="turtle-grooming.php#grooming">Grooming</a>
                  <a href="turtle-environment.php#environment">Proper Environment/Caging</a>
                  <a href="turtle-nutrition.php#nutrition">Nutrition</a>
                  <a href="turtle-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                 
              </div>
          </div>

          <!-- Hedgehogs Dropdown -->
          <div class="nested-dropdown">
              <a href="hedgehogs-grooming.php#grooming">Hedgehogs</a>
              <div class="nested-dropdown-content">
                  <a href="hedgehogs-grooming.php#grooming">Grooming</a>
                  <a href="hedgehogs-environment.php#environment">Proper Environment/Caging</a>
                  <a href="hedgehogs-nutrition.php#nutrition">Nutrition</a>
                  <a href="hedgehogs-teaching.php#teaching">Dos and Don’ts (Teaching)</a>
                  
              </div>
          </div>

          <!-- Axolotl Dropdown -->
          <div class="nested-dropdown">
              <a href="axolotl-grooming.php#grooming">Axolotl</a>
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
  <div class="burger">
  <i onclick="toggleBurgerMenu()" id="menu" class="material-icons">menu</i>

<!-- Burger menu content -->
<div id="burgerMenu" class="burger-menu">
  <ul>
    <li>
      <a href="#domestic" onclick="toggleSubMenu(event, 'domesticMenu')"> <p>Domestic Animals</p></a>
      <ul id="domesticMenu" class="submenu">
        <li><a href="dogs.php#grooming">Dogs</a></li>
        <li><a href="cats-grooming.php#grooming">Cats</a></li>
        <li><a href="birds-grooming.php#grooming">Birds</a></li>
        <li><a href="fishes-grooming.php#grooming">Fishes</a></li>
        <li><a href="rabbit-grooming.php#grooming">Rabbits</a></li>
        <li><a href="rodents-grooming.php#grooming">Rodents</a></li>
      </ul>
    </li>
    <li><a href="#exotic" onclick="toggleSubMenu(event, 'exoticMenu')"> <p>Exotic Animals</p></a></li>
    <ul id="exoticMenu" class="submenu">
       <li><a href="ballpython-grooming.php#grooming">Snake (Ball Python)</a></li>
        <li><a href="tarantulas-grooming.php#grooming">Tarantulas</a></li>
        <li><a href="domesticpig-grooming.php#grooming">Domestic Pig</a></li>
        <li><a href="turtle-grooming.php#grooming">Turtle</a></li>
        <li><a href="hedgehogs-grooming.php#grooming">Hedgehogs</a></li>
        <li><a href="axolotl-grooming.php#grooming">Axolotl</a></li>
    </ul>
  </ul>
  <a href="saved_bookmarks.php" class="popup-text" style="text-decoration: none; color: inherit; cursor: pointer; ">
        <p>Bookmarks</p>
        </a>
        <a href="update.php" class="popup-text" style="text-decoration: none; color: inherit; cursor: pointer;"><p>Update profile</p></a>
        <a href="index.php"><p>Sign out</p></a>
</div>
</div>
<div class="profile-section">
    <div class="profile-picture-section">
        <?php 
        // Default profile picture if session variable is not set
        $profilePicture = isset($_SESSION['profilepicture']) ? $_SESSION['profilepicture'] : 'img\profile-picture-dog.png'; 
        ?>
        <img id="profile-img" class="profile-img" src="<?php echo htmlspecialchars($profilePicture); ?>" alt="Profile Picture">
    </div>
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
    <img id="thumbnail" src="/img\RABBITS\RABBIT_Grooming.jpg" alt="">
    <div class="corner"></div>
  </div>
  <div class="content">
    <div class="header-text">
      <h1 class="h1-text">Grooming for Rabbits</h1>
    </div>
    <div class="line-bar">
      <hr>
    </div>
    <div class="paragraph-section">
      <div class="paragraph" id="content">
      <ul>
        <li>
          <p>Grooming your rabbit includes fur brushing, fur trimming as need be, mat removal, and removal of debris caught up in the rabbit's fur. Grooming also includes cleaning the eye areas, ears, the bottom side of your rabbit and nail trims. Care of the rabbit's fur and skin calls for your observation to check for the presence of parasites and your quick action to provide needed treatment. This article will highlight all the essential rabbit grooming basics and will help you understand how to properly groom your bunny. A well groomed bunny is a happier, healthier bunny.</p>
        </li>
        <h3>Fur Brushing: </h3>
        <li>
          <p>By careful brushing of our rabbits, we hope to remove the excess fur to prevent the ingestion of fur. This is essential to prevent illness such as GI blocks. We also want to help the rabbit clean their fur and prevent fur clumping or matting which can irritate their skin. The rabbit constantly groom themselves, so they will always have some hair in their system. Our job in the grooming process is to limit their intake of fur and also to help keep the fur and skin of the rabbit clean and mat free. Keeping the eyes clear of hay or fur will prevent irritation and potential infection of your rabbit's eyes. We use moistened cotton balls and gently clean the area around the eye. If your rabbit tends to have a heavy amount of fur around their eyes, you may use a tool called a mascara brush or a small flea comb to comb back the fur from the eye. Keeping the rabbit's ears free of debris or wax is important. Removal of wax build up from the outer ear is helpful. Lop rabbits may tend to have damp areas inside their ears which you need to keep clean and dry or they may suffer from an ear infection or inflammation which will require veterinary care.</p>
        </li>
        <h3>Basic cleaning: </h3>
        <li>
          <p>Check the bottom side of your rabbit to make sure that no excess urine or droppings have remained on his underside. If so, remove them. Wipe off any of these substances and dry. Keep a watchful eye for any signs of urinary tract issues and illness such as cecal overproduction or diarrhea. Seek vet care if you see this in your rabbit. Be sure to keep your litter box clean also so the bunny is not forced to sit on their urine or droppings. Nail trims: Keeping nails trimmed will prevent snags, torn nails and possible infection to the nail bed and toe. Monthly nail trims are recommended.</p>
        </li>
        <li>
          <p>Grooming your rabbit will provide you with a wonderful time together. Many rabbits enjoy the grooming session with their humans. Grooming need not be difficult or unpleasant. Make your grooming sessions an opportunity to connect and be with your bunny. Grooming time will quickly become another special time to spend together.</p>
        </li>
        <li>
          <p>Grooming is part of the normal health care routine of a rabbit. Rabbits are delicate animals and their grooming needs to be carried out on a regular basis, with gentle care. The grooming process is a wonderful way to bond with your rabbit. Take your time. Learn what you need to do and carry out grooming as part of your normal interaction with your rabbit. As you have read, all grooming relates directly to keeping your rabbit disease free and healthy.</p>
        </li>
      </ul>

      <a href="https://therabbithaven.org/rabbit-grooming-basics#:~:text=Grooming%20your%20rabbit%20includes%20fur%20brushing%2C%20fur%20trimming,bottom%20side%20of%20your%20rabbit%20and%20nail%20trims.">See More</a>
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
<script src="navbar.js"></script>
<script src="search.js"></script>
  </script>
</body>
</html>

<!-- <span id="grooming-bookmark" name="grooming" class="material-symbols-outlined bookmark-icon" style="font-variation-settings: 'FILL' 0;">bookmark</span> -->