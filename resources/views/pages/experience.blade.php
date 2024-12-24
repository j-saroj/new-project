@extends('layouts.main')

@section('content')
    <x-frontend.page-header title="Our Experience" description="Explore our journey and expertise in photography" />
    <!-- Expertise Section -->
    <section class="expertise-section py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Our Expertise</h2>
            <div class="row g-4">

                @forelse ($experience as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="expertise-card">
                            <div class="expertise-icon">
                                <i class="bi bi-heart"></i>
                            </div>
                            <h3>{{ $item->title }}</h3>
                            <div class="expertise-progress">
                                <div class="progress-ring">
                                    <div class="progress-circle" data-value="{{ $item->percentage }}">
                                        <span>{{ $item->percentage }}%</span>
                                    </div>
                                </div>
                            </div>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                @empty

                    <div class="col-lg-3 col-md-6">
                        <div class="expertise-card">
                            <div class="expertise-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            <h3>Portrait</h3>
                            <div class="expertise-progress">
                                <div class="progress-ring">
                                    <div class="progress-circle" data-value="90">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                            <p>Professional headshots and artistic portraits</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="expertise-card">
                            <div class="expertise-icon">
                                <i class="bi bi-building"></i>
                            </div>
                            <h3>Corporate</h3>
                            <div class="expertise-progress">
                                <div class="progress-ring">
                                    <div class="progress-circle" data-value="85">
                                        <span>85%</span>
                                    </div>
                                </div>
                            </div>
                            <p>Professional events and business photography</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="expertise-card">
                            <div class="expertise-icon">
                                <i class="bi bi-camera"></i>
                            </div>
                            <h3>Fashion</h3>
                            <div class="expertise-progress">
                                <div class="progress-ring">
                                    <div class="progress-circle" data-value="88">
                                        <span>88%</span>
                                    </div>
                                </div>
                            </div>
                            <p>Fashion and model photography services</p>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </section>
@endsection
