@extends('layout.main')

@section('container')
<h1 class="mb-5">POST CATEGORIES
</h1>
@foreach ($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}"><h2>{{ $category->name }}</h2></a>
    </li>
    

@endforeach
@endsection