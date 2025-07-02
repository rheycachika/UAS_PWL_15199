<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        body { font-family: sans-serif; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h2>Invoice Pembelian</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($cart as $item): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $item['name'] ?></td>
                <td>Rp<?= number_format($item['price'], 0, ',', '.') ?></td>
                <td><?= $item['qty'] ?></td>
                <td>Rp<?= number_format($item['price'] * $item['qty'], 0, ',', '.') ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <h3>Total: Rp<?= number_format($total, 0, ',', '.') ?></h3>
</body>
</html>
