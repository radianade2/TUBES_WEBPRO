<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <!-- #5c5555 -->
    <!-- #E4E4DE -->
    <style>
        .container.p-5.img {
            display: block;
            transition: transform 0.3s ease;
        }

        .col-12.text-center.border-bottom.p-5 {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            background-image: url('https://camerareadycosmetics.com/cdn/shop/articles/Kiehl_s-Blog.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .col-12.text-center.border-bottom.p-5::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .col-12.text-center.border-bottom.p-5.img {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .custom-range.form-range::-webkit-slider-runnable-track {
            background-color: #D9D9D9;
        }

        .custom-range.form-range::-webkit-slider-thumb {
            background-color: #B7B7A4;
            border: 1px solid #B7B7A4;
        }
    </style>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.typekit.net/tet2lgm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/try.css') }}">
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

            <!-- explain test -->
            <div class="col-12 text-center border-bottom mb-5 p-5">
                <div class="container p-5 img" style="color: white; font-family: 'source-serif-4-caption'; position: relative; z-index: 1;">
                    <div class="col">
                        <h3>BANADKJBAKHDBSF</h3>
                    </div>
                    <div class="col">
                        <p>ksdaodhqwu</p>
                    </div>
                </div>
            </div>

            <!-- questions -->
            <div class="col-9 mx-auto text-center border border-dark rounded mb-2 px-0">
                <form action="{{ route('proses-input') }}" method="POST">
                    @csrf
                    <!-- location -->
                    <div class="col-12">
                        <div class="col p-2" style="background-color: #5c5555; color: white; border-style: double; font-family: 'source-serif-4-caption';">
                            CHOOSE LOCATION
                        </div>
                        <div class="col text-center p-5" style="font-family: 'Lato';">
                            <input type="text" class="border rounded-2 text-center" placeholder="type your city" name="cityinput">
                        </div>
                    </div>

                    <!-- IDENTIFY PROFILE -->
                    <!-- GENDER -->
                    <div class="col-12">
                        <div class="col p-2" style="background-color: #5c5555; color: white; border-style: double; font-family: 'source-serif-4-caption';">
                            GENDER
                        </div>
                        <div class="col p-4">
                            <div class="row justify-content-center m-4" style="font-family: 'Lato';">
                                <div class="mx-2 col-2">
                                    <input type="radio" name="gender_input" value="MALE">MALE
                                </div>
                                <div class="mx-2 col-2">
                                    <input type="radio" name="gender_input" value="FEMALE">FEMALE
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- AGE -->
                    <div class="col-12">
                        <div class="col p-2" style="background-color: #5c5555; color: white; border-style: double; font-family: 'source-serif-4-caption';">
                            AGE
                        </div>
                        <div class="col p-4">
                            <div class="dropdown m-4" style="font-family: 'Lato';">
                                <a class="btn dropdown-toggle border" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    choose your age
                                </a>

                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" name="age_input" value="10">10-20</a></li>
                                <li><a class="dropdown-item" name="age_input" value="20">21-30</a></li>
                                <li><a class="dropdown-item" name="age_input" value="30">31-40</a></li>
                                <li><a class="dropdown-item" name="age_input" value="40">41-60</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- skin test -->
                    <!-- type -->
                    <div class="col-12">
                        <div class="col p-2" style="background-color: #5c5555; color: white; border-style: double; font-family: 'source-serif-4-caption';">
                            SKIN TYPE
                        </div>
                        <div class="col p-4">
                            <div class="row justify-content-center m-4" style="font-family: 'Lato';">
                                <div class="col-3">
                                    <input type="radio" name="skin_input" value="OILY">OILY
                                </div>
                                <div class="col-3">
                                    <input type="radio" name="skin_input" value="DRY">DRY
                                </div>
                                <div class="col-3">
                                    <input type="radio" name="skin_input" value="COMBINATION">COMBINATION
                                </div>
                                <div class="col-3">
                                    <input type="radio" name="skin_input" value="NORMAL">NORMAL
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sensitivity -->
                    <div class="col-12">
                        <div class="col p-2" style="background-color: #5c5555; color: white; border-style: double; font-family: 'source-serif-4-caption';">
                            SKIN SENSITIVITY
                        </div>
                        <div class="col p-4">
                            <div class="row-12">
                                <div class="row justify-content-center m-4">
                                    <div class="row justify-content-center" style="font-family: 'Lato';">
                                        <div class="col-2 mx-2">
                                            INACCURATE
                                        </div>
                                        <div class="col-4 mx-2">
                                            <input type="range" class="custom-range form-range" min="1" max="5" name="sens_input">
                                        </div>
                                        <div class="col-2 mx-2">
                                            ACCURATE
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- activity -->
                    <div class="col-12">
                        <div class="col p-2" style="background-color: #5c5555; color: white; border-style: double; font-family: 'source-serif-4-caption';">
                            ACTIVITY
                        </div>
                        <div class="col p-4">
                            <div class="row-12">
                                <div class="row justify-content-center m-4">
                                    <div class="row justify-content-center" style="font-family: 'Lato';">
                                        <div class="col-2 mx-2">
                                            INDOOR
                                        </div>
                                        <div class="col-4 mx-2">
                                            <input type="range" class="custom-range form-range" min="1" max="5" name="door_input">
                                        </div>
                                        <div class="col-2 mx-2">
                                            OUTDOOR
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PREGNANCY -->
                    <div class="col-12">
                        <div class="col p-2" style="background-color: #5c5555; color: white; border-style: double; font-family: 'source-serif-4-caption';">
                            PREGNANCY STATUS
                        </div>
                        <div class="row justify-content-center m-5" style="font-family: 'Lato';">
                            <div class="col-1">
                                <input type="radio" name="preg_input" value="PREGYES">YES
                            </div>
                            <div class="col-1">
                                <input type="radio" name="preg_input" value="PREGNO">NO
                            </div>
                        </div>
                    </div>
                    <!-- ALLERGIC -->
                    <div class="col-12">
                        <div class="col p-2" style="background-color: #5c5555; color: white; border-style: double; font-family: 'source-serif-4-caption';">
                            SUN ALLERGIC STATUS
                        </div>
                        <div class="row justify-content-center m-5" style="font-family: 'Lato';">
                            <div class="col-1">
                                <input type="radio" name="sun_input" value="PREGYES">YES
                            </div>
                            <div class="col-1">
                                <input type="radio" name="sun_input" value="PREGNO">NO
                            </div>
                        </div>
                    </div>

                    <!-- submit -->
                    <div class="col-9 mx-auto text-end px-0">
                        <a type="button" href="/halaman_hasil" class="btn btn-outline-dark mx-auto m-4 border-2 rounded-0" style="font-weight: 500; width: 150px; font-weight: 700;">SUBMIT</a>
                    </div>
                </form>
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
