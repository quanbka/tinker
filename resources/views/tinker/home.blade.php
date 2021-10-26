@extends('inc.layout')
@section('main')
    @include('common.home.banner')
    @include('common.home.sliders')
    @include('common.home.news')
    @include('common.recommendation')
@endsection
@section('js')
    <link rel="stylesheet" href="/themes/tinker/assets/css/home.css">
@endsection
