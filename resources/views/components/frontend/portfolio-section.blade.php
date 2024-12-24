 @props(['portfolios'])
 <!-- Portfolio Section -->
 @if($portfolios->count() > 0)
 <section class="portfolio-section py-5">
     <div class="container">
         <h2 class="section-title text-center">Our Portfolio</h2>
         <div class="row g-4">
             <!-- Portfolio Items -->
             @foreach ($portfolios as $portfolio)
                 <div class="col-md-4">
                     <div class="portfolio-item">
                         <div class="portfolio-image">
                             <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Wedding Photography" />
                         </div>
                         <div class="portfolio-overlay">
                             <div class="overlay-content">
                                 <span class="category">{{ $portfolio->category->name }}</span>
                                 <h3>{{ $portfolio->title }}</h3>
                                 <p>{!! $portfolio->description !!}</p>
                                 <a href="{{ route('front.gallery') }}" class="portfolio-link">
                                     <span>View Gallery</span>
                                     <i class="bi bi-arrow-right"></i>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach

         </div>
         </div>
     </section>
 @endif
