@extends('layouts.main')

@section('content')
    <x-frontend.page-header title="Our Gallery"
        description="Explore our collection of timeless moments captured through our lens" />
    <section class="gallery-main-section">
        <div class="container">
            <!-- Filter Buttons -->
            <div class="filter-container">
                <button class="filter-btn active" data-filter="all" style="font-size: 13px;">
                    <span>All Works</span>
                </button>
                @foreach ($portfolios as $portfolio)
                    <button class="filter-btn" data-filter="{{ $portfolio->id }}" style="font-size: 13px;">
                        <span>{{ $portfolio->title }}</span>
                    </button>
                @endforeach
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid">
                @forelse ($gallery as $item)
                    <!-- Wedding Photos -->
                    <div class="gallery-item" data-category="{{ $item->portfolio->id }}">
                        <a href="'{{ asset('storage/' . $item->image) }}" data-lightbox="gallery"
                            data-title="Wedding Photography">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Wedding Photo" />

                        </a>
                    </div>

                @empty
                    <h1 class="text-center">No Images found</h1>
                @endforelse
                <!-- Add more gallery items following the same pattern -->
            </div>
        </div>
    </section>
@endsection
