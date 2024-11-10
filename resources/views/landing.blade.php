<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flip.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
    {{-- <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' rel='stylesheet'> --}}
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <!-- Font Awesome Free CDN -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-3lfd+wV8XSLkYVPaYkxs5f+XZTka4b5Vn8vopJ28CVhSC0OD --}}

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body class="antialiased">
    <style>
        .tick {
            padding-bottom: 1em;
            font-size: 1rem;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans,
                Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
        }

        .tick-label {
            font-size: 0.375em;
            text-align: center;
        }

        .tick-group {
            margin: 0 0.25em;
            text-align: center;
        }

        #thumbnailCarousel {
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
        }

        #thumbnailCarousel img {
            display: inline-block;
            animation: scroll 20s linear infinite;
        }

        @keyframes scroll {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }
    </style>

    <section class="py-5 d-flex justify-content-center align-items-center min-vh-100" id="">
        <div class="container">
            <h1 class="mx-4 px-2 fw-light text-light text-center">
                Maha Suci <strong> Allah </strong> yang telah menciptakan makhluk-Nya berpasang-pasangan.
                <br>
                <br>

                Ya <strong>Allah</strong> perkenankanlah kami menikahkan&nbsp;
                <strong>putra-putri kami:</strong>
            </h1>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-lg-1 mb-5 mb-lg-0 position-relative">
                    <img id="" class="fit-cover w-100 img-shadow" style="border-radius: 0px 100px 0 100px; " src="{{ asset('img/hyt.jpg') }}" alt="background" />
                    <div class="description-lift position-relative">
                        <div class="position-absolute bottom-0 start-50 translate-middle-x w-100 pb-4"
                            style="border-radius: 0 0 0 100px;background-color: rgba(0, 0, 0, 0.3) !important;">
                            <div class="mt-4 tema-font text-warning text-nowrap text-center">
                                <strong>Haryati, S.Farm</strong>
                            </div>
                            <p class="fs-4 text-light text-nowrap text-center">
                                Putri dari
                                <br>
                                bapak <strong>Haryono</strong> dan <strong>Ibu Fatmawati</strong>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 order-lg-1 mb-5 mb-lg-0 position-relative">
                    <img id="my-img" class="fit-cover w-100 img-shadow" style="border-radius: 100px 0 100px 0;" src="img/zul.jpg" alt="about" />
                    <div class="description-lift position-relative">
                        <div class="position-absolute bottom-0 start-50 translate-middle-x w-100 pb-4"
                            style="border-radius: 0 0 100px 0;background-color: rgba(0, 0, 0, 0.3) !important;">
                            <div class="mt-4 tema-font text-center text-warning text-nowrap">
                                <strong>Zulfahmi Ramadhani, S.Kom</strong>
                            </div>
                            <p class="fs-4 text-light text-nowrap text-center">
                                Putra dari
                                <br>
                                bapak <strong>H. Rivani Syarif</strong> dan <strong>Hj. Zulaikha</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 d-flex justify-content-center align-items-center min-vh-100" id="">
        <div class="card shadow-custom box-shadow rounded-4" style="width: 60rem;">
            <h1 class="card-header text-center">HARI PERNIKAHAN</h1>
            <div class="card-body ">
                <p class="card-text">
                    <!-- Countdown Timer -->
                <div class="tick" data-did-init="handleTickInit">
                    <div data-repeat="true" data-layout="horizontal center fit" data-transform="preset(d, h, m, s) -> delay">
                        <div class="tick-group">
                            <div data-key="value" data-repeat="true" data-transform="pad(00) -> split -> delay">
                                <span data-view="flip"></span>
                            </div>

                            <span data-key="label" data-view="text" class="tick-label"></span>
                        </div>
                    </div>
                </div>
                </p>

            </div>


        </div>
    </section>

    {{-- <section class="py-5 d-flex justify-content-center align-items-center min-vh-100" id="">
        <div class="card" style="width: 70rem">
            <h1 class="card-header text-center">SAVE THE DATE</h1>
            <div class="card-body">
                <h5 class="card-title text-center">MINGGU 24 NOVEMBER</h5>
                <div class="card-text">
                    <div class="row">
                        <dis class="col">
                            <div>AKAD PERNIKAHAN</div>
                            <div>08.00 WITA</div>
                            <div>GEDUNG SERBAGUNA BBPPKS</div>
                        </dis>
                        <dis class="col">
                            <div>RESEPSI</div>
                            <div>09.00 - 13.30 WITA</div>
                            <div>GEDUNG SERBAGUNA BBPPKS</div>
                        </dis>
                    </div>
                    <div class="mt-5 row text-center">
                        <div>
                            maps
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </section> --}}

    <section class="py-5 d-flex justify-content-center align-items-center min-vh-100" id="">
        <div class="m-4 rounded-4 card box-shadow" style="width: 60rem;">
            <div class="position-relative">
                <img src="{{ asset('img/hf.jpg') }}" class="rounded-4 card-img-top" alt="...">
                <div class="mt-4 position-absolute top-0 start-50 translate-middle-x">
                    <div class="std-font text-dark text-nowrap text-center">
                        <strong>Save The Date</strong>
                    </div>
                    <p class="fs-4 text-dark text-nowrap text-center">
                        MINGGU <br>
                        24 NOVEMBER 2024
                    </p>
                    {{-- <div class="rounded-4 border-0" style="background-color: rgba(255, 255, 255, .3);"> --}}
                    <div class="rounded-4 border-0">
                        <div class="row d-inline-flex flex-nowrap justify-content-center text-center">
                            <div class="m-2 col">
                                <div class="rounded-4 card std-shadow border-0" style="width: 14rem; background-color: rgba(255, 255, 255, 0);">
                                    <div class="position-relative">
                                        <div class="mt-2 pb-0 fs-6 text-dark text-nowrap text-center">
                                            <strong>AKAD NIKAH</strong>
                                        </div>
                                    </div>
                                    <div class="mt-0 card-body">
                                        <hr class="m-0 p-0">
                                        <p class="mt-2 pb-0 card-text">08.00 WITA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-2 col">
                                <div class="rounded-4 card std-shadow border-0" style="width: 14rem; background-color: rgba(255, 255, 255, 0);">
                                    <div class="position-relative">
                                        <div class="mt-2 pb-0 fs-6 text-dark text-nowrap text-center">
                                            <strong>RESEPSI</strong>
                                        </div>
                                    </div>
                                    <div class="mt-0 card-body">
                                        <hr class="m-0 p-0">
                                        <p class="mt-2 pb-0 card-text">09.00 - 13.30 WITA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 fs-4 rounded-4 card border-0 text-dark std-shadow text-nowrap text-center" style="background-color: rgba(255, 255, 255, 0);">
                            GEDUNG SERBAGUNA <br>
                            BBPPKS
                        </p>

                        {{-- <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br> --}}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">Anémone</h5>
                <hr>
                <p class="card-text">Some quick example</p>
            </div>
        </div>
    </section>

    <section class="py-5 d-flex justify-content-center align-items-center min-vh-100" id="">
        {{-- <section class="py-5 d-flex flex-column justify-content-center align-items-center min-vh-100" id=""> --}}
        <div class="m-4 card rounded-4 box-shadow " style="width: 60rem">

            <div class="card-body">
                <h5 class="card-title"><span><box-icon name='camera' size="lg" animation='tada'></box-icon></span> OUR MOMENT</h5>
                <div id="momenCarousel" class="m-4 carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @for ($i = 1; $i <= 43; $i++)
                            <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                                <img src="{{ asset('img/gallery/p' . $i . '.jpg') }}" class="img-fluid d-block rounded-0" alt="...">
                            </div>
                        @endfor
                        {{-- <div class="carousel-item active">
                            <img src="{{ asset('img/gallery/p0.jpg') }}" class="img-fluid d-block rounded-0" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/gallery/p1.jpg') }}" class="img-fluid d-block rounded-0" alt="...">
                        </div> --}}
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#momenCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.7);"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#momenCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: rgba(0, 0, 0, 0.7);"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                    <div id="thumbnailCarousel" class="d-flex justify-content-center">
                        @for ($i = 1; $i <= 43; $i++)
                            <img src="{{ asset('img/gallery/p' . $i . '.jpg') }}" class="d-block rounded-0" width="25%" style="cursor: pointer;" alt="...">
                        @endfor
                    </div>

                </div>
                <hr>
                <p class="card-text">Some quick example</p>
            </div>
        </div>
    </section>

    <section class="py-5 d-flex justify-content-center align-items-center min-vh-100" id="">
        {{-- <section class="py-5 d-flex flex-column justify-content-center align-items-center min-vh-100" id=""> --}}
        <div id="" class="m-4 card rounded-4 box-shadow" style="width: 60rem;">
            <div class="card-body">
                <h5 class="card-title"><span><box-icon name='message-rounded-dots' size="lg" animation='tada'></box-icon></span> UCAPAN</h5>
                <hr>
                <div class="card-text">

                    <form action="">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Ucapkan sesuatu</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button class="btn btn-success">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 d-flex justify-content-center align-items-center min-vh-100" id="">
        {{-- <section class="py-5 d-flex flex-column justify-content-center align-items-center min-vh-100" id=""> --}}
        <div id="" class="m-4 card rounded-4 box-shadow" style="width: 60rem;">
            <div class="card-body">
                <h5 class="card-title"><span><box-icon name='qr-scan' size="lg" animation='tada'></box-icon></span> WEDDING GIFT</h5>
                <hr>
                <div class="card-text">
                    <div class="">

                    </div>
                    {{-- <img src="" class="rounded mx-auto d-block" alt="..."> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 d-flex justify-content-center align-items-center min-vh-100" id="">
        <div class="card">
            <div class="card-header">
                Special Thanks
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

<script src="{{ asset('js/flip.js') }}"></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
<script type="module" src="{{ asset('js/card.js') }}"></script>
<!-- Script JS -->
<script src="{{ asset('js/card.js') }}"></script>

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script>
    function handleTickInit(tick) {
        // Uncomment to set labels to different language ( in this case Dutch )

        var locale = {
            YEAR_PLURAL: 'Tahun',
            YEAR_SINGULAR: 'T',
            MONTH_PLURAL: 'Bulan',
            MONTH_SINGULAR: 'B',
            WEEK_PLURAL: 'Minggu',
            WEEK_SINGULAR: 'Mig',
            DAY_PLURAL: 'Hari',
            DAY_SINGULAR: 'H',
            HOUR_PLURAL: 'Jam',
            HOUR_SINGULAR: 'J',
            MINUTE_PLURAL: 'Menit',
            MINUTE_SINGULAR: 'M',
            SECOND_PLURAL: 'Detik',
            SECOND_SINGULAR: 'D',
            MILLISECOND_PLURAL: 'Milidetik',
            MILLISECOND_SINGULAR: 'Mil'
        };

        for (var key in locale) {
            if (!locale.hasOwnProperty(key)) {
                continue;
            }
            tick.setConstant(key, locale[key]);
        }


        // var nextYear = new Date().getFullYear() + 1;

        Tick.count.down('2024-11-24').onupdate = function(value) {
            tick.value = value;
        };
    }
</script>


</html>
