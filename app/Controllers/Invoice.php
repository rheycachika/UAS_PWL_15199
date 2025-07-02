<?php

namespace App\Controllers;

use Dompdf\Dompdf;

class Invoice extends BaseController
{
    public function index()
    {
        // Ambil data dari session keranjang
        //$cart = session()->get('cart'); // asumsi kamu pakai session
        /*$cart = [
            ['nama' => 'Produk A', 'harga' => 10000, 'qty' => 2],
            ['nama' => 'Produk B', 'harga' => 20000, 'qty' => 1]
        ];*/

        $cart = \Config\Services::cart()->contents();


        // Hitung total harga
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['qty'];
        }

        // Load view invoice sebagai HTML
        $html = view('invoice_view', [
            'cart' => $cart,
            'total' => $total
        ]);

        // Buat PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Tampilkan PDF ke browser
        $dompdf->stream('invoice.pdf', ['Attachment' => false]);
    }
}
