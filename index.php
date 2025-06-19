<?php $currentPage = 'index';
include 'partials/header.php'; ?>

    <main>
      <section class="section-hero">
        <div class="hero">
          <div class="hero-text-box">
            <h1 class="heading-primary">Discover The Art Of Perfect Coffee</h1>
            <p class="hero-description">
              Experience The Rich And Bold Flavors Of Our Exquisite Coffee
              Blends, Crafted To Awaken Your Senses and Start Your Day Right
            </p>
            <a href="menu.html" class="btn btn--full margin-right-sm"
              >Order Now &rarr;</a
            >
            <a href="menu.html" class="btn btn--outline">Explore More</a>

            <div class="hero-info">
              <div class="hero-info-group">
                <p class="hero-info-group--header">50+</p>
                <p class="hero-info-group--paragraph">Item Of Coffee</p>
              </div>

              <div class="hero-info-group">
                <p class="hero-info-group--header">20+</p>
                <p class="hero-info-group--paragraph">Order Running</p>
              </div>

              <div class="hero-info-group">
                <p class="hero-info-group--header">2k+</p>
                <p class="hero-info-group--paragraph">Happy Customers</p>
              </div>
            </div>
          </div>
          <div class="hero-img-box">
            <img
              src="./img/hero-img.png"
              alt="Coffee cup with splash and coffee beans"
              class="hero-img"
            />
          </div>
        </div>
      </section>

      <section class="section-offerings">
        <div class="offerings hero">
          <div class="offerings-img-box">
            <img
              src="./img/coffee-cup-1.png"
              alt="coffee cup with beans on plate"
              class="coffee-cup-first"
            />
          </div>
          <div class="offerings-text-box">
            <h2 class="offerings-primary">Coffee Heaven</h2>
            <p class="offerings-description">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Voluptates aut blanditiis ullam, voluptate aspernatur officia
              animi eos
            </p>
            <a href="menu.html" class="btn offerings-btn--full"
              >View All &rarr;</a
            >
          </div>
        </div>

        <div class="offerings hero">
          <div class="offerings-text-box">
            <h2 class="offerings-primary">Jean's Coffee</h2>
            <p class="offerings-description">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Voluptates aut blanditiis ullam, voluptate aspernatur officia
              animi eos
            </p>
            <a href="menu.html" class="btn offerings-btn--full"
              >View All &rarr;</a
            >
          </div>
          <div class="offerings-img-box">
            <img
              src="./img/coffee-cup-2.png"
              alt="coffee cup with beans on plate"
              class="coffee-cup-first"
            />
          </div>
        </div>
      </section>

      <section class="items">
        <div class="items-text-box">
          <h3 class="items-text-box--header">Best Selling Item</h3>
          <p class="items-text-box--description">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates
            aut blanditiis ullam, voluptate aspernatur officia animi eos
          </p>
        </div>

        <div class="items-selectors">
          <ul class="item-selectors-list">
            <li>
              <a href="#" class="item-selector-list--link">All</a>
            </li>
            <li><a href="#" class="item-selector-list--link">Black</a></li>
            <li><a href="#" class="item-selector-list--link">Espresso</a></li>
            <li><a href="#" class="item-selector-list--link">Dopio</a></li>
          </ul>
        </div>

        <div class="items-coffee">
          <div class="items-coffee--card">
            <img
              src="/img/coffee-cup-cappuccino-1.png"
              alt="cappuchino"
              class="items-coffee--image small-image"
            />
            <p class="items-coffee--description">Cappuccino</p>
            <a href="menu.html" class="items-order">Order Now</a>
          </div>

          <div class="items-coffee--card">
            <img
              src="/img/coffee-cup-americano-1.png"
              alt="americano"
              class="items-coffee--image small-image"
            />
            <p class="items-coffee--description">Americano</p>
            <a href="menu.html" class="items-order">Order Now</a>
          </div>

          <div class="items-coffee--card">
            <img
              src="/img/coffee-cup-espresso-1.png"
              alt="espresso"
              class="items-coffee--image small-image"
            />
            <p class="items-coffee--description">Espresso</p>
            <a href="menu.html" class="items-order">Order Now</a>
          </div>
        </div>

        <div class="switch-buttons">
          <button class="switch-btn margin-right-sm">&larr;</button>
          <button class="switch-btn right-btn">&rarr;</button>
        </div>
      </section>

      <section class="customers">
        <h1 class="customers-heading">What Our Customer Says</h1>
        <div class="customers-carousel">
          <button class="carousel-btn carousel-btn-prev">&lt;</button>
          <div class="customers-text-box">
            <p class="customers-text-box--description">
              I have Tested Caffeine Coffee Many Times. Really Amazing To Me.
              The Combination Was Very Good. One Thing Is To Serve Extraordinary
              Cofee With Caffeine.. I will Order From Caffeine For Any Of My
              Coffee Needs.
            </p>
            <div class="customers-rate">
              <div class="star-rating">★★★★★</div>
              <p class="customers-rate--name">Shalima Hayden</p>
            </div>
          </div>
          <button class="carousel-btn carousel-btn-next">&gt;</button>
        </div>
        <div class="carousel-dots">
          <span class="dot active"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </section>

      <!-- Newsletter Section -->
      <?php include 'partials/newsletter.php'; ?>

   <!-- Footer -->
   <?php include 'partials/footer.php'; ?>

    <script src="javascript/carousel.js">
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
