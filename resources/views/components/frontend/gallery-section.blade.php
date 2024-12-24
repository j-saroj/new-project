  @props(['galleryimages'])

  <!-- Gallery Section -->
  @if ($galleryimages->count() > 0)
      <section class="gallery-preview-section py-5 bg-light">
          <div class="container">
              <h2 class="text-center mb-5">Featured Gallery</h2>
              <div class="gallery-masonry">
                  <!-- Gallery Item -->
                  @foreach ($galleryimages as $galleryimage)
                      <div class="gallery-item">
                          <img src="{{ asset('storage/' . $galleryimage->image) }}" alt="{{ $galleryimage->title }}" />

                      </div>
                  @endforeach

              </div>
              <div class="text-center mt-5">
                  <a href="{{ route('front.gallery') }}" class="btn btn-outline-dark px-4">View Full Gallery</a>
              </div>
          </div>
      </section>
  @endif
