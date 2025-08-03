<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        // Ambil data keranjang dari session
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->back()->with('success', 'Keranjang kosong.');
        }

        // Simpan data order ke database (jika sudah punya tabel orders/order_items)

        // Kosongkan keranjang setelah checkout
        session()->forget('cart');

        return redirect()->route('products.index')->with('success', 'Checkout berhasil. Terima kasih!');
    }
}
