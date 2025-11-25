@extends('layouts.app')

@section('content')
  <x-hero-section :nearestEvent="$nearestEvent" />

  <!-- Stats Section -->
  <x-stats-section />

  <!-- Courses Section -->
  <x-courses-section :events="$upcomingEvents" />

  <!-- Solutions Section -->
  <x-solutions-section />

  <!-- FAQ Section -->
  <x-faq-section />

  <!-- Testimonials Section -->
  <x-testimonials-section />

  <!-- CTA Section -->
  <x-cta-section />


  <x-blog-section />

  <x-about-section />

  <x-services-section />
@endsection
