<!DOCTYPE html>
<html>
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
                <img src="{{ asset('images/smlogo.png') }}" id="Logo" width="300" height="45">
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
            <div class="col-12 justify-content-center text-center border border-dark mb-5 p-5 px-0">
                <h3>WEATHER BY YOUR LOCATION</h3>
                <div class="row mt-5">
                    <div class="col-4">
                        <div class="col-6 mb-3">
                            <img src="https://cdn-icons-png.flaticon.com/128/2480/2480626.png" alt="weatherDescription">
                        </div>
                        Weather Description: {{ $weatherDescription }}
                        {{-- {{ Cookie::get('weatherDescription') }} --}}
                    </div>
                    <div class="col-4">
                        <div class="col-6 mb-3">
                            <img src="https://cdn-icons-png.flaticon.com/128/5826/5826371.png" alt="weatherDescription">
                        </div>
                        Temperature: {{ $temp }} °C
                        {{-- {{ Cookie::get('weatherTemp') }} °C --}}
                    </div>
                    <div class="col-4">
                        <div class="col-6 mb-3">
                            <img src="https://cdn-icons-png.flaticon.com/128/959/959711.png" alt="weatherDescription">
                        </div>
                        Wind Speed: {{ $weatherWindSpeed }} km/h
                        {{-- {{ Cookie::get('weatherWindSpeed') }} km/h --}}
                    </div>
                </div>
            </div>

            <!-- skincare result -->
            <div class="col-12 justify-content-center text-center border border-dark mb-5 p-5 px-0">
                <h2>YOUR SKINCARE RECOMMENDATION</h2>
                @if($skincare)
                <table class="table p-3 mt-5">
                    <thead>
                        <tr>
                            <th>Moisturizer</th>
                            <th>Serum</th>
                            <th>Sunscreen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="https://cdn-icons-png.flaticon.com/128/8347/8347683.png" alt="weatherDescription">
                                <label class="m-3">{{ $skincare->moisturizer }}</label>
                            </td>
                            <td>
                                <img src="https://cdn-icons-png.flaticon.com/128/4192/4192555.png" alt="weatherDescription">
                                <label class="m-3">{{ $skincare->serum }}</label>
                            </td>
                            <td>
                                <img src="https://cdn-icons-png.flaticon.com/128/3531/3531857.png" alt="weatherDescription">
                                <label class="m-3">{{ $skincare->sunscreen }}</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @else
                    <p>Produk tidak ditemukan.</p>
                @endif
            </div>

            <!-- forum -->
            <div class="col-12 justify-content-center text-center mb-5 p-5 px-0">
                <!-- Comment Section -->
                <div class="card">
                    <div class="card-header">
                        FORUM & COMMUNITY
                    </div>
                    <div class="card-body">
                        <!-- Single Comment -->
                        <div class="media mt-3">
                            <div class="col-12">
                                <div class="row">
                                    <img src="https://cdn-icons-png.flaticon.com/128/4440/4440953.png" class="col-1 mr-3" alt="Another User Avatar">
                                    <div class="col-6 border text-start">
                                        <h5 class="mt-0">Gilbert</h5>
                                        La Roche Posay Effaclar is worth to buy for very very dry skin!
                                        <button type="button" class="btn btn-link">reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Another Comment -->
                        <div class="media mt-3">
                            <div class="col-12">
                                <div class="row">
                                    <img src="https://cdn-icons-png.flaticon.com/128/949/949644.png" class="col-1 mr-3" alt="Another User Avatar">
                                    <div class="col-6 border text-start">
                                        <h5 class="mt-0">Nadine</h5>
                                        COSRX Advance Snail is so soo goooodddd
                                        <button type="button" class="btn btn-link">reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add a Comment Form -->
                        <form class="mt-4">
                            <div class="form-group">
                                <label for="userName">Your Name</label>
                                <input type="text" class="form-control" id="userName" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="commentText">Comment</label>
                                <textarea class="form-control" id="commentText" rows="3" placeholder="Enter your comment"></textarea>
                            </div>
                            <button type="submit" class="btn btn-secondary rounded-0 mt-3" style="font-weight: 500; width: 100px; font-weight: 700;">Submit</button>

                        </form>
                    </div>
                </div>
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


