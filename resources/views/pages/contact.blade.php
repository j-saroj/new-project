@extends('layouts.main')

@section('content')
    <x-frontend.page-header title="Contact Us" description="Get in touch with us for any inquiries or bookings" />
    <!-- Contact Section -->
    <section class="contact-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h2>Get in Touch</h2>
                    <p class="lead">We'd love to hear from you. Send us a message!</p>
                    <form id="contactForm" action="{{ route('inquiry.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-dark  px-4">
                            Send Message
                        </button>
                    </form>
                </div>
                <div class="col-md-6 mb-4">
                    <h2>Contact Information</h2>
                    <div class="contact-info mt-4">
                        <p>
                            <i class="bi bi-geo-alt-fill"></i> {{$organization->address}}
                            
                        </p>
                        <p><i class="bi bi-telephone-fill"></i>{{$organization->phone}}</p>
                        <p>
                            <i class="bi bi-envelope-fill"></i> {{ $organization->email }}
                        </p>
                    </div>
                    <div class="map-container mt-4">
                        <!-- Add Google Maps iframe here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
