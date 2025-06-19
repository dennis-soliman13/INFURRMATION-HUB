let searchResults = [];  // Store all search results
let currentResultIndex = 0;  // Track the current result
let isSearching = false;  // Track whether the search is active

// Function to handle the search
function searchWords() {
    const input = document.getElementById("search-bar").value.toLowerCase();
    const content = document.getElementById("content");
    const elements = content.querySelectorAll("h1, h2, h3, p");  // Select h1, h2, h3, and p elements
    let found = false;

    // Clear previous search results and highlights
    searchResults = [];
    currentResultIndex = 0;  // Reset to the first result for a new search

    // Restore original text without highlights
    for (const element of elements) {
        element.innerHTML = element.textContent;
    }

    // Search and highlight matches
    if (input) {
        for (const element of elements) {
            if (element.textContent.toLowerCase().includes(input)) {
                found = true;
                const regex = new RegExp(`(${input})`, "gi");
                element.innerHTML = element.textContent.replace(
                    regex,
                    `<span class="highlight">$1</span>`
                );
                searchResults.push(element);  // Store the matching element
            }
        }
    }

    // Show or hide "no results" message
    document.getElementById("no-results").style.display = found ? "none" : "block";

    if (found) {
        // Highlight the first result
        highlightResult(0);
    }
}

// Highlight the current search result and ensure it is centered on screen
function highlightResult(index) {
    // Clear previous highlights
    searchResults.forEach(result => {
        const highlight = result.querySelector('.highlight');
        if (highlight) {
            highlight.style.backgroundColor = "yellow"; // Reset to yellow for others
        }
    });

    // Highlight the current result in orange
    const target = searchResults[index];
    const highlight = target.querySelector('.highlight');
    if (highlight) {
        highlight.style.backgroundColor = "orange";
    }

    // Center the result without causing any scroll animation
    centerElement(target);
}

// Function to center the element on screen (without triggering scroll animation)
function centerElement(element) {
    const rect = element.getBoundingClientRect();
    const elementTop = rect.top + window.scrollY;
    const elementBottom = rect.bottom + window.scrollY;

    const windowHeight = window.innerHeight;
    const scrollToPosition = elementTop - (windowHeight / 2) + (rect.height / 2);

    // Scroll to the element without animation
    window.scrollTo({
        top: scrollToPosition,
        behavior: "smooth"  // No smooth scrolling
    });
}

// Function to navigate between results (Enter, Right Arrow, Left Arrow)
function navigateResults(event) {
    if (searchResults.length === 0) return;

    if (event.key === "Enter") {
        if (isSearching) {
            // Move to the next result
            currentResultIndex = (currentResultIndex + 1) % searchResults.length;
            highlightResult(currentResultIndex);
        } else {
            // Start the search if it's not already active
            searchWords();
            isSearching = true;  // Set search as active
        }
    } else if (event.key === "ArrowRight") {
        // Move to the next result
        currentResultIndex = (currentResultIndex + 1) % searchResults.length;
        highlightResult(currentResultIndex);
    } else if (event.key === "ArrowLeft") {
        // Move to the previous result
        currentResultIndex = (currentResultIndex - 1 + searchResults.length) % searchResults.length;
        highlightResult(currentResultIndex);
    }
}

// Event listeners for keyboard navigation (Enter, Right Arrow, Left Arrow)
document.getElementById("search-bar").addEventListener("keydown", function (e) {
    navigateResults(e);
});

// Event listener for clicking the search icon
document.querySelector(".search-icon").addEventListener("click", function() {
    isSearching = false;  // Reset the search state on manual icon click
    searchWords();
});
