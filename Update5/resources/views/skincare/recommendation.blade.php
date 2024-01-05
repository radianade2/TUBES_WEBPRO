<!DOCTYPE html>
<html>
<head>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.typekit.net/tet2lgm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
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
                        <h3>TEST GUIDELINES</h3>
                    </div>
                    <div class="col">
                        <p>Tes dilakukan dengan jujur sesuai kondisi anda sekarang</p>
                        <p>Pakai mikir dulu~</p>
                    </div>
                </div>
            </div>

            <div class="col-10 mx-auto text-center mb-1 mt-4 px-0">
                <form action="{{ route('skincare.recommendation') }}" method="POST">
                    @csrf
                    <div class="row justify-content-center mb-2 px-0">
                        <div class="col-5 mx-3  justify-content-center border border-dark rounded mb-5 px-0">
                            <div class="form-group">
                                <div class="col p-2" style="background-color: black; color: white; font-family: 'source-serif-3-caption';">
                                    <label for="location">LOCATION</label>
                                </div>
                                <div class="col p-4">
                                    <input type="text" name="location" id="location" class="form-control" placeholder="Enter Your location">
                                </div>
                            </div>
                        </div>

                        <div class="col-5 mx-3  justify-content-center border border-dark rounded mb-5 px-0">
                            <div class="form-group">
                                <div class="col p-2" style="background-color: black; color: white; font-family: 'source-serif-3-caption';">
                                    <label for="gender">GENDER</label>
                                </div>
                                <div class="col p-4">
                                    <div class="btn-group btn-group-toggle d-flex justify-content-center" data-toggle="buttons">
                                        <label class="btn btn-outline-dark mr-3">
                                            <img src="https://cdn-icons-png.flaticon.com/128/3741/3741578.png" alt="Male">
                                            <input type="radio" name="gender" id="male" value="male" autocomplete="off"> male
                                        </label>
                                        <label class="btn btn-outline-dark">
                                            <img src="https://cdn-icons-png.flaticon.com/128/3741/3741715.png" alt="Female">
                                            <input type="radio" name="gender" id="female" value="female" autocomplete="off"> female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 justify-content-center border border-dark rounded mb-5 px-0">
                        <div class="form-group">
                            <div class="col p-2" style="background-color: black; color: white; font-family: 'source-serif-3-caption';">
                                <label for="skintype">SKIN TYPE</label>
                            </div>
                            <div class="col p-4">
                                <div class="btn-group btn-group-toggle d-flex justify-content-center" data-toggle="buttons">
                                    <label class="btn btn-outline-dark mr-3">
                                        <img src="https://cdn-icons-png.flaticon.com/128/11015/11015018.png">
                                        <input type="radio" name="skintype" id="dry" value="dry" autocomplete="off"> Dry
                                    </label>
                                    <label class="btn btn-outline-dark mr-3">
                                        <img src="https://cdn-icons-png.flaticon.com/128/4148/4148547.png">
                                        <input type="radio" name="skintype" id="oily" value="oily" autocomplete="off"> Oily
                                    </label>
                                    <label class="btn btn-outline-dark mr-3">
                                        <img src="https://cdn-icons-png.flaticon.com/128/8985/8985503.png">
                                        <input type="radio" name="skintype" id="Combination" value="Combination" autocomplete="off"> Combination
                                    </label>
                                    <label class="btn btn-outline-dark mr-3">
                                        <img src="https://cdn-icons-png.flaticon.com/128/8985/8985503.png">
                                        <input type="radio" name="skintype" id="Normal" value="Normal" autocomplete="off"> Normal
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 justify-content-center border border-dark rounded mb-5 px-0">
                        <div class="form-group">
                            <div class="col p-2" style="background-color: black; color: white; font-family: 'source-serif-3-caption';">
                                <label for="act">ACTIVITY</label>
                            </div>
                            <div class="col p-4">
                                <div class="row justify-content-center m-4" style="font-family: 'Lato';">
                                    Indoor
                                    <input type="range" name="act" id="act" min="1" max="5" step="1" class="form-control-range mt-3" style="width: 50%;">
                                    Outdoor
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 justify-content-center border border-dark rounded mb-5 px-0">
                        <div class="form-group">
                            <div class="col p-2" style="background-color: black; color: white; font-family: 'source-serif-3-caption';">
                                <label for="sens">SENSITIVITY</label>
                            </div>
                            <div class="col p-4">
                                <div class="row justify-content-center m-4" style="font-family: 'Lato';">
                                    Inaccurte
                                    <input type="range" name="sens" id="sens" min="1" max="5" step="1" class="form-control-range mt-3" style="width: 50%;">
                                    Accurate
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-5 px-0">
                        <div class="col-5 mx-3 justify-content-center border border-dark rounded mb-5 px-0">
                            <div class="form-group">
                                <div class="col p-2" style="background-color: black; color: white; font-family: 'source-serif-3-caption';">
                                    <label for="preg">PREGNANCY</label>
                                </div>
                                <div class="col p-4">
                                    <img src="https://cdn-icons-png.flaticon.com/128/2372/2372387.png">
                                    <div class="btn-group btn-group-toggle d-flex justify-content-center mt-3" data-toggle="buttons">
                                        <label class="btn btn-outline-dark mx-2">
                                            <input type="radio" name="preg" id="Yes" value="Yes" autocomplete="off"> Yes
                                        </label>
                                        <label class="btn btn-outline-dark mx-2">
                                            <input type="radio" name="preg" id="No" value="No" autocomplete="off"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-5 mx-3 justify-content-center border border-dark rounded mb-5 px-0">
                            <div class="form-group">
                                <div class="col p-2" style="background-color: black; color: white; font-family: 'source-serif-3-caption';">
                                    <label for="sun">SUN ALLERGIC</label>
                                </div>
                                <div class="col p-4">
                                    <img src="https://cdn-icons-png.flaticon.com/128/869/869818.png">
                                    <div class="btn-group btn-group-toggle d-flex justify-content-center mt-3" data-toggle="buttons">
                                        <label class="btn btn-outline-dark mx-2">
                                            <input type="radio" name="sun" id="Yes" value="Yes" autocomplete="off"> Yes
                                        </label>
                                        <label class="btn btn-outline-dark mx-2">
                                            <input type="radio" name="sun" id="No" value="No" autocomplete="off"> No
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-btn btn-outline-dark rounded-0" style="font-weight: 500; width: 150px; font-weight: 700;">Submit</button>
                </form>
            </div>
        </div>
    </div>

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
