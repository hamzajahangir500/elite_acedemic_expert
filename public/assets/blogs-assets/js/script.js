// Function to set active state based on current page
function setActiveMenuItem() {
  // Get the current page URL
  const currentPage = window.location.pathname;

  // Remove active class from all menu items first
  document.querySelectorAll(".menu-item").forEach((item) => {
    item.classList.remove("active");
  });

  // Add active class based on current page
  if (currentPage.includes("Planning.html")) {
    document.querySelector(".menu-item.planning").classList.add("active");
  } else if (currentPage.includes("Motivation.html")) {
    document.querySelector(".menu-item.motivation").classList.add("active");
  } else if (currentPage.includes("Inspiration.html")) {
    document.querySelector(".menu-item.inspiration").classList.add("active");
  }
}

// Set active state only when page loads
document.addEventListener("DOMContentLoaded", setActiveMenuItem);
