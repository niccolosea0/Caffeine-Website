<?php $currentPage = 'about';
 include 'partials/header.php'; ?>

    <main>
      <!-- About Hero Section -->
      <section class="menu-hero">
        <div class="menu-hero-content">
          <h1>About Caffeine</h1>
          <p>
            Discover the story behind our passion for exceptional coffee and our
            commitment to creating the perfect coffee experience for every
            customer.
          </p>
        </div>
      </section>

      <!-- Our Story Section -->
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
            <h2 class="offerings-primary">Our Story</h2>
            <p class="offerings-description">
              Founded in 2018, Caffeine began as a small neighborhood coffee
              shop with a big dream: to serve the finest coffee while creating a
              warm, welcoming space for our community. What started as a passion
              project has grown into a beloved local institution.
            </p>
            <a href="#mission" class="btn offerings-btn--full"
              >Learn More &rarr;</a
            >
          </div>
        </div>

        <div class="offerings hero">
          <div class="offerings-text-box">
            <h2 class="offerings-primary">Quality First</h2>
            <p class="offerings-description">
              We source our beans directly from sustainable farms around the
              world, ensuring every cup meets our high standards. Our expert
              roasters craft each blend with precision and care, bringing out
              the unique flavors that make our coffee extraordinary.
            </p>
            <a href="#team" class="btn offerings-btn--full"
              >Meet Our Team &rarr;</a
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

      <!-- Mission & Values Section -->
      <section class="items" id="mission">
        <div class="items-text-box">
          <h3 class="items-text-box--header">Our Mission & Values</h3>
          <p class="items-text-box--description about">
            At Caffeine, we believe that great coffee brings people together.
            Our mission is to create exceptional coffee experiences that inspire
            connection, creativity, and community.
          </p>
        </div>

        <div class="items-coffee">
          <div class="items-coffee--card">
            <div class="items-coffee--image small-image">🌱</div>
            <p class="items-coffee--description">Sustainability</p>
            <div>
              We're committed to ethical sourcing and environmental
              responsibility in everything we do.
            </div>
          </div>

          <div class="items-coffee--card">
            <div class="items-coffee--image small-image">🤝</div>
            <p class="items-coffee--description">Community</p>
            <div>
              Building connections and supporting our local community is at the
              heart of what we do.
            </div>
          </div>

          <div class="items-coffee--card">
            <div class="items-coffee--image small-image">⭐</div>
            <p class="items-coffee--description">Excellence</p>
            <div>
              We never compromise on quality, from bean to cup, ensuring every
              experience is exceptional.
            </div>
          </div>
        </div>
      </section>

      <!-- Team Section -->
      <section class="specials-section" id="team">
        <div class="specials-content">
          <h2>Meet Our Team</h2>
          <p>
            Our passionate team of coffee experts, baristas, and customer
            service professionals work together to make every visit to Caffeine
            memorable.
          </p>

          <div class="specials-grid">
            <div class="special-item">
              <h3>Sarah Johnson</h3>
              <p class="special-price">Head Roaster</p>
              <p>
                With 12 years of experience, Sarah brings artistry and precision
                to every roast, ensuring our coffee maintains its distinctive
                character.
              </p>
            </div>

            <div class="special-item">
              <h3>Marco Rodriguez</h3>
              <p class="special-price">Lead Barista</p>
              <p>
                Marco's expertise in brewing techniques and latte art makes
                every cup a masterpiece. He's passionate about sharing coffee
                knowledge with customers.
              </p>
            </div>

            <div class="special-item">
              <h3>Emily Chen</h3>
              <p class="special-price">Cafe Manager</p>
              <p>
                Emily ensures our cafe runs smoothly while maintaining the warm,
                welcoming atmosphere that makes Caffeine feel like home.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Location & Hours Section -->
      <section class="menu-categories">
        <div class="menu-container">
          <div class="menu-grid">
            <div class="menu-item">
              <div class="menu-item-header">
                <h3>Visit Us</h3>
              </div>
              <div class="menu-item-description">
                <strong>Address:</strong><br />
                39 Brooklyn Street<br />
                Covington, VA 244426<br /><br />

                <strong>Phone:</strong><br />
                (321) 562 - 57420<br /><br />

                <strong>Email:</strong><br />
                Caffeine@Gmail.Com
              </div>
            </div>

            <div class="menu-item">
              <div class="menu-item-header">
                <h3>Hours</h3>
              </div>
              <div class="menu-item-description">
                <strong>Monday - Friday:</strong><br />
                6:00 AM - 8:00 PM<br /><br />

                <strong>Saturday:</strong><br />
                7:00 AM - 9:00 PM<br /><br />

                <strong>Sunday:</strong><br />
                8:00 AM - 6:00 PM
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Customer Testimonials -->
      <section class="customers">
        <h1 class="customers-heading">Why Customers Love Us</h1>
        <div class="customers-carousel">
          <button class="carousel-btn carousel-btn-prev">&lt;</button>
          <div class="customers-text-box">
            <p class="customers-text-box--description">
              Caffeine has become my second home. The staff knows my order by
              heart, and the atmosphere is perfect for both work and relaxation.
              The quality of their coffee is unmatched in the area.
            </p>
            <div class="customers-rate">
              <div class="star-rating">★★★★★</div>
              <p class="customers-rate--name">Jessica Williams</p>
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
