@extends('inc.layout')
@section('main')
    <h1>{{ $category->title }}</h1>
    <ul>
        @foreach ($products as $key => $product)
            <li>{{ $product->title }}</li>
        @endforeach

    </ul>
    
    {{ $products->render() }}
@endsection
@section('css')
    <link rel="stylesheet" href="/themes/tinker/css/category.css">
@endsection
@section('js')
    <script src="/themes/tinker/js/category.js" charset="utf-8"></script>
@endsection
