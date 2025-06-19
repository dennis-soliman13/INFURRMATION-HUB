{
  const nav = document.querySelector(".navbar");
  let lastScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    if (lastScrollY < window.scrollY) {
      nav.classList.add("nav--hidden");
    } else {
      nav.classList.remove("nav--hidden");
    }

    lastScrollY = window.scrollY;
  });
}

function toggleActive(button) {
  button.classList.toggle('active');
}



//popup Js


// Get elements
const profileImg = document.getElementById('profile-img');
const popupContainer = document.getElementById('popup-container');
const closePopupBtn = document.getElementById('close-popup');

// Show popup when the profile image is clicked
profileImg.addEventListener('click', function(event) {
    event.preventDefault();  // Prevent default link action
    popupContainer.style.display = 'block';  // Show the popup
});

// Close the popup when the close button is clicked
closePopupBtn.addEventListener('click', function() {
    popupContainer.style.display = 'none';  // Hide the popup
});

// Close the popup if clicking outside of the popup content
window.addEventListener('click', function(event) {
    if (event.target === popupContainer) {
        popupContainer.style.display = 'none';  // Hide the popup if clicked outside
    }
});


// bookmark ANOTHER JS

function bookmarkClicked(element) {
  // Check if the element is already clicked
  if (element.classList.contains('clicked')) {
      return; // Prevent further clicks
  }

  // Add the "clicked" class to change color and animate
  element.classList.add('clicked');

  // Disable further clicks
  element.style.pointerEvents = 'none'; // Prevent further interaction
}


// burger menu
 // Toggle the burger menu visibility
 function toggleBurgerMenu() {
  const menu = document.getElementById('burgerMenu');
  menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

// Toggle visibility of the submenu
function toggleSubMenu(event, submenuId) {
  event.preventDefault(); // Prevent the default link behavior
  const submenu = document.getElementById(submenuId);
  submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
}