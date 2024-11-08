<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}" defer></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sidebar.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/pinterest-logo.png') }}">
    @yield('css')

    @yield('header')
</head>

<body>
    <div id="app">

        {{-- banner --}}
        <div class="banner">
            <div class="banner-content">
                <p class="epilogue mb-5">BODA</p>
                <p class="retro-signature" style="margin-bottom: 3.5rem">Fer & Mari</p>
                <p class="epilogue mb-5">BODA</p>
            </div>
        </div>
        {{-- banner --}}

        {{-- our history --}}
        <div class="our-history">
            <p class="epilogue-oh">Nuestra historia</p>
            <span class="img-oh">
                <img src="img/bonfire.png" alt="">
                </span>
                <p class="epilogue-oh-p">
                    “El matrimonio, como la vida entera, es algo terriblemente 
                    difícil que hay que volver a empezar desde el principio todos los días, y todos 
                    los días de nuestra vida. El esfuerzo es constante, e inclusive agotador muchas veces, pero vale la pena”
                </p>
        </div>
        {{-- our history --}}

        {{-- galery --}}
        <div class="galery">
            <div class="galery-content">
                <div class="galery-item">
                    <img src="img/img7.jpg" alt="">
                    <div class="galery-text">
                        <p class="text-center epilogue-g mb-0">15</p>
                        <p class="retro-signature-g">Diciembre</p>
                        <p class="text-center epilogue-g mb-0">2018</p>
                    </div>
                </div>
                <div class="galery-item">
                    <img src="img/img6.jpg" alt="">
                    <div class="galery-text">
                        <p class="text-center epilogue-g mb-0">28</p>
                        <p class="retro-signature-g">Diciembre</p>
                        <p class="text-center epilogue-g mb-0">2018</p>
                    </div>
                </div>
                <div class="galery-item">
                    <img src="img/img5.png" alt="">
                      <div class="galery-text">
                        <p class="text-center epilogue-g-g mb-0">24</p>
                        <p class="retro-signature-g-g">Marzo</p>
                        <p class="text-center epilogue-g-g mb-0">2019</p>
                    </div>
                </div>
                <div class="galery-item">
                    <img src="img/img4.jpg" alt="">
                      <div class="galery-text">
                        <p class="text-center epilogue-g mb-0">29</p>
                        <p class="retro-signature-g">Diciembre</p>
                        <p class="text-center epilogue-g mb-0">2019</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- galery --}}

        {{-- count --}}
        <div class="count">
            <p>y CONTANDO</p>
        </div>
        {{-- count --}}

        {{-- counter --}}
        <div class="counter">
            <div class="counter-left">
                <img src="img/img3.jpg" alt="">
            </div>
            <div class="counter-right">
                <div class="counter-days">
                    <p class="epilogue-c">6 <sup>MESES</sup></p>
                    <p class="epilogue-c">12 <sup>DÍAS</sup></p>
                    <p class="epilogue-c">16 <sup>HORAS</sup></p>
                </div>
                <div class="counter-button">Guardar fecha <img src="img/calendar.png" alt="calendar"></div>
                <div class="counter-images">
                    <img src="img/img2.png" class="img-left" alt="">
                    <img src="img/img1.png" class="img-right" alt="">
                </div>
            </div>
        </div>
        {{-- counter --}}
        
    </div>
        
    <!-- Scripts -->
    @yield('scripts')
</body>

</html>
