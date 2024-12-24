  @props(['galleryimages'])

  <!-- Gallery Section -->
  <section class="gallery-preview-section py-5 bg-light">
      <div class="container">
          <h2 class="text-center mb-5">Featured Gallery</h2>
          <div class="gallery-masonry">
                <!-- Gallery Item -->
                @foreach ($galleryimages as $galleryimage)
              <div class="gallery-item">
                  <img src="{{ asset('storage/' . $galleryimage->image) }}" alt="{{ $galleryimage->title }}" />
                  <div class="gallery-overlay">
                      <div class="gallery-content">
                          <span class="gallery-category">{{ $galleryimage->portfolio->name }}</span>
                          <h3>{{ $galleryimage->title }}</h3>
                      </div>
                  </div>
              </div>
                @endforeach

          </div>
          <div class="text-center mt-5">
              <a href="gallery.html" class="btn btn-primary btn-dark btn-lg">View Full Gallery</a>
          </div>
      </div>
  </section>
