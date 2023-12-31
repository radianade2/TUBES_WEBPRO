<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk Skincare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Daftar Produk Skincare</h1>

        <!-- Tambahkan tombol untuk menuju halaman rekomendasi -->
        <a href="/halaman_form" class="btn btn-primary">Rekomendasi Produk Skincare</a>

        <!-- Tampilkan daftar produk skincare -->
        <table class="table border border-black">
            <thead>
                <tr>
                    <th>Moisturizer</th>
                    <th>Serum</th>
                    <th>Sunscreen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($skincare as $skincare)
                    <tr>
                        <td>{{ $skincare->moisturizer }}</td>
                        <td>{{ $skincare->serum }}</td>
                        <td>{{ $skincare->sunscreen }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
