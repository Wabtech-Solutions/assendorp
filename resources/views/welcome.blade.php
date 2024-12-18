@extends('layout')
@section('content')
    <!DOCTYPE html>
    <html lang="zxx">

    <!-- Mirrored from templates.hibootstrap.com/dizu/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2023 13:19:36 GMT -->

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/fancybox.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/dark-theme.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <title>Rijschool Assendorp - Het adres voor een goede les!</title>
        <meta name="description"
            content="Autorijschool Assendorp, het adres voor een goede les. ✓ Personlijke begelijding ✓ Betaal in termijnen zonder kosten ✓ Goedkoop lessen ✓ Betaal in termijnen">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>

        <div class="loader js-preloader">
            <svg class="car" width="102" height="40" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(2 1)" stroke="#091851" fill="none" fill-rule="evenodd" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path class="car__body"
                        d="M47.293 2.375C52.927.792 54.017.805 54.017.805c2.613-.445 6.838-.337 9.42.237l8.381 1.863c2.59.576 6.164 2.606 7.98 4.531l6.348 6.732 6.245 1.877c3.098.508 5.609 3.431 5.609 6.507v4.206c0 .29-2.536 4.189-5.687 4.189H36.808c-2.655 0-4.34-2.1-3.688-4.67 0 0 3.71-19.944 14.173-23.902zM36.5 15.5h54.01"
                        stroke-width="2" />
                    <ellipse class="car__wheel--left" stroke-width="2.2" fill="#FFF" cx="83.493" cy="30.25"
                        rx="6.922" ry="6.808" />
                    <ellipse class="car__wheel--right" stroke-width="2.2" fill="#FFF" cx="46.511" cy="30.25"
                        rx="6.922" ry="6.808" />
                    <path class="car__line car__line--top" d="M22.5 16.5H2.475" stroke-width="2" />
                    <path class="car__line car__line--middle" d="M20.5 23.5H.4755" stroke-width="2" />
                    <path class="car__line car__line--bottom" d="M25.5 9.5h-19" stroke-width="2" />
                </g>
            </svg>
        </div>

        <div class="page-wrapper">




            <div class="hero-wrap style2">
                <div class="hero-slider-one owl-carousel">
                    <div class="hero-slide-item hero-slide-1 bg-f">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-10">
                                    <div class="hero-content" data-speed="0.10" data-revert="true">
                                        <h1>Het adres voor een goede les!</h1>
                                        <p>Dat is wat al 20 jaar door mensen wordt gezegd. Autorijschool Assendorp is een
                                            betrouwbare
                                            rijschool waar persoonlijke ondersteuning op 1 staat. Bij Autorijschool
                                            Assendorp in Zwolle haal je binnen No-Time je rijbewijs!</p>
                                        <p>✓ Personlijke begeleiding ✓ Betaal in termijnen zonder kosten ✓ Goedkoop lessen ✓
                                            Betaal in termijnen</p>
                                        <a href="/over" class="btn style1">Meer info</a>
                                        <div id="aanmelden"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="book-course-wrap style1">
                <div class="container">
                    <div class="book-course-form" style="border-radius: 10px">
                        <!-- Gratis intake actie banner -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                Oeps! Er is iets mis gegaan.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <script src="https://www.google.com/recaptcha/api.js?render=6Lfi71UqAAAAANcMjb0UOa2lkQiyIlQRFNSk1WG-"></script>





                        <script>
                            $(document).ready(function() {
                                $('#aanForm-multisteps-form').on('submit', function(event) {
                                    event.preventDefault(); // Voorkom standaard formulier gedrag

                                    $.ajax({
                                        url: $(this).attr('action'), // De actie van het formulier
                                        type: 'POST',
                                        data: $(this).serialize(), // Seriële gegevens van het formulier
                                        success: function(response) {
                                            // Hier kun je iets doen met de response van de server
                                            alert('Formulier succesvol verzonden!'); // Bijvoorbeeld een alert
                                            // Je kunt ook de formulierwaarden resetten of een ander bericht tonen
                                            $('#aanForm-multisteps-form')[0].reset(); // Reset het formulier
                                        },
                                        error: function(xhr) {
                                            // Hier kun je foutafhandeling doen
                                            alert('Er is een fout opgetreden: ' + xhr.responseText);
                                        }
                                    });
                                });
                            });
                        </script>


                        @include('aanmeldform')

                    </div>
                </div>
            </div>


            <section class="about-wrap style2 ptb-100">
                <div class="container">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img-wrap">
                                <div class="about-bg-2 bg-f"></div>
                                <div class="about-promo-box">
                                    <h4>20 Jaar<span>Ervaring</span></h4>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="content-title style1">
                                    <span>Over ons</span>
                                    <h2>Autorijschool Assendorp</h2>
                                    <p>Autorijschool Assendorp in Zwolle is een goede en betrouwbare rijschool die
                                        kwalitatief goede rijlessen aanbiedt met een goede prijs/kwaliteitsverhouding, waar
                                        al veel mensen voordelig zijn geslaagd voor het rijbewijs. </p>
                                </div>
                                <div class="ceo-message">
                                    <p>"Geduld en persoonlijke ondersteuning is de snelste weg naar een geslaagd examen."
                                    </p>
                                    <h6>Rob, eigenaar, gecertificeerd rij instructeur, faalangst instructeur, RIS
                                        instructeur.</h6>
                                </div>
                                <a href="/over" class="btn style1">Lees meer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="PakketA"></div>

            <section class="course-wrap pt-100 pb-75 bg-concrete">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                            <div class="section-title style1 text-center mb-40">
                                <span>Onze pakketten</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-slider-one owl-carousel">
                        <div class="course-card style2">
                            <div class="course-img">
                                <img src="assets/img/ARA/image7.webp" alt="Intrieur Lesauto">
                            </div>
                            <span class="label">Betaal in termijnen zonder kosten</span>
                            <div class="course-info">
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>25 Lessen</li>
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>Inclusief 1e
                                        examen</li>
                                </ul>
                                <h3>Pakket A</a></h3>
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-dot" style="color: #6c1a14;"></i>Lessen van 60
                                        minuten</li>
                                </ul>
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-dot" style="color: #6c1a14;"></i><B>Optioneel:</B>
                                        Tussendtijdse toets</li>
                                </ul>
                                <p>Meld je aan via onderstaande button, er wordt dan spoedig contact met je opgenomen.</p>

                                <div class="course-author-wrap">

                                    <p class="course-price">€ 2175,-</p>
                                </div>
                                <p style="font-size: 10px; margin-bottom: 1px;">incl. BTW typefouten voorbehouden.</p>
                                <a class="btn style2" href="#aanmelden">
                                    Meld je aan <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                        <div class="course-card style2" id="PakketB">
                            <div class="course-img">
                                <img src="assets/img/ARA/image7.webp" alt="Intrieur Lesauto">
                            </div>
                            <span class="label">Betaal in termijnen zonder kosten</span>
                            <div class="course-info">
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>35 Lessen</li>
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>Inclusief 1e
                                        examen</li>
                                </ul>
                                <h3>Pakket B</a></h3>
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-dot" style="color: #6c1a14;"></i>Lessen van 60
                                        minuten</li>
                                </ul>
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-dot" style="color: #6c1a14;"></i><B>Optioneel:</B>
                                        Tussendtijdse toets</li>
                                </ul>
                                <p>Meld je aan via onderstaande button, er wordt dan spoedig contact met je opgenomen.</p>

                                <div class="course-author-wrap">

                                    <p class="course-price">€ 2445,-</p>
                                </div>
                                <p style="font-size: 10px; margin-bottom: 1px;">incl. BTW typefouten voorbehouden.</p>
                                <a class="btn style2" href="#aanmelden">
                                    Meld je aan <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                        <div class="course-card style2" id="PakketC">
                            <div class="course-img">
                                <img src="assets/img/ARA/image7.webp" alt="Intrieur Lesauto">
                            </div>
                            <span class="label">Betaal in termijnen zonder kosten</span>
                            <div class="course-info">
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>40 Lessen</li>
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>Inclusief 1e
                                        examen</li>
                                </ul>
                                <h3>Pakket C</a></h3>
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-dot" style="color: #6c1a14;"></i>Lessen van 60
                                        minuten</li>
                                </ul>
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-dot" style="color: #6c1a14;"></i><B>Optioneel:</B>
                                        Tussendtijdse toets</li>
                                </ul>
                                <p>Meld je aan via onderstaande button, er wordt dan spoedig contact met je opgenomen.</p>

                                <div class="course-author-wrap">

                                    <p class="course-price">€ 2695,-</p>
                                </div>
                                <p style="font-size: 10px; margin-bottom: 1px;">incl. BTW typefouten voorbehouden.</p>
                                <a class="btn style2" href="#aanmelden">
                                    Meld je aan <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="diversen"></div>

            <section class="course-wrap pt-100 pb-75 bg-concrete" style="margin-top: -51px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                            <div class="section-title style1 text-center mb-40">
                                <span>Diversen</span>
                            </div>
                        </div>
                    </div>
                    <div class="course-slider-one owl-carousel">
                        <div class="course-card style2">
                            <div class="course-info">
                                <h3>Losse rijles</a></h3>
                                <div class="course-author-wrap">
                                    <p class="course-price">€ 63,-</p>
                                </div>
                                <p style="font-size: 10px; margin-bottom: 1px;">incl. BTW typefouten voorbehouden.</p>
                            </div>
                        </div>
                        <div class="course-card style2" id="diversen">
                            <div class="course-info">
                                <h3>Tussentijdse Toets</a></h3>
                                <div class="course-author-wrap">
                                    <p class="course-price">€ 210,-</p>
                                </div>
                                <p style="font-size: 10px; margin-bottom: 1px;">incl. BTW typefouten voorbehouden.</p>
                            </div>
                        </div>
                        <div class="course-card style2" id="diversen">
                            <div class="course-info">
                                <h3>Praktijkexamen</a></h3>
                                <div class="course-author-wrap">
                                    <p class="course-price">€ 280,-</p>
                                </div>
                                <p style="font-size: 10px; margin-bottom: 1px;">incl. BTW typefouten voorbehouden.</p>
                            </div>
                        </div>
                        <div class="course-card style2" id="diversen">
                            <div class="course-info">
                                <h3>Herexamen</a></h3>
                                <div class="course-author-wrap">
                                    <p class="course-price">€ 280,-</p>
                                </div>
                                <p style="font-size: 10px; margin-bottom: 1px;">incl. BTW typefouten voorbehouden.</p>
                            </div>
                        </div>

                        <div class="course-card style2" id="diversen">
                            <div class="course-info">
                                <h3>Faalangst examen</a></h3>
                                <div class="course-author-wrap">
                                    <p class="course-price">€ 325,-</p>
                                </div>
                                <p style="font-size: 10px; margin-bottom: 1px;">incl. BTW typefouten voorbehouden.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="vehicle-wrap bg-concrete">
                <div class="container">
                    <div class="content-title style1 text-center mb-40">
                        <span>De Lesauto</span>
                        <h2>Is dit de lesauto die jou naar het felbegeerde rijbewijs brengt?</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div style="" class="">
                                <div class="vehicle-card style2">
                                    <div class="vehicle-img">
                                        <img src="/assets/img/ARA/home1.webp" alt="Image">
                                    </div>
                                    <div class="vehicle-info">
                                        <div class="row justify-content-center">
                                            <div class="col-md-7">
                                                <h3><a href="vehicle-details.html">Peugeot 208 (2020) </a></h3>
                                                <p><i class="fa-solid fa-fan" style="color: #6c1a14;"></i> Airco Climate
                                                    control
                                                    <br>
                                                    <i class="fa-solid fa-route" style="color: #6c1a14;"></i> Navigatie
                                                    <br>
                                                    <i class="fa-solid fa-gauge" style="color: #6c1a14;"></i>
                                                    Cruisecontrol
                                                    <br>
                                                    <i class="fa-solid fa-camera" style="color: #6c1a14;"></i>
                                                    Achteruitrij-camera
                                                    <br>
                                                    <i class="fa-solid fa-cube" style="color: #6c1a14;"></i> 3D Dashboard
                                                    <br>
                                                    <i class="fa-solid fa-gears" style="color: #6c1a14;"></i>
                                                    Handgeschakeld
                                                </p>
                                            </div>
                                        </div>
                                        <a href="#aanmelden" class="btn style2">Plan je rijles<i
                                                class="flaticon-right-arrow-1"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="counter-area">
                <div class="container">
                    <div class="counter-card-wrap">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                                <div class="counter-card">
                                    <span class="counter-icon">
                                        <i class="flaticon-graduated"></i>
                                    </span>
                                    <div class="counter-text">
                                        <h2 class="counter-num">
                                            <span class="odometer" data-count="1200"></span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Zijn geslaagd</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                                <div class="counter-card">
                                    <span class="counter-icon">
                                        <i class="flaticon-teacher"></i>
                                    </span>
                                    <div class="counter-text">
                                        <h2 class="counter-num">
                                            <span class="odometer" data-count="20"></span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Jaar ervaring</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                                <div class="counter-card">
                                    <span class="counter-icon">
                                        <i class="flaticon-reading"></i>
                                    </span>
                                    <div class="counter-text">
                                        <h2 class="counter-num">
                                            <span class="odometer" data-count="38"></span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Huidige studenten</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                                <div class="counter-card">
                                    <span class="counter-icon">
                                        <i class="flaticon-car"></i>
                                    </span>
                                    <div class="counter-text">
                                        <h2 class="counter-num">
                                            <span class="odometer" data-count="20000"></span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>lessen</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="testimonial-wrap ptb-100" id="refereties">
                <div class="container">
                    <div class="section-title style1 text-center mb-40">
                        <span>Referenties</span>
                        <h2>Dit is wat onze blije en geslaagde kandidaten zeggen</h2>
                    </div>
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                         */
                        var disqus_config = function() {
                            this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier =
                                PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');

                            s.src = 'https://autorijschoolassendorp.disqus.com/embed.js';

                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript"
                            rel="nofollow">comments powered by Disqus.</a></noscript>

                </div>
            </section>





    </html>
@endsection
