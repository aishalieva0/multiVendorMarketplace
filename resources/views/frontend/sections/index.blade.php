@extends('layouts.frontend.master')

@section('content')

    @include('frontend.includes.slider')
    @include('frontend.includes.banner')
    @include('frontend.includes.quick_view')
    @include('frontend.includes.product')
    @include('frontend.includes.vendor')
    @include('frontend.includes.offers')
    @include('frontend.includes.brands')
    @include('frontend.includes.special')

@endsection
