@extends('inc.layout')
@section('main')
    <h1>{{ $product->title }}</h1>

@endsection
@section('css')
    <link rel="stylesheet" href="/themes/tinker/css/product.css">
@endsection
@section('js')
    <script src="/themes/tinker/js/product.js" charset="utf-8"></script>
@endsection
