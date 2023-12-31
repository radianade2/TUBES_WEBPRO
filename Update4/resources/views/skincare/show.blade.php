<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk Skincare</title>
</head>
<body>
    <div class="container">
        <h1>Detail Produk Skincare</h1>

        @if($skincare)
            <table class="table">
                <thead>
                    <tr>
                        <th>Moisturizer</th>
                        <th>Serum</th>
                        <th>Sunscreen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $skincare->moisturizer }}</td>
                        <td>{{ $skincare->serum }}</td>
                        <td>{{ $skincare->sunscreen }}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p>Produk tidak ditemukan.</p>
        @endif
    </div>
</body>
</html>
