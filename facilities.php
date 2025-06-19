<?php $currentPage = 'facilities';
include 'partials/header.php'; ?>

    <main>
      <!-- Hero Section -->
      <section class="facilities-hero">
        <div class="hero-content">
          <h1>Your Perfect Space</h1>
          <p>
            Every corner of Caffeine is designed with intention — from the
            gentle morning light streaming through our windows to the
            comfortable evening ambiance that invites you to stay a while
            longer.
          </p>
        </div>
      </section>

      <!-- Main Facilities Grid -->
      <section class="facilities-grid">
        <div class="facility-card">
          <div class="facility-icon">☕</div>
          <h3>Artisan Coffee Bar</h3>
          <p>
            Watch our skilled baristas craft your perfect cup using premium
            beans and traditional brewing methods that bring out the unique
            character of each blend.
          </p>
        </div>

        <div class="facility-card">
          <div class="facility-icon">📖</div>
          <h3>Quiet Study Areas</h3>
          <p>
            Designated peaceful zones with comfortable seating, perfect
            lighting, and minimal distractions for focused work and study
            sessions.
          </p>
        </div>

        <div class="facility-card">
          <div class="facility-icon">🌐</div>
          <h3>High-Speed Internet</h3>
          <p>
            Reliable, fast Wi-Fi throughout the space ensures you stay connected
            whether you're working, studying, or sharing moments with friends
            online.
          </p>
        </div>

        <div class="facility-card">
          <div class="facility-icon">🎼</div>
          <h3>Ambient Atmosphere</h3>
          <p>
            Carefully curated playlists and acoustic design create the perfect
            soundscape that enhances your experience without overwhelming
            conversation.
          </p>
        </div>

        <div class="facility-card">
          <div class="facility-icon">🪴</div>
          <h3>Green Sanctuary</h3>
          <p>
            Living plants throughout our space purify the air and create a
            natural, calming environment that connects you with nature indoors.
          </p>
        </div>

        <div class="facility-card">
          <div class="facility-icon">🤝</div>
          <h3>Community Hub</h3>
          <p>
            A welcoming space where strangers become friends over shared tables,
            book clubs, and community events that bring people together.
          </p>
        </div>
      </section>

      <!-- Feature Banner -->
      <section class="feature-banner">
        <div class="feature-banner-content">
          <h2>More Than Just Coffee</h2>
          <p>
            We believe in creating spaces that inspire creativity, foster
            connections, and provide the perfect backdrop for life's important
            moments — whether it's a first date, a study session, or a casual
            catch-up with old friends.
          </p>
        </div>
      </section>

      <!-- Services Section -->
      <section class="services-section">
        <div class="container">
          <h2>Additional Services</h2>
          <div class="services-grid">
            <div class="service-item">
              <h4>🔌 Power Everywhere</h4>
              <p>
                Every seat has access to power outlets and USB charging ports
                for your devices.
              </p>
            </div>
            <div class="service-item">
              <h4>🚲 Bike Friendly</h4>
              <p>
                Secure bike racks and a bike-friendly location make cycling here
                easy and safe.
              </p>
            </div>
            <div class="service-item">
              <h4>📱 Mobile Ordering</h4>
              <p>
                Skip the line with our mobile app for quick ordering and pickup.
              </p>
            </div>
            <div class="service-item">
              <h4>🎯 Event Hosting</h4>
              <p>
                Book our space for study groups, small meetings, or social
                gatherings.
              </p>
            </div>
            <div class="service-item">
              <h4>🏠 Extended Hours</h4>
              <p>
                Open early for morning coffee and late for evening study
                sessions.
              </p>
            </div>
            <div class="service-item">
              <h4>♿ Accessibility</h4>
              <p>
                Fully accessible with ramps, wide doorways, and accessible
                restrooms.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Highlighted Features -->
      <section class="facilities-highlight container">
        <h2>What Sets Us Apart</h2>
        <ul class="highlight-list">
          <li>
            🌱 Zero-waste initiatives with compostable cups and local sourcing
            partnerships
          </li>
          <li>
            🎨 Local art gallery featuring rotating exhibitions from community
            artists
          </li>
          <li>
            📚 Free book exchange and quiet reading corners for literary
            enthusiasts
          </li>
          <li>
            🎵 Weekly open mic nights and acoustic sessions showcasing local
            talent
          </li>
        </ul>
      </section>

      <!-- Newsletter Section -->
      <?php include 'partials/newsletter.php'; ?>

    <!-- Footer -->
   <?php include 'partials/footer.php'; ?>

    <script>
      //Mobile Menu Toggle
      document.addEventListener("DOMContentLoaded", function () {
        const mobileNavToggle = document.querySelector(".mobile-nav-toggle");
        const mainNav = document.querySelector(".main-nav");

        if (mobileNavToggle && mainNav) {
          mobileNavToggle.addEventListener("click", function () {
            mainNav.classList.toggle("active");
          });
        }
      });
    </script>
  </body>
</html>
