<?php  $currentPage = 'menu';
include 'partials/header.php'; ?>

    <main>
      <!-- Menu Hero Section -->
      <section class="menu-hero">
        <div class="menu-hero-content">
          <h1>Our Delicious Menu</h1>
          <p>
            Discover our carefully crafted selection of premium coffees,
            pastries, and treats. Each item is prepared with the finest
            ingredients and utmost care.
          </p>
        </div>
      </section>

      <!-- Menu Categories -->
      <section class="menu-categories">
        <div class="menu-container">
          <div class="category-filters">
            <button class="filter-btn active" data-category="all">
              All Items
            </button>
            <button class="filter-btn" data-category="coffee">Coffee</button>
            <button class="filter-btn" data-category="cold-drinks">
              Cold Drinks
            </button>
            <button class="filter-btn" data-category="pastries">
              Pastries
            </button>
            <button class="filter-btn" data-category="breakfast">
              Breakfast
            </button>
          </div>

          <div class="menu-grid" id="menuGrid">
            <!-- Coffee Items -->
            <div class="menu-item" data-category="coffee">
              <div class="menu-item-header">
                <div>
                  <h3>Espresso</h3>
                  <div class="menu-item-tags">
                    <span class="tag tag--hot">Hot</span>
                    <span class="tag">Strong</span>
                  </div>
                </div>
                <div class="menu-item-price">$3.50</div>
              </div>
              <p class="menu-item-description">
                Rich, full-bodied shot of pure coffee perfection. Our signature
                blend delivers intense flavor with a smooth finish.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Espresso', 3.50, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>

            <div class="menu-item" data-category="coffee">
              <div class="menu-item-header">
                <div>
                  <h3>Cappuccino</h3>
                  <div class="menu-item-tags">
                    <span class="tag tag--hot">Hot</span>
                    <span class="tag">Creamy</span>
                  </div>
                </div>
                <div class="menu-item-price">$4.25</div>
              </div>
              <p class="menu-item-description">
                Perfect balance of espresso, steamed milk, and velvety foam.
                Topped with a dusting of cocoa powder.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Cappuccino', 4.25, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>

            <div class="menu-item" data-category="coffee">
              <div class="menu-item-header">
                <div>
                  <h3>Americano</h3>
                  <div class="menu-item-tags">
                    <span class="tag tag--hot">Hot</span>
                    <span class="tag">Smooth</span>
                  </div>
                </div>
                <div class="menu-item-price">$3.75</div>
              </div>
              <p class="menu-item-description">
                Classic coffee experience with our premium espresso diluted with
                hot water for a smooth, satisfying taste.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Americano', 3.75, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>

            <div class="menu-item" data-category="coffee">
              <div class="menu-item-header">
                <div>
                  <h3>Latte</h3>
                  <div class="menu-item-tags">
                    <span class="tag tag--hot">Hot</span>
                    <span class="tag">Milky</span>
                  </div>
                </div>
                <div class="menu-item-price">$4.50</div>
              </div>
              <p class="menu-item-description">
                Smooth espresso combined with steamed milk, creating a creamy
                and comforting coffee experience.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Latte', 4.50, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>

            <!-- Cold Drinks -->
            <div class="menu-item" data-category="cold-drinks">
              <div class="menu-item-header">
                <div>
                  <h3>Iced Coffee</h3>
                  <div class="menu-item-tags">
                    <span class="tag tag--cold">Cold</span>
                    <span class="tag">Refreshing</span>
                  </div>
                </div>
                <div class="menu-item-price">$4.00</div>
              </div>
              <p class="menu-item-description">
                Refreshing cold brew served over ice with your choice of milk.
                Perfect for hot summer days.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Iced Coffee', 4.00, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>

            <div class="menu-item" data-category="cold-drinks">
              <div class="menu-item-header">
                <div>
                  <h3>Frappé</h3>
                  <div class="menu-item-tags">
                    <span class="tag tag--cold">Cold</span>
                    <span class="tag tag--sweet">Sweet</span>
                  </div>
                </div>
                <div class="menu-item-price">$5.25</div>
              </div>
              <p class="menu-item-description">
                Blended iced coffee drink with whipped cream and your choice of
                flavor. A delightful frozen treat.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Frappé', 5.25, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>

            <!-- Pastries -->
            <div class="menu-item" data-category="pastries">
              <div class="menu-item-header">
                <div>
                  <h3>Croissant</h3>
                  <div class="menu-item-tags">
                    <span class="tag">Fresh</span>
                    <span class="tag">Buttery</span>
                  </div>
                </div>
                <div class="menu-item-price">$2.75</div>
              </div>
              <p class="menu-item-description">
                Flaky, buttery pastry baked fresh daily. Available plain or with
                almond filling.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Croissant', 2.75, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>

            <div class="menu-item" data-category="pastries">
              <div class="menu-item-header">
                <div>
                  <h3>Blueberry Muffin</h3>
                  <div class="menu-item-tags">
                    <span class="tag tag--sweet">Sweet</span>
                    <span class="tag">Fresh</span>
                  </div>
                </div>
                <div class="menu-item-price">$3.25</div>
              </div>
              <p class="menu-item-description">
                Moist and fluffy muffin bursting with fresh blueberries. Baked
                fresh every morning.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Blueberry Muffin', 3.25, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>

            <!-- Breakfast -->
            <div class="menu-item" data-category="breakfast">
              <div class="menu-item-header">
                <div>
                  <h3>Avocado Toast</h3>
                  <div class="menu-item-tags">
                    <span class="tag">Healthy</span>
                    <span class="tag">Fresh</span>
                  </div>
                </div>
                <div class="menu-item-price">$6.50</div>
              </div>
              <p class="menu-item-description">
                Artisan bread topped with fresh avocado, sea salt, and a drizzle
                of olive oil. Optional poached egg.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Avocado Toast', 6.50, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>

            <div class="menu-item" data-category="breakfast">
              <div class="menu-item-header">
                <div>
                  <h3>Breakfast Sandwich</h3>
                  <div class="menu-item-tags">
                    <span class="tag">Hearty</span>
                    <span class="tag">Hot</span>
                  </div>
                </div>
                <div class="menu-item-price">$7.25</div>
              </div>
              <p class="menu-item-description">
                Scrambled eggs, crispy bacon, and cheese on a toasted English
                muffin. The perfect way to start your day.
              </p>
              <div class="menu-item-footer">
                <div class="quantity-controls">
                  <button class="qty-btn" onclick="changeQuantity(this, -1)">
                    -
                  </button>
                  <span class="qty-display">1</span>
                  <button class="qty-btn" onclick="changeQuantity(this, 1)">
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart"
                  onclick="addToCart('Breakfast Sandwich', 7.25, this)"
                >
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Daily Specials -->
      <section class="specials-section">
        <div class="specials-content">
          <h2>Today's Specials</h2>
          <p>Limited time offers you don't want to miss!</p>

          <div class="specials-grid">
            <div class="special-item">
              <h3>Coffee & Pastry Combo</h3>
              <div class="special-price">$6.99</div>
              <div class="original-price">$8.50</div>
              <p>Any coffee + any pastry of your choice</p>
            </div>

            <div class="special-item">
              <h3>Morning Rush Special</h3>
              <div class="special-price">$4.99</div>
              <div class="original-price">$6.25</div>
              <p>Large coffee + breakfast sandwich (7-10 AM only)</p>
            </div>

            <div class="special-item">
              <h3>Happy Hour Frappé</h3>
              <div class="special-price">$3.99</div>
              <div class="original-price">$5.25</div>
              <p>50% off all frappés (3-5 PM daily)</p>
            </div>
          </div>
        </div>
      </section>

      <section>
        <!-- Cart Toggle Button -->
        <button class="cart-toggle" onclick="toggleCart()">🛒</button>
        <div class="cart-sidebar" id="cartSidebar">
          <div class="cart-header">
            <h2>Your Cart</h2>
            <button class="close-cart" onclick="toggleCart()">&times;</button>
          </div>
          <!-- Cart Sidebar -->
          <div class="cart-items" id="cartItems">
            <div class="cart-item">
              <h4>Sample Item</h4>
              <p>$12.99</p>
              <button class="remove-item">Remove</button>
            </div>
          </div>

          <div class="cart-total">
            <h3>Total: $<span id="cartTotal">0.00</span></h3>
            <button class="checkout-btn">Checkout</button>
          </div>
        </div>
      </section>
    </main>
    <script src="javascript/menu.js">
       //Mobile Menu Toggle
            document.addEventListener('DOMContentLoaded', function() {
        const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
        const mainNav = document.querySelector('.main-nav');

        if (mobileNavToggle && mainNav) {
          mobileNavToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
          });
        }
      });
    </script>
  </body>
</html>
