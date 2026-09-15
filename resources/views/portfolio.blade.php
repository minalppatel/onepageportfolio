@extends('layouts.app')

@section('title', $profile['name'] . ' | ' . $profile['role'])
@section('meta_description', $profile['bio'])

@section('content')
    <!-- Hero Section -->
    @include('partials.hero')

    <!-- About Section -->
    @include('partials.about')

    <!-- Services Section -->
    @include('partials.services')

    <!-- Skills Section -->
    @include('partials.skills')

    <!-- Experience & Education Timeline -->
    @include('partials.experience')

    <!-- Projects Portfolio -->
    @include('partials.projects')

    <!-- Contact Section -->
    @include('partials.contact')
@endsection
