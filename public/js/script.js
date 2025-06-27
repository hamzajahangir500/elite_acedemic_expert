// document.addEventListener("DOMContentLoaded", function () {
//   const slides = document.querySelector(".carousel-slides");
//   const dots = document.querySelectorAll(".dot");
//   let currentSlide = 0;
//   const totalSlides = dots.length;

//   // Update dots and slide position
//   function updateCarousel() {
//     // Update dots
//     dots.forEach((dot, index) => {
//       dot.classList.toggle("active", index === currentSlide);
//     });

//     // Calculate slide position
//     const slideWidth = 100;
//     const offset = -currentSlide * slideWidth;
//     slides.style.transform = `translateX(${offset}%)`;
//   }

//   // Auto advance slides every 5 seconds
//   setInterval(() => {
//     currentSlide = (currentSlide + 1) % totalSlides;
//     updateCarousel();
//   }, 5000);

//   // Click handlers for dots
//   dots.forEach((dot, index) => {
//     dot.addEventListener("click", () => {
//       currentSlide = index;
//       updateCarousel();
//     });
//   });

//   // Touch/swipe handling
//   let startX = 0;
//   let isDragging = false;

//   slides.addEventListener("touchstart", (e) => {
//     startX = e.touches[0].pageX;
//     isDragging = true;
//   });

//   slides.addEventListener("touchmove", (e) => {
//     if (!isDragging) return;
//     const currentX = e.touches[0].pageX;
//     const diff = startX - currentX;

//     if (Math.abs(diff) > 50) {
//       // Minimum swipe distance
//       if (diff > 0 && currentSlide < totalSlides - 1) {
//         currentSlide++;
//       } else if (diff < 0 && currentSlide > 0) {
//         currentSlide--;
//       }
//       isDragging = false;
//       updateCarousel();
//     }
//   });

//   slides.addEventListener("touchend", () => {
//     isDragging = false;
//   });
// });

// document.addEventListener("DOMContentLoaded", function () {
//   const cardsContainer = document.querySelector(".testimonial-cards");
//   const cards = Array.from(document.querySelectorAll(".testimonial-card"));
//   const indicators = document.querySelectorAll(".indicator");

//   // Default center index
//   let currentIndex = 1; // Starting with center position

//   function updateCarousel(index) {
//     const cardWidth = cards[0].offsetWidth;
//     const gap = 30;

//     // Calculate slide position
//     cardsContainer.style.transform = `translateX(-${
//       index * (cardWidth + gap)
//     }px)`;

//     // Remove active state from all cards and indicators
//     cards.forEach((card) => card.classList.remove("center"));
//     indicators.forEach((ind) => ind.classList.remove("active"));

//     // Add active state to current card and indicator
//     cards[index].classList.add("center");
//     indicators[index].classList.add("active");
//   }

//   // Initialize with center active
//   // Set center card as active by default
//   cards[1].classList.add("center");
//   // Set center indicator as active by default
//   indicators[1].classList.add("active");

//   // Add click handlers to indicators
//   indicators.forEach((indicator, index) => {
//     indicator.addEventListener("click", () => {
//       currentIndex = index;
//       updateCarousel(currentIndex);
//     });
//   });

//   // Add touch support
//   let touchStartX = 0;
//   let touchEndX = 0;

//   cardsContainer.addEventListener("touchstart", (e) => {
//     touchStartX = e.touches[0].clientX;
//   });

//   cardsContainer.addEventListener("touchend", (e) => {
//     touchEndX = e.changedTouches[0].clientX;
//     handleSwipe();
//   });

//   function handleSwipe() {
//     const swipeThreshold = 50;
//     const difference = touchStartX - touchEndX;

//     if (Math.abs(difference) > swipeThreshold) {
//       if (difference > 0 && currentIndex < indicators.length - 1) {
//         // Swipe left - next slide
//         currentIndex++;
//         updateCarousel(currentIndex);
//       } else if (difference < 0 && currentIndex > 0) {
//         // Swipe right - previous slide
//         currentIndex--;
//         updateCarousel(currentIndex);
//       }
//     }
//   }

//   // Handle window resize
//   let resizeTimer;
//   window.addEventListener("resize", () => {
//     clearTimeout(resizeTimer);
//     resizeTimer = setTimeout(() => {
//       updateCarousel(currentIndex);
//     }, 250);
//   });
// });

document.querySelectorAll(".faq-toggle").forEach((button) => {
  button.addEventListener("click", () => {
    const faqItem = button.closest(".faq-item");
    const answer = faqItem.querySelector(".faq-answer");
    const icon = button.querySelector("i");

    // Close all other FAQ items
    document.querySelectorAll(".faq-answer").forEach((item) => {
      if (item !== answer && item.classList.contains("show")) {
        item.classList.remove("show");
        item.previousElementSibling
          .querySelector(".faq-toggle")
          .classList.remove("active");
      }
    });

    // Toggle current FAQ item
    button.classList.toggle("active");
    answer.classList.toggle("show");
  });
});

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

// Wait for DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
  // Get current page URL
  const currentPage = window.location.pathname.split("/").pop();

  // Get all nav links
  const navLinks = document.querySelectorAll(".nav-link");

  // Remove active class from all links
  navLinks.forEach((link) => {
    link.classList.remove("active");

    // Get href value and extract page name
    const href = link.getAttribute("href");

    // Check if this link matches current page
    if (href === currentPage) {
      link.classList.add("active");
    }
  });

  // Special handling for Services dropdown
  const servicesDropdown = document.querySelector(".dropdown-toggle");
  const dropdownItems = document.querySelectorAll(".dropdown-item");

  if (servicesDropdown) {
    // Handle click on Services main link
    servicesDropdown.addEventListener("click", function (e) {
      // If clicking the link itself (not the dropdown toggle)
      if (!e.target.classList.contains("chevron-icon")) {
        e.preventDefault();
        window.location.href = "/our-services";
      }
    });

    // If we're on services page, make the dropdown link active
    if (currentPage === "/our-services") {
      servicesDropdown.classList.add("active");
    }

    // Handle dropdown item clicks
    dropdownItems.forEach((item) => {
      item.addEventListener("click", function () {
        // Remove active class from all nav links
        navLinks.forEach((link) => link.classList.remove("active"));
        // Add active class to Services dropdown
        servicesDropdown.classList.add("active");
      });
    });
  }

  // Handle click on regular nav links
  navLinks.forEach((link) => {
    if (!link.classList.contains("dropdown-toggle")) {
      link.addEventListener("click", function () {
        navLinks.forEach((l) => l.classList.remove("active"));
        this.classList.add("active");
      });
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Initialize map
  const locationMap = L.map("contactLocationMap").setView(
    [51.5074, -0.1278],
    13
  );

  // Add OpenStreetMap tiles
  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution: "© OpenStreetMap contributors",
  }).addTo(locationMap);

  // Add marker
  const locationMarker = L.marker([51.5074, -0.1278])
    .addTo(locationMap)
    .bindPopup("Elite Academic Expert<br>London, UK")
    .openPopup();
});
