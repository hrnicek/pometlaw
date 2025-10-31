@extends('layouts.app')

@section('content')
  <x-hero :nearestEvent="$nearestEvent" />
  <x-courses-section :upcomingEvents="$upcomingEvents" />
  <x-about-section />
  <x-testimonials-section />
  <x-cta-section />
@endsection
