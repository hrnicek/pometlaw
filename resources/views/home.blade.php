@extends('layouts.app')

@section('content')
  <x-hero-section :nearestEvent="$nearestEvent" />

  <x-stats-section />

  <x-courses-section :events="$upcomingEvents" />

  <x-solutions-section />

  <x-services-section />

  <x-testimonials-section />

  <x-cta-section />

  <x-blog-section :articles="$latestArticles" />

  <x-about-section />

  <x-faq-section />

@endsection
