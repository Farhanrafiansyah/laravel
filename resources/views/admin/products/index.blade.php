@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kelola Produk</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>Rp{{ number_format($p->price, 0, ',', '.') }}</td>
                    <td>{{ $p->stock }}</td>
                    <td><a href="{{ route('admin.products.edit', $p->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
