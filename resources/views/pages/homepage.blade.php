@extends('layouts.main')

@section('content')
    <x-frontend.hero-section :organization="$organization" />
    <x-frontend.portfolio-section :portfolios="$portfolios" />
    <x-frontend.expertise-section :journeys="$journeys" :skills="$skills" />
    <x-frontend.gallery-section :galleryimages="$galleryimages" />
    <x-frontend.awards-section :awards="$awards" />
@endsection
