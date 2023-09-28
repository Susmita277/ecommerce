
const bannerContainers = document.querySelectorAll('.bannerimage-container-section');

let currentIndex = 0;

// Function to show the next slide
function showNextSlide() {
// Hide the current active slide
bannerContainers[currentIndex].classList.remove('active');

// Increment the index to move to the next slide
currentIndex = (currentIndex + 1) % bannerContainers.length;

// Show the next slide
bannerContainers[currentIndex].classList.add('active');
}

// Initially show the first slide
bannerContainers[currentIndex].classList.add('active');

// Set the interval to automatically show the next slide after a specific time (e.g., every 3 seconds)
setInterval(showNextSlide, 3000);



// To show the loader
function showLoader() {
    var loader = document.getElementById("loader");
    loader.classList.remove("hide");
  }
  
  // To hide the loader
  function hideLoader() {
    var loader = document.getElementById("loader");
    loader.classList.add("hide");
  }
  
  // Usage example:
  showLoader(); // Show the loader
  
  // Simulating a time-consuming task (e.g., AJAX request, data processing)
  setTimeout(function() {
    hideLoader(); // Hide the loader after the task is complete
  }, 3000); // Change 3000 to the desired time in milliseconds
  


