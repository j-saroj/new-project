  @props(['gallery' => []])

  <!-- Gallery Section -->
    <section class="gallery-preview-section py-5 bg-light">
      <div class="container">
        <h2 class="text-center mb-5">Featured Gallery</h2>
        <div class="gallery-masonry">
          <div class="gallery-item">
            <img src="images/portfolio1.jpg" alt="Wedding Photography" />
            <div class="gallery-overlay">
              <div class="gallery-content">
                <span class="gallery-category">Wedding</span>
                <h3>Beautiful Ceremony</h3>
              </div>
            </div>
          </div>
          <div class="gallery-item">
            <img src="images/portfolio2.jpg" alt="Portrait Photography" />
            <div class="gallery-overlay">
              <div class="gallery-content">
                <span class="gallery-category">Portrait</span>
                <h3>Professional Portraits</h3>
              </div>
            </div>
          </div>
          <div class="gallery-item">
            <img src="images/portfolio3.jpg" alt="Event Photography" />
            <div class="gallery-overlay">
              <div class="gallery-content">
                <span class="gallery-category">Events</span>
                <h3>Corporate Events</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <a href="gallery.html" class="btn btn-primary btn-dark btn-lg"
            >View Full Gallery</a
          >
        </div>
      </div>
    </section>
