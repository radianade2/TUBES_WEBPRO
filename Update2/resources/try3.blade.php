<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.typekit.net/tet2lgm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="try.css" rel="stylesheet">
    <title>SKINMATE: TUBES WEBPRO</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- header navbar -->
            <div class="col-12 text-center mb-5 p-2" style="border-bottom-style: double; border-width: 5px;">
                <img src="C:\Users\Radiana\Documents\Code_Project\HTML_code\WEBPRO KELAS\smlogo.png" id="Logo" width="300" height="45">
                <p style="font-family: 'Lora'; font-size: 12px;">WEATHER SKINCARE RECOMMENDATION</p>
                <div class="row">
                    <div class="col-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> WEATHER </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">WEATHER 1</a></li>
                            <li><a class="dropdown-item" href="#">WEATHER 2</a></li>
                            <li><a class="dropdown-item" href="#">WEATHER 3</a></li>
                        </ul>
                    </div>
                    <div class="col-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> SKINCARE </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">SKINCARE 1</a></li>
                            <li><a class="dropdown-item" href="#">SKINCARE 2</a></li>
                            <li><a class="dropdown-item" href="#">SKINCARE 3</a></li>
                    </ul>
                    </div>
                </div>
            </div>

            <!-- weather result -->
            <div class="col-12 text-center mb-5 p-5 border">
                WEATHER BY YOUR LOCATION

            </div>

            <!-- skincare result -->
            <div class="col-12 text-center mb-5 p-5 border">
                <h2>YOUR SKINCARE RECOMMENDATION</h2>
                @if($kesimpulan['moist'])
                    <p>Moisturizer: {{ $kesimpulan['moist'] }}</p>
                @endif
                @if($kesimpulan['serum'])
                    <p>Serum: {{ $kesimpulan['serum'] }}</p>
                @endif
                @if($kesimpulan['ss'])
                    <p>Sunscreen: {{ $kesimpulan['ss'] }}</p>
                @endif
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="col-12 pt-5 px-5 py-3 mt-5" style="background-color: black; color: white;">
        <div class="container-flex px-0">
            <h1 style="font-family: 'Lora'">SKIN MATE</h1>
            <p style="font-family: 'IBM Plex Serif';">[pake bahsa inggris yaw]Ini adalah website rekomendasi perawatan kulit berdasarkan prediksi cuaca, selain itu rekomendasi berdasarkan parameter kondisi saat ini.</p>
            <br>
            <div class="row">
                <div class="col-6" style="font-family: 'IBM Plex Serif'; font-size: 12px;">
                    @ 2023 SKIN MATE: WEATHER BEAUTY RECOMMENDATION
                </div>
                <div class="col-1" style="font-family: 'IBM Plex Serif'; font-size: 12px;">
                    Terms
                </div>
                <div class="col-1" style="font-family: 'IBM Plex Serif'; font-size: 12px;">
                    Privacy Policy
                </div>
            </div>
        </div>
    </div>
</body>
</html>
