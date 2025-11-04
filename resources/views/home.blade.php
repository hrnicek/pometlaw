@extends('layouts.app')

@section('content')
    <x-hero-section :upcomingEvents="$upcomingEvents" />

    <!-- Courses Section -->
    <x-courses-section :events="$upcomingEvents" />

    <x-blog-section />

    <x-about-section />

    <x-services-section />

    <x-cta-section />

    <x-next-event-highlight :nearestEvent="$nearestEvent" />
@endsection