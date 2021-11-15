@extends('admin::layouts.main')

@section('content')
        <h2> Halaman About </h2>
        <h4>{{ $name }}</h4>
        <p>{{ $email }}</p>
        <img src="{{ $image }}" alt="{{ $name }}" class="rounded-circle" width="200">
@endsection