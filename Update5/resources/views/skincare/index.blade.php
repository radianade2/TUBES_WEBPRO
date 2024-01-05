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
    <title>SKINMATE: TUBES WEBPRO</title>
</head>
<body>
    <div class="container-flex px-0">
        <div class="row">
            <!-- header weather -->
            <div class="col-12 text-center border-bottom p-2" style="background-color: black; color: white; font-family: 'Lato'">
                Looking for weather today?
                <a href="https://weather.com/weather/today/">Continue here</a>
            </div>

            <!-- face -->
            <div class="col-12">
                <div class="container-flex px-0 mb-5">
                    <div class="row">
                        <!-- face kiri -->
                        <div class="col-6 justify-content-center py-5">
                            <div class="row my-5">
                                <div class="col-2"></div>
                                <div class="col-8">
                                    <div class="row justify-content-center">
                                        <div class="col-12 text-center mb-5">
                                            <img src="{{ asset('images/smlogo.png') }}" id="Logo" width="300" height="45">
                                            <p style="font-family: 'Lora'; font-size: 12px;">WEATHER SKINCARE RECOMMENDATION</p>
                                        </div>

                                        <div class="col-12 text-center mb-3 mt-5">
                                            <p style="font-family: 'IBM Plex Serif'">LOVE YOUR SKIN LOVE THE WEATHER<br>GET YOUR RECOMMENDATION HERE!</p>
                                            <a type="button" class="btn border p-2" href="/halaman_form" style="background-color: black; color: white; width: 355px; border-radius: 0%; font-family: 'Lato'; font-size: 14px;">FREE TEST</a>
                                        </div>

                                        <div class="col-12 p-3 border-top boreder-top" style="color:darkgrey; font-size: 13px; font-family: 'Lato';">
                                            this quiz hanya sebagai uji coba pengguna saja. Tidak dianggap serius.
                                        </div>
                                        <div class="col-12 p-3 border-top boreder-top" style="color:darkgrey; font-size: 13px; font-family: 'Lato';">
                                            this quiz will taken from user and integrated with weather.com for get the location you are in, used for parameter your
                                            current situation and your skin character to get more accurate result.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>

                        <!-- face kanan -->
                        <div class="col-6 text-center slide-pic p-5" style="background-color: #5c5555;">
                            <div class="container p-5">
                                <img src="image" id="image" width="300px" height="450px" style="box-shadow: 10px 10px 10px 0px rgba(0,0,0,0.75);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- explain skincare -->
            <div class="col-12">
                <div class="container text-center justify-content-center px-0 mt-5 mb-5" style="font-family: 'IBM Plex Serif'">
                    <h2>ENJOY THE WEATHER BY RIGHT SKINCARE APPLICATION</h2>
                    <div id="cardSlider" class="carousel slide mt-5 p-5 d-flex justify-content-center" data-bs-ride="carousel" style="background-color: #E4E4DE;">
                        <div class="carousel-inner" style="width: 18rem;">
                            <div class="carousel-item active justify-content-center">
                                <div class="card-body" style="background-color: #5c5555;">
                                    <img src="https://smithandcaugheys-cdn.freetls.fastly.net/data/media/images/catalogue/m285/s2421000_1.jpg" class="d-block w-100" style="height: 327.45px;">
                                    <div class="card-body">
                                        <h5 class="card-title">MOISTURIZER</h5>
                                        <p class="card-text">Penejlasan moisturizer xxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxx</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item justify-content-center">
                                <div class="card-body" style="background-color: #5c5555;">
                                    <img src="https://image.harrods.com/kiehls-ultra-light-daily-uv-defense-mineral-sunscreen_14799553_23617021_1000.jpg" class="d-block w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">SUNSCREEN</h5>
                                        <p class="card-text">Penjelasan sunscreen xxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxx</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item justify-content-center">
                                <div class="card-body" style="background-color: #5c5555;">
                                    <img src="https://image.harrods.com/kiehls-clearly-corrective-dark-spot-solution_14790899_31893675_2048.jpg" class="d-block w-100">
                                    <div class="card-body">
                                        <h5 class="card-title">SERUM</h5>
                                        <p class="card-text">Penjelasan SERUM  xxxxxxxxxxxxxxxxxxxxxx<br/>xxxxxxxxxxxxxxxxxxx</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#cardSlider" role="button" data-bs-slide="prev" style="background-color: black;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#cardSlider" role="button" data-bs-slide="next" style="background-color: black;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
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
        </div>
    </div>

    <script type="text/javascript">

        let image = document.getElementById('image');
        let images = ["https://images.pexels.com/photos/11298681/pexels-photo-11298681.jpeg", "https://images.pexels.com/photos/1735675/pexels-photo-1735675.jpeg",
                    "https://images.pexels.com/photos/10774493/pexels-photo-10774493.jpeg","https://images.pexels.com/photos/672034/pexels-photo-672034.jpeg"];
        function changeImage() {
            let random = Math.floor(Math.random() * 4);
            image.src = images[random];
        }
        // Inisialisasi gambar pertama saat halaman dimuat
        changeImage();
        // Ganti gambar setiap 800ms
        setInterval(changeImage, 1500);
    </script>

</body>
</html>
