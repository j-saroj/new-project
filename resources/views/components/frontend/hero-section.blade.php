@props([ 'organization'])
<!-- Hero Section -->
    <header class="hero-section">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center text-white">
            <h1 class="display-4">{{ $organization->motto }}</h1>
            <p class="lead">
             {{$organization->title}}
            </p>
            <a href="{{ route('front.contact') }}" class="btn btn-primary btn-lg">Book Now</a>
          </div>
        </div>
      </div>
    </header>
