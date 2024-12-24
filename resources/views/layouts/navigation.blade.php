 <nav class="navbar navbar-expand-lg fixed-top">
     <div class="container">
         <a class="navbar-brand" href="{{ route('front.home') }}">
            @isset($organization->name)

            <span class="brand-first">{{ $organization->name }}</span>
            @else
            <span class="brand-first">TIMELESS</span>
            <span class="brand-second">MEMORIES</span>

            @endisset

         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto">
                 <li class="nav-item">
                     <a class="nav-link active" href="{{ route('front.home') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('front.gallery') }}">Gallery</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('front.experience') }}">Experience</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('front.contact') }}">Contact</a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('front.contact') }}" class="nav-link book-now-btn">Book Now</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
