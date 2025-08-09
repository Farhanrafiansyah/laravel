@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Produk</h1>

    <form method="POST" action="{{ route('admin.products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stock" value="{{ $product->stock }}" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
