@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Dashboard</h1>
    <p>Halo, {{ Auth::user()->name }}!</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Lihat Produk</a>
</div>
@endsection
