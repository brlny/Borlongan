function redirectToProfile() {
    // Save the current page URL to sessionStorage
    sessionStorage.setItem('lastClickedPage', window.location.href);

    // Redirect to the profile page
    window.location.href = 'profile.php';
}

function redirectToProfileIn() {
  // Save the current page URL to sessionStorage
  sessionStorage.setItem('lastClickedPage', window.location.href);

  // Redirect to the profile page
  window.location.href = 'profileIn.php';
}

document.addEventListener("DOMContentLoaded", function() {
    // Get the element
    const fadingText = document.getElementById("fadingText");
  
    // Function to hide and show text shadow
    function toggleTextShadow() {
      fadingText.style.textShadow = "none"; // Hide text shadow
      setTimeout(() => {
        fadingText.style.textShadow = "10px 2px 5px #023020"; // Show text shadow after 2 seconds
      }, 2000);
    }
  
    // Call the function every 4 seconds (2 seconds to hide + 2 seconds to show)
    setInterval(toggleTextShadow, 4000);
  });
