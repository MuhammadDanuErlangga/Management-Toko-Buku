<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Riwayat Penjualan</title>
</head>
<body>
    <h2>Riwayat Penjualan</h2>
    <table>
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->book ? $sale->book->title : 'Tidak ada buku' }}</td>
                <td>{{ $sale->quantity }}</td>
                <td>{{ $sale->total_price }}</td>
                <td>{{ $sale->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
