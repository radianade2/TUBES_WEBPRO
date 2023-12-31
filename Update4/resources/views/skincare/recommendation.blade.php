<!DOCTYPE html>
<html>
<head>
    <title>Rekomendasi Produk Skincare</title>
</head>
<body>
    <div class="container">
        <h1>Rekomendasi Produk Skincare</h1>

        <form action="{{ route('skincare.recommendation') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="skintype">Skin Type</label>
                <select name="skintype" class="form-control">
                    <option value="dry">Dry</option>
                    <option value="oily">Oily</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
