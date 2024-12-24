<!-- Footer -->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">

                @isset($organization->name)

                    <h5 class="mb-4">{{ $organization->name }}</h5>
                @else
                    <h5 class="mb-4">TIMELESS MEMORIES</h5>
                @endisset

                <p class="mb-4">
                    @isset($organization->sublitle)
                        {{ $organization->sublitle }}

                    @endisset
                </p>
                <div class="social-links">
                    @isset($organization->facebook)
                        <a href="{{ $organization->facebook }}" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>

                    @endisset
                    @isset($organization->instagram)
                        <a href="{{ $organization->instagram }}" class="text-white me-3"><i
                                class="fab fa-instagram"></i></a>
                    @endisset
                    @isset($organization->twitter)
                        <a href="{{ $organization->twitter }}" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    @endisset
                    @isset($organization->linkedin)
                        <a href="{{ $organization->linkedin }}" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    @endisset


                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="mb-4">Quick Links</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="{{ route('front.home') }}">Home</a></li>
                    <li><a href="{{ route('front.gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('front.experience') }}">Experience</a></li>
                    <li><a href="{{ route('front.contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4">Our Services</h5>
                <ul class="footer-links list-unstyled">
                    <li><a href="#">Wedding Photography</a></li>
                    <li><a href="#">Portrait Sessions</a></li>
                    <li><a href="#">Corporate Events</a></li>
                    <li><a href="#">Fashion Photography</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="mb-4">Contact Info</h5>
                <ul class="footer-contact list-unstyled">
                    <li class="mb-3">
                        @isset($organization->address)
                        <i class="fas fa-map-marker-alt me-2"></i>
                            {{ $organization->address }}
                        @endisset
                        </li>
                        <li class="mb-3">
                            @isset($organization->phone)
                            <i class="fas fa-phone me-2"></i>

                                {{ $organization->phone }}
                            @endisset
                        </li>
                        <li class="mb-3">
                            @isset($organization->email)
                        <i class="fas fa-envelope me-2"></i>
                                {{ $organization->email }}

                            @endisset
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <hr class="footer-divider" />
                    <p class="text-center mb-0">
                        © 2024 Timeless Memories. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
