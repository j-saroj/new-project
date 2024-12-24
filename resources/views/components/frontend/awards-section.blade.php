 @props(['awards'])
 <!-- Awards Section -->
 @if ($awards->count() > 0)
     <section class="awards-section">
         <div class="container">
             <h2 class="section-title">Awards & Recognition</h2>

             <div class="awards-timeline">

                 @php
                     $icons = ['fa-trophy', 'fa-award', 'fa-crown'];
                     $i = 0;
                 @endphp
                 @foreach ($awards as $award)
                     <div class="award-item">
                         <div class="award-icon">
                             <i class="fas {{ $icons[$i] }}"></i>
                             <span class="award-year">{{ \Carbon\Carbon::parse($award->date)->format('Y') }}</span>
                         </div>
                         <div class="award-content">
                             <h3>{{ $award->title }}</h3>
                             <p>
                                 {!! $award->description !!}
                             </p>
                             <div class="award-details">
                                 {{-- <span class="award-badge">
                                 <i class="fas fa-camera"></i> Wedding Photography
                             </span> --}}
                                 <span class="award-badge">
                                     <i class="fas fa-star"></i>
                                     {{ \Carbon\Carbon::parse($award->date)->format('F d, Y') }}
                                 </span>
                             </div>
                         </div>
                     </div>
                     @php
                         $i++;
                         if ($i > 2) {
                             $i = 0;
                         }
                     @endphp
                 @endforeach
             </div>
         </div>
     </section>
 @endif
