// Menu Filtering
document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const menuItems = document.querySelectorAll(".menu-item");

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // Update active button
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      this.classList.add("active");

      const category = this.dataset.category;

      // Filter menu items
      menuItems.forEach((item) => {
        if (category === "all" || item.dataset.category === category) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      });
    });
  });
});

// Quantity Controls
function changeQuantity(button, change) {
  const quantityDisplay = button.parentElement.querySelector(".qty-display");
  let quantity = parseInt(quantityDisplay.textContent);
  quantity += change;

  // Ensure quantity doesn't go below 1
  if (quantity < 1) quantity = 1;

  quantityDisplay.textContent = quantity;
}

// Cart Management
let cart = [];
let total = 0;

function addToCart(name, price, button) {
  const quantity = parseInt(
    button.parentElement.querySelector(".qty-display").textContent
  );
  const itemTotal = price * quantity;

  // Check if item already exists in cart
  const existingItemIndex = cart.findIndex((item) => item.name === name);

  if (existingItemIndex !== -1) {
    // Update existing item
    cart[existingItemIndex].quantity += quantity;
    cart[existingItemIndex].total += itemTotal;
  } else {
    // Add new item
    cart.push({
      name: name,
      price: price,
      quantity: quantity,
      total: itemTotal,
    });
  }

  // Update total
  total += itemTotal;

  // Update cart display
  updateCartDisplay();

  // Show cart
  document.getElementById("cartSidebar").classList.add("open");

  // Reset quantity to 1
  button.parentElement.querySelector(".qty-display").textContent = "1";

  // Show confirmation
  showAddToCartConfirmation(name);
}

function updateCartDisplay() {
  const cartItemsContainer = document.getElementById("cartItems");
  const cartTotalElement = document.getElementById("cartTotal");

  // Clear existing items
  cartItemsContainer.innerHTML = "";

  // Add current items
  cart.forEach((item) => {
    const cartItemElement = document.createElement("div");
    cartItemElement.className = "cart-item";
    cartItemElement.innerHTML = `
      <h4>${item.name}</h4>
      <p>${item.quantity} x $${item.price.toFixed(2)} = $${item.total.toFixed(
      2
    )}</p>
      <button class="remove-item" onclick="removeFromCart('${
        item.name
      }')">Remove</button>
    `;
    cartItemsContainer.appendChild(cartItemElement);
  });

  // Update total
  cartTotalElement.textContent = total.toFixed(2);
}

function removeFromCart(name) {
  const itemIndex = cart.findIndex((item) => item.name === name);

  if (itemIndex !== -1) {
    // Subtract from total
    total -= cart[itemIndex].total;

    // Remove item
    cart.splice(itemIndex, 1);

    // Update display
    updateCartDisplay();
  }
}

function showAddToCartConfirmation(itemName) {
  const confirmation = document.createElement("div");
  confirmation.className = "add-to-cart-confirmation";
  confirmation.textContent = `Added ${itemName} to cart!`;
  document.body.appendChild(confirmation);

  // Remove after animation
  setTimeout(() => {
    confirmation.remove();
  }, 2000);
}

// Checkout button
document.querySelector(".checkout-btn").addEventListener("click", function () {
  if (cart.length === 0) {
    alert("Your cart is empty!");
    return;
  }

  alert(
    `Order placed! Total: $${total.toFixed(2)}\nThank you for your purchase!`
  );
  cart = [];
  total = 0;
  updateCartDisplay();
});

// Toggle cart (already in your HTML, but including for completeness)
function toggleCart() {
  const cartSidebar = document.getElementById("cartSidebar");
  cartSidebar.classList.toggle("open");
}

// Close cart when clicking outside
document.addEventListener("click", function (event) {
  const cartSidebar = document.getElementById("cartSidebar");
  const cartToggle = document.querySelector(".cart-toggle");

  if (
    !cartSidebar.contains(event.target) &&
    !cartToggle.contains(event.target) &&
    !event.target.classList.contains("add-to-cart")
  ) {
    cartSidebar.classList.remove("open");
  }
});
