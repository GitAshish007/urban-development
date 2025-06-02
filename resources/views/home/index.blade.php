@extends('layouts.app-a')

@section('title', 'Home')

@section('content')

    <!-- Image Slider -->
    <x-slider/>
    <!-- Update Section -->
    <x-dailyupdate/>
    <!-- Missions Section -->
    <x-missions-section/>
    {{--State Mission--}}
    <x-state-missions/>
    {{--Booklets--}}
    <x-booklet/>


@endsection
