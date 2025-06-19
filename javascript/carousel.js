// Customer Carousel JavaScript
document.addEventListener("DOMContentLoaded", function () {
  // Sample customer testimonials data
  const testimonials = [
    {
      text: "I have Tested Caffeine Coffee Many Times. Really Amazing To Me. The Combination Was Very Good. One Thing Is To Serve Extraordinary Coffee With Caffeine.. I will Order From Caffeine For Any Of My Coffee Needs.",
      name: "Shalima Hayden",
      rating: 5,
    },
    {
      text: "Exceptional quality and service! The coffee beans are perfectly roasted and the aroma is incredible. Caffeine has become my go-to place for premium coffee. Highly recommend to all coffee lovers!",
      name: "Marcus Johnson",
      rating: 5,
    },
    {
      text: "From the moment I walked in, I knew this was special. The baristas are knowledgeable and passionate about their craft. Every cup is a perfect blend of flavor and artistry.",
      name: "Emma Rodriguez",
      rating: 5,
    },
  ];

  // Get carousel elements
  const prevBtn = document.querySelector(".carousel-btn-prev");
  const nextBtn = document.querySelector(".carousel-btn-next");
  const textBox = document.querySelector(".customers-text-box");
  const dots = document.querySelectorAll(".dot");

  let currentSlide = 0;

  // Function to generate star rating HTML
  function generateStars(rating) {
    return "★".repeat(rating) + "☆".repeat(5 - rating);
  }

  // Function to update carousel content
  function updateCarousel(index) {
    const testimonial = testimonials[index];

    // Update text content with fade effect
    textBox.style.opacity = "0";

    setTimeout(() => {
      textBox.innerHTML = `
                <p class="customers-text-box--description">
                    ${testimonial.text}
                </p>
                <div class="customers-rate">
                    <div class="star-rating">${generateStars(
                      testimonial.rating
                    )}</div>
                    <p class="customers-rate--name">${testimonial.name}</p>
                </div>
            `;
      textBox.style.opacity = "1";
    }, 200);

    // Update dots
    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === index);
    });
  }

  // Next slide function
  function nextSlide() {
    currentSlide = (currentSlide + 1) % testimonials.length;
    updateCarousel(currentSlide);
  }

  // Previous slide function
  function prevSlide() {
    currentSlide =
      (currentSlide - 1 + testimonials.length) % testimonials.length;
    updateCarousel(currentSlide);
  }

  // Event listeners for buttons
  nextBtn.addEventListener("click", nextSlide);
  prevBtn.addEventListener("click", prevSlide);

  // Event listeners for dots
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      currentSlide = index;
      updateCarousel(currentSlide);
    });
  });

  // Auto-play functionality (optional)
  let autoPlayInterval;

  function startAutoPlay() {
    autoPlayInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
  }

  function stopAutoPlay() {
    clearInterval(autoPlayInterval);
  }

  // Start auto-play
  startAutoPlay();

  // Pause auto-play on hover
  const carousel = document.querySelector(".customers-carousel");
  carousel.addEventListener("mouseenter", stopAutoPlay);
  carousel.addEventListener("mouseleave", startAutoPlay);

  // Keyboard navigation
  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") {
      prevSlide();
    } else if (e.key === "ArrowRight") {
      nextSlide();
    }
  });

  // Touch/swipe support for mobile
  let touchStartX = 0;
  let touchEndX = 0;

  carousel.addEventListener("touchstart", (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });

  carousel.addEventListener("touchend", (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  });

  function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;

    if (Math.abs(diff) > swipeThreshold) {
      if (diff > 0) {
        nextSlide(); // Swipe left - next slide
      } else {
        prevSlide(); // Swipe right - previous slide
      }
    }
  }

  // Initialize carousel with first testimonial
  updateCarousel(0);
});

// Coffee Items Section JavaScript
document.addEventListener("DOMContentLoaded", function () {
  // Coffee items data
  const coffeeItems = {
    all: [
      {
        name: "Cappuccino",
        image: "/img/coffee-cup-cappuccino-1.png",
        category: "espresso",
      },
      {
        name: "Americano",
        image: "/img/coffee-cup-americano-1.png",
        category: "black",
      },
      {
        name: "Espresso",
        image: "/img/coffee-cup-espresso-1.png",
        category: "espresso",
      },
      {
        name: "Latte",
        image: "/img/coffee-cup-latte-1.png",
        category: "espresso",
      },
      {
        name: "Black Coffee",
        image: "/img/coffee-cup-black-1.png",
        category: "black",
      },
      {
        name: "Doppio",
        image: "/img/coffee-cup-doppio-1.png",
        category: "dopio",
      },
      {
        name: "Macchiato",
        image: "/img/coffee-cup-macchiato-1.png",
        category: "espresso",
      },
      {
        name: "Lungo",
        image: "/img/coffee-cup-lungo-1.png",
        category: "black",
      },
      {
        name: "Romano",
        image: "/img/coffee-cup-americano-1.png",
        category: "dopio",
      },
    ],
  };

  // Get DOM elements
  const filterLinks = document.querySelectorAll(".item-selector-list--link");
  const coffeeContainer = document.querySelector(".items-coffee");
  const prevButton = document.querySelector(".switch-btn.margin-right-sm");
  const nextButton = document.querySelector(".switch-btn.right-btn");

  // Pagination variables
  let currentPage = 0;
  let itemsPerPage = 3;
  let currentFilter = "all";
  let filteredItems = coffeeItems.all;

  // Function to filter items by category
  function filterItems(category) {
    if (category === "all") {
      filteredItems = coffeeItems.all;
    } else {
      filteredItems = coffeeItems.all.filter(
        (item) => item.category === category
      );
    }
    currentPage = 0; // Reset to first page when filtering
    displayItems();
    updateButtonStates();
  }

  // Function to display current page of items
  function displayItems() {
    const startIndex = currentPage * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const itemsToShow = filteredItems.slice(startIndex, endIndex);

    coffeeContainer.innerHTML = "";

    itemsToShow.forEach((item) => {
      const coffeeCard = document.createElement("div");
      coffeeCard.className = "items-coffee--card";
      coffeeCard.innerHTML = `
                <img src="${
                  item.image
                }" alt="${item.name.toLowerCase()}" class="items-coffee--image small-image" onerror="this.src='/img/coffee-placeholder.png'">
                <p class="items-coffee--description">${item.name}</p>
                <a href="#" class="items-order" data-coffee="${
                  item.name
                }">Order Now</a>
            `;

      // Add fade-in animation
      coffeeCard.style.opacity = "0";
      coffeeCard.style.transform = "translateY(20px)";
      coffeeContainer.appendChild(coffeeCard);

      // Trigger animation
      setTimeout(() => {
        coffeeCard.style.transition = "all 0.3s ease";
        coffeeCard.style.opacity = "1";
        coffeeCard.style.transform = "translateY(0)";
      }, 100);
    });

    // Add event listeners to order buttons
    const orderButtons = document.querySelectorAll(".items-order");
    orderButtons.forEach((button) => {
      button.addEventListener("click", function (e) {
        e.preventDefault();
        const coffeeName = this.getAttribute("data-coffee");
        handleOrder(coffeeName);
      });
    });
  }

  // Function to handle order clicks
  function handleOrder(coffeeName) {
    // You can customize this function to handle orders
    alert(`Added ${coffeeName} to cart!`);

    // Or redirect to menu page
    // window.location.href = 'menu.html';

    // Or show a toast notification
    showToast(`${coffeeName} added to cart!`);
  }

  // Function to show toast notification
  function showToast(message) {
    // Create toast element
    const toast = document.createElement("div");
    toast.className = "toast-notification";
    toast.textContent = message;
    toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #8B4513;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;

    document.body.appendChild(toast);

    // Show toast
    setTimeout(() => {
      toast.style.transform = "translateX(0)";
    }, 100);

    // Hide toast after 3 seconds
    setTimeout(() => {
      toast.style.transform = "translateX(100%)";
      setTimeout(() => {
        document.body.removeChild(toast);
      }, 300);
    }, 3000);
  }

  // Function to update button states
  function updateButtonStates() {
    const totalPages = Math.ceil(filteredItems.length / itemsPerPage);

    prevButton.disabled = currentPage === 0;
    nextButton.disabled = currentPage >= totalPages - 1;

    // Update button appearance
    prevButton.style.opacity = prevButton.disabled ? "0.5" : "1";
    nextButton.style.opacity = nextButton.disabled ? "0.5" : "1";
    prevButton.style.cursor = prevButton.disabled ? "not-allowed" : "pointer";
    nextButton.style.cursor = nextButton.disabled ? "not-allowed" : "pointer";
  }

  // Function to update active filter link
  function updateActiveFilter(activeCategory) {
    filterLinks.forEach((link) => {
      link.classList.remove("active");
      if (
        link.textContent.toLowerCase() === activeCategory ||
        (activeCategory === "all" && link.textContent.toLowerCase() === "all")
      ) {
        link.classList.add("active");
      }
    });
  }

  // Event listeners for filter links
  filterLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const category = this.textContent.toLowerCase();
      currentFilter = category;
      filterItems(category);
      updateActiveFilter(category);
    });
  });

  // Event listeners for navigation buttons
  nextButton.addEventListener("click", function () {
    const totalPages = Math.ceil(filteredItems.length / itemsPerPage);
    if (currentPage < totalPages - 1) {
      currentPage++;
      displayItems();
      updateButtonStates();
    }
  });

  prevButton.addEventListener("click", function () {
    if (currentPage > 0) {
      currentPage--;
      displayItems();
      updateButtonStates();
    }
  });

  // Keyboard navigation
  document.addEventListener("keydown", function (e) {
    if (e.target.closest(".items")) {
      if (e.key === "ArrowLeft") {
        prevButton.click();
      } else if (e.key === "ArrowRight") {
        nextButton.click();
      }
    }
  });

  // Initialize the display
  displayItems();
  updateButtonStates();
  updateActiveFilter("all");

  // Set first filter as active
  if (filterLinks.length > 0) {
    filterLinks[0].classList.add("active");
  }
});
