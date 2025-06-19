<?php
session_start(); // Start the session
include 'connection.php';


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

// Fetch content from the database
$sql = "SELECT section, content FROM content";
$result = $conn->query($sql);

$content = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $content[$row['section']] = $row['content'];
    }
}
$conn->close();

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
 
            <!-- Popup Container -->
     <div id="popup-container" class="popup-container">
       <div class="popup-content">
         <h2>Welcome, <span id="userFirstName"><?php echo $userFirstName; ?>!</span></h2>
         <p> Email: <span id="userEmail"><?php echo $userEmail; ?></span></p>
         <a href="saved_bookmarks.php" class="popup-text" style="text-decoration: none; color: inherit; cursor: pointer;">
         <p>Bookmarks</p>
         <div>
         <div>
     <a href="update.php" style="text-decoration:none;"><p>Update profile</p></a>
         </div>
     <a href="index.php" class="popup-text"style="text-decoration:none;"><p>Sign Out</p></a>
         </div>
 
       </div>
     </div>
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
    <img id="thumbnail" src="img\DOGS\DOG_Grooming.jpg" alt="">
    <div class="corner"></div>
  </div>
  <div class="content">
    <div class="header-text">
      <h1 class="h1-text"><?php echo $content['header'] ?? 'Default Header'; ?></h1>
    </div>
    <div class="line-bar">
      <hr>
      <div>
      <div class="bookmark-button" >
        <i id="bookmark-btn" class="material-icons">bookmark</i>
      </div>
    </div>
    </div>


    <div class="paragraph-section">
      <div class="paragraph" id="content">
        <a href="https://www.jerrygreendogs.org.uk/dog-advice/grooming-tips/?gad_source=1" target="_blank"><h2>HOW OFTEN SHOULD I GROOM MY DOG?</h2></a>
        <h3>BRUSHING</h3>
        <p>Different types of brushes are suited for different coat types, so choose the right brush for your dog. Dogs with long hair may need to be brushed every day, but short-haired types can be brushed once a week.
        </p>
        <h3>BATHING</h3>
        <p>Bathing your dog on a regular basis helps to keep them clean and fresh-smelling. However, bathing too regularly can deplete the skin's natural oils, resulting in dry skin and other skin irritations. Most dogs require only one bath every three months. Lather with a dog-specific shampoo and warm water, then rinse completely.</p>
        <h3>NAIL TRIMMING</h3>
        <p>Long nails can be quite painful for your dog. Regularly inspecting your dog's nails (including dewclaws) and clipping as needed will help prevent nail-related issues. If your dog walks regularly on harsh surfaces, such as pavement, their nails may naturally wear down. A decent test to see whether they are too long is to try to slide a bankcard between their nail and the floor while standing; if you can't, they could use a little trimming. Use a nail clipper made for dogs and be careful not to cut the quick, which is a blood vessel that goes into the nail. Nail trimming is best done after a bath because the water softens them.
        </p>
        <h3>EAR CLEANING</h3>
        <p>Cleaning your dog's ears helps to prevent infections and pain, but too much cleaning might make them unpleasant. Only clean your dog's ears if there is a noticeable accumulation of wax. Use a dog-specific ear cleaner to gently clean your dog's ears. Be careful not to put anything too deeply into the ear canal, as this might cause injury. If you notice any odor, irritation, or discharge in your ear, contact your veterinarian. 
        </p>
        <h3>TEETH CLEANING</h3>
        <p>Just like humans, dogs require regular dental care. Plaque and tartar buildup can cause gum disease and tooth loss. Brush your dog's teeth with a toothbrush and toothpaste designed for dogs, and introduce it cautiously. Once your dog is used to having its teeth washed, try brushing them a few times per week. If your dog dislikes having its teeth washed, chews and dental toys might help keep his teeth clean by manually scraping plaque off the tooth surface.
        </p>
        
        <a href="https://www.petmd.com/dog/general-health/flea-and-tick-prevention-and-treatment-dogs" target="_blank">
        <h2>PROBLEM WITH TICKS AND FLEAS?</h2></a>
        <p>There are a variety of products to help keep your dog free of parasites. These products can be in the form of pesticides, repellents, or growth inhibitors. Each tackles pests at different life stages to prevent infestations.
        Some products are only effective against one parasite (typically fleas).</p>
        <p>Combination flea and tick preventatives for dogs contain multiple ingredients to battle different types of pests. These prevention options may also provide additional protection against heartworms, skin and ear mites, and intestinal parasites.</p>
        <p>Flea and tick preventatives commonly come in two forms:</p>
        <ol><li><strong>Oral:</strong> chewable tablet that your dog ingests</li>
        <li><strong>Topical:</strong> liquid that’s applied between the should blades or down the back of your dog</li></ol>
        <p>Before deciding on a flea and tick medication, always check with your veterinarian and make sure it’s a good fit for your dog. </p>
        <a href="https://bondvet.com/b/dog-rash" target="_blank"><h2>SKIN RASHES, ITCHY SPOTS, AND/OR BALD SPOT?</h2></a>
        <p>There are many possible causes of skin problems, all of which can cause similar symptoms. Here are some common symptoms:</p>

        <ul>
        <li><strong>Fleas and flea allergy dermatitis</strong> (an allergic response to flea bites that causes extreme itchiness and commonly leads to skin infections).</li>

        <li><strong>Allergies</strong>. Most commonly, this includes environmental/seasonal allergies, also known as atopy. Food allergies or contact allergies (from plastic food bowls, for example) can also occur but are less common.</li>

        <li><strong>Contact irritation</strong> (shampoo, home cleaning products, a collar that chafes the skin, etc.).</li>

        <li><strong>Skin parasites</strong> such as mites/mange, ticks, or lice.</li>

        <li><strong>Medical conditions</strong> such as hormonal imbalances, autoimmune diseases, or other underlying issues.</li>

        <li><strong>Obsessive chewing or licking behavior</strong> due to stress or boredom.</li>

        <li>Anything else that can affect the skin, such as <strong>skin growths, matted fur, sunburn, poison ivy, poor nutrition, insect bites, dry skin, etc.</strong></li>

        <li><strong>Bacterial infections</strong>. Primary infections are possible, but more commonly, bacteria that normally live on the skin become opportunistic and overgrow due to disruption in the skin’s protective barrier secondary to rashes or wounds.</li>

        <li><strong>Fungal infections</strong>. These are usually opportunistic yeast infections that occur due to disruption of the protective skin barrier. However, less commonly, other fungi (including ringworm infection that is much more common in cats than in dogs) can occur.</li>
        </ul>

        <p>Check with your veterinarian before giving any medication or supplement at home, to be sure it’s safe for your pup. Some substances can be toxic or harmful, including “dog-safe” medications and supplements if they are given at the wrong dosage.</p>
        
      </div>
    </div>
  </div>
</div>


<div class="grid-container">
  <div class="latest-articles"><h2>Latest Articles</h2></div>
  <div class="grid-section">
    <div class="left-grid">
      <div class="top-picture-grid">
        <img class="grid-pictures"src="/img\DOGS\DOG_EnvironmentCaging.jpeg">
      </div>
      <div class="bottom-description-grid">
      <a href="dogs-environment.php">
        <h1>Proper Environment for Dogs</h1>
      </a>
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
          <a href="fishes-environment.php">
            <h1>Proper Environment for Fishes</h1>
          </a>
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
            <a href="birds-teaching.php">
              <h1>Dos and Dont's of Birds</h1>
            </a>
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

  <script src="navbar.js"></script>
  <script src="search.js"></script>
  <script src="bookmark.js"></script>

  <script>document.addEventListener('DOMContentLoaded', function() {
  const profileImg = document.getElementById('profile-img');
  const popupContainer = document.getElementById('popup-container');

  // Toggle popup visibility when clicking on profile picture
  profileImg.addEventListener('click', function(event) {
    popupContainer.style.display = 'block';
    event.stopPropagation(); // Prevent the event from propagating to the document
  });

  // Close the popup if clicked outside of it
  document.addEventListener('click', function(event) {
    if (!popupContainer.contains(event.target) && event.target !== profileImg) {
      popupContainer.style.display = 'none';
    }
  });

  // Prevent closing the popup when clicking inside it
  popupContainer.addEventListener('click', function(event) {
    event.stopPropagation();
  });
});
</script>

</body>
</html>

<!-- <span id="grooming-bookmark" name="grooming" class="material-symbols-outlined bookmark-icon" style="font-variation-settings: 'FILL' 0;">bookmark</span> -->