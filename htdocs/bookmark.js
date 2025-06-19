// document.getElementById('bookmark-btn').addEventListener('click', function (event) {
//   event.preventDefault(); // Prevent form or button default behavior

//   // Extract the text from the .h1-text element
//   const h1Text = document.querySelector('.h1-text').textContent;

//   // Prepare data to send
//   const data = {
//     title: h1Text,
//     content: '', // You can add content here if needed
//     category: 'Dogs' // Example category
//   };

//   // Send data to PHP script using fetch API
//   fetch('save_bookmark.php', {
//     method: 'POST',
//     headers: {
//       'Content-Type': 'application/json',
//     },
//     body: JSON.stringify(data),
//   })
//     .then(response => response.text())
//     .then(data => {
//       console.log('Bookmark saved:', data);
//       alert('Bookmark saved successfully!');
//     })
//     .catch(error => {
//       console.error('Error saving bookmark:', error);
//       alert('Failed to save bookmark.');
//     });
// });
document.getElementById('bookmark-btn').addEventListener('click', function () {
  const bookmarkBtn = this; // Reference the clicked element
  const title = document.querySelector('.h1-text').innerText; // Get h1 text
  const url = window.location.href; // Get current page URL

  // Send data to the backend via fetch
  fetch('save_bookmark.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ title, url }) // Send title and URL as JSON
  })
    .then(response => response.json()) // Parse JSON response
    .then(data => {
      if (data.success) {
        // Transition the bookmark icon to red
        bookmarkBtn.classList.add('active'); // Add 'active' class for color change
        bookmarkBtn.style.pointerEvents = 'none'; // Disable further clicks
        alert('Bookmark saved successfully!');
      } else {
        alert(`Error saving bookmark: ${data.error}`);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('An error occurred while saving the bookmark.');
    });
});
