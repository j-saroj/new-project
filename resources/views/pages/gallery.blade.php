@extends('layouts.main')

@section('content')
    <x-frontend.page-header title="Our Gallery"
        description="Explore our collection of timeless moments captured through our lens" />
    <section class="gallery-main-section">
        <div class="container">
            <!-- Filter Buttons -->
            {{-- <div class="filter-container">
                <button class="filter-btn active" data-filter="all">
                    <span>All Works</span>
                </button>
                <button class="filter-btn" data-filter="wedding">
                    <span>Wedding</span>
                </button>
                <button class="filter-btn" data-filter="portrait">
                    <span>Portrait</span>
                </button>
                <button class="filter-btn" data-filter="event">
                    <span>Events</span>
                </button>
                <button class="filter-btn" data-filter="fashion">
                    <span>Fashion</span>
                </button>
            </div> --}}

            <!-- Gallery Grid -->
            <div class="gallery-grid">
                @forelse ($gallery as $item)
                    <!-- Wedding Photos -->
                    <div class="gallery-item" data-category="wedding">
                        <a href="{{asset($item->image)}}" data-lightbox="gallery" data-title="Wedding Photography">
                            <img src="{{ asset($item->image) }}" alt="Wedding Photo" />
                            <div class="gallery-overlay">
                                <div class="gallery-info">
                                    <span class="gallery-category">{{ $item->category?->name }}</span>
                                    <h3>{{ $item->title }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>

                @empty
                    <div class="gallery-item" data-category="wedding">
                        <a href="images/gallery/wedding1.jpg" data-lightbox="gallery" data-title="Wedding Photography">
                            <img src="images/gallery/wedding1.jpg" alt="Wedding Photo" />
                            <div class="gallery-overlay">
                                <div class="gallery-info">
                                    <span class="gallery-category">Wedding</span>
                                    <h3>Beautiful Ceremony</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforelse
                <!-- Add more gallery items following the same pattern -->
            </div>
        </div>
    </section>
@endsection
