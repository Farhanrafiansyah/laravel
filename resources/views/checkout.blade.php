<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Checkout</h2>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @php $grandTotal = 0; @endphp
                @foreach($cart as $item)
                    @php $total = $item['price'] * $item['quantity']; $grandTotal += $total; @endphp
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>Rp{{ number_format($total, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h4>Total Belanja: Rp{{ number_format($grandTotal, 0, ',', '.') }}</h4>

        <form method="POST" action="{{ route('checkout') }}">
            @csrf
            <button type="submit" class="btn btn-primary mt-3">Bayar Sekarang</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Kembali ke Produk</a>
        </form>
    @else
        <p>Keranjang kamu kosong.</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Belanja Sekarang</a>
    @endif
</div>
</body>
</html>
