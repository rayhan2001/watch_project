@extends('layouts.home_layout')
@section('content')
    <!-- hero section -->
    @include('elements.home_page.hero_section')
    <!-- slider section -->
    @include('elements.home_page.slider')
  
    <!-- shop section -->
  
    @include('elements.home_page.shop')
  
    <!-- end shop section -->
  
    <!-- about section -->
  
    @include('elements.home_page.about')
  
    <!-- end about section -->
  
    <!-- feature section -->
  
    @include('elements.home_page.feature')
  
    <!-- end feature section -->
  
    <!-- contact section -->
  
    @include('elements.home_page.contact')
  
    <!-- end contact section -->
  
    <!-- client section -->
    @include('elements.home_page.client')
    <!-- end client section -->
@endsection