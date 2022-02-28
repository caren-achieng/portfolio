@extends('layouts.master')
@section('title', 'Home')
@section('content')

    <div id="content">
        @include('includes.sections.home')
        @include('includes.sections.about')
        @include('includes.sections.services')
        @include('includes.sections.resume')
        @include('includes.sections.portfolio')
        @include('includes.sections.testimonials')
        @include('includes.sections.contact')
    </div>

@endsection
