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
                    <p class="epilogue-c" id="months">6 <sup>MESES</sup></p>
                    <p class="epilogue-c" id="days">12 <sup>DÍAS</sup></p>
                    <p class="epilogue-c" id="hours">16 <sup>HORAS</sup></p>
                    {{-- <p class="epilogue-c" id="minutes">0 <sup>MINUTOS</sup></p>
                    <p class="epilogue-c" id="seconds">0 <sup>SEGUNDOS</sup></p> --}}
                </div>
                <div class="counter-button">Guardar fecha <img src="img/calendar.png" alt="calendar"></div>
                <div class="counter-images">
                    <img src="img/img2.png" class="img-left" alt="">
                    <img src="img/img1.png" class="img-right" alt="">
                </div>
            </div>
        </div>
        {{-- counter --}}

        {{-- location --}}

        <div class="location">
            <div class="location-left">
                <div class="location-item">
                    <img src="img/map.png" class="" alt="">
                    <p class="epilogue-location">Palo Alto, Lago de Coatepeque</p>
                </div>
                <div class="location-item">
                    <div class="location-item-left">
                        <img src="img/suit.png" class="" alt="">
                    </div>
                    <div class="location-item-right">
                        <div>
                            <p class="epilogue-location"><b>Caballeros:</b> Traje formal o business casual</p>
                        </div>
                        <div>
                            <p class="epilogue-location"><b>Señoritas:</b> Vestidos (no color blanco)</p>
                        </div>
                    </div>
                </div>
                <div class="location-item">
                     <img src="img/clock.png" class="" alt="">
                    <p class="epilogue-location">4:00 p.m. - hasta más tarde</p>
                </div>
            </div>
            <div class="location-right">
                
                <div class="map-button" id="mapButton">Ver ubicación <img src="img/mapwhite.png" alt="calendar"></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1936.5707290782816!2d-89.5320410138011!3d13.890488657564635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62ddd768c832ad%3A0xc791d686a678f0f9!2sQuinta%20palo%20alto!5e0!3m2!1ses!2ssv!4v1731041167227!5m2!1ses!2ssv" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        {{-- location --}}

        {{-- confirm --}}
        <div class="confirm">
            <div class="confirm-left">
                <p class="epilogue-confirm">Confirmar / Mesas</p>
            </div>
            <div class="confirm-right">
                <p class="epilogue-confirm-p">¡Verifica tu ubicación y acomódate como debe de ser! Gracias por ser parte de nuestro evento.</p>
            </div>
        </div>
        {{-- confirm --}}

        {{-- tables --}}
        <div class="tables">
            <div class="table-text">
                <div class="input-table">
                        <p class="input-fake">Coloca el no. de mesa acá</p>
                        {{-- <v-text-field label="Filled" single-line filled hide-details="true"></v-text-field> --}}
                </div>
                <div class="button-table">Buscar <img src="img/magnifier.png" class="" alt=""></div>
                <div class="guests">
                    <p class="people">
                        Ángel Pérez <br>
                        & Nathalia Pineda + Luisita
                    </p>
                    <p class="table-number">
                        Mesa: #1 - 3 personas
                    </p>
    
                    <p class="thanks">
                        Gracias por confirmar <img src="img/heart.png" class="" alt="">
                    </p>
                </div>
            </div>
            <div class="table-content">

            </div>
        </div>
        {{-- tables --}}
        
    </div>
        
    <!-- Scripts -->
    @yield('scripts')
</body>
<script>
    function countdown(endDate) {
    const end = new Date(endDate).getTime();

    setInterval(function() {
        const now = new Date().getTime();
        const distance = end - now;

        const months = Math.floor(distance / (1000 * 60 * 60 * 24 * 30));
        const days = Math.floor((distance % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        // const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        // const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('months').innerHTML = `${months} <sup>MESES</sup>`;
        document.getElementById('days').innerHTML = `${days} <sup>DÍAS</sup>`;
        document.getElementById('hours').innerHTML = `${hours} <sup>HORAS</sup>`;
        // document.getElementById('minutes').innerHTML = `${minutes} <sup>MINUTOS</sup>`;
        // document.getElementById('seconds').innerHTML = `${seconds} <sup>SEGUNDOS</sup>`;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById('months').innerHTML = "0 <sup>MESES</sup>";
            document.getElementById('days').innerHTML = "0 <sup>DÍAS</sup>";
            document.getElementById('hours').innerHTML = "0 <sup>HORAS</sup>";
            // document.getElementById('minutes').innerHTML = "0 <sup>MINUTOS</sup>";
            // document.getElementById('seconds').innerHTML ="0 <sup>SEGUNDOS</sup>"
        }
    }, 1000);
}

// Start the countdown with your end date
countdown('2025-03-30T00:00:00'); // Example end date

document.getElementById('mapButton').addEventListener('click', function() {
    console.log("click");
    
    const latitude = 13.890749063516784;  // Replace with your latitude 13.890749063516784, -89.53199808954312
    const longitude = -89.53199808954312;  // Replace with your longitude
    const url = `https://www.google.com/maps/search/?api=1&query=${latitude},${longitude}`;
    window.open(url, '_blank');
});


</script>

</html>
