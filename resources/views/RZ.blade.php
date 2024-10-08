@extends('layout')
@section('content')
    <!DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <title>Rijschool Zwolle | Autorijschool Assendorp | Ervaren Instructeurs en Betaalbare Rijlessen</title>
        <meta name="description" content="Zoek je een rijschool in Zwolle? Autorijschool Assendorp biedt ervaren instructeurs, flexibele lestijden en betaalbare rijlespakketten. Schrijf je vandaag in voor professionele rijlessen!">
        <meta name="keywords" content="Rijschool Zwolle, Rijles Zwolle, Autorijschool Zwolle, Rijbewijs halen Zwolle, Rijlespakketten Zwolle, Flexibele rijles Zwolle, Rijschool tarieven Zwolle">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <style>/* Algemeen styling voor de hele pagina */
    

        /* Contact sectie */
        .contact-box-wrap {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #fff;
            padding: 20px;
            margin-top: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-item {
            flex: 1 1 calc(33.333% - 10px);
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-icon {
            font-size: 2rem;
            color: #e28e04;
            margin-right: 15px;
        }

        .contact-info h5 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: #333;
        }

        .contact-info a, .contact-info p {
            color: #555;
        }

        /* Responsive grid layout voor content */
        .about-wrap {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 30px;
        }

        .about-wrap ul {
            padding-left: 20px;
        }

        .about-wrap li {
            list-style: disc;
        }

        /* Knoppen styling */
        .btn {
            display: inline-block;
            padding: 10px 25px;
            background-color: #e28e04;
            color: white;
            border-radius: 25px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #c17d03;
        }

        .btn.style1 {
            margin-top: 20px;
            text-align: center;
        }

        /* Afbeeldingen */
        img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Responsive design voor mobiel */
        @media (max-width: 768px) {
            .contact-item {
                flex: 1 1 100%;
            }

            .breadcrumb-wrap h1 {
                font-size: 2rem;
            }

            .breadcrumb-menu li {
                font-size: 1rem;
            }
        }
        </style>

    <div class="content-wrapper">
        <div class="breadcrumb-wrap bg-f br-4">
            <div class="overlay op-8 bg-downriver"></div>
            <div class="container">
                <div class="breadcrumb-title">
                    <h1 style="color: white">Rijschool Zwolle: Autorijschool Assendorp</h1>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home</a></li>
                        <li>Rijschool Zwolle</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="about-wrap style1 ptb-100">
            <div class="container">
                <h2>Autorijschool Assendorp: De Beste Rijschool in Zwolle</h2>
                <p>Ben je op zoek naar een betrouwbare rijschool in Zwolle? Bij Autorijschool Assendorp staan we klaar om jou op een professionele manier te helpen je rijbewijs te halen. Met ervaren instructeurs, flexibele lestijden en betaalbare rijlespakketten, bieden we alles wat je nodig hebt om zelfverzekerd en veilig de weg op te gaan.</p>

                <h2>Waarom Kiezen voor Autorijschool Assendorp in Zwolle?</h2>
                <ul>
                    <li><strong>Ervaren Instructeurs:</strong> Onze gediplomeerde rijinstructeurs hebben jarenlange ervaring in het helpen van studenten bij het behalen van hun rijbewijs. We zorgen ervoor dat je zowel theorie als praktijk goed onder de knie krijgt.</li>
                    <li><strong>Flexibele Rijlessen:</strong> Wij begrijpen dat iedereen een drukke agenda heeft. Daarom bieden we flexibele lestijden aan, zodat je je rijlessen kunt inplannen wanneer het jou uitkomt.</li>
                    <li><strong>Persoonlijke Begeleiding:</strong> Bij ons krijg je persoonlijke aandacht en begeleiding, zodat je stap voor stap jouw rijvaardigheden kunt ontwikkelen op je eigen tempo.</li>
                    <li><strong>Betaalbare Rijlespakketten:</strong> We bieden verschillende rijlespakketten aan die passen bij jouw behoeften en budget. Of je nu beginner bent of op zoek bent naar opfriscursussen, wij hebben een pakket voor jou.</li>
                </ul>
                <img src="https://free-images.com/lg/57a2/driving_school_driving_car_0.jpg" alt="Rijschool Zwolle - Autorijschool Assendorp" width="600" height="400">

                <h2>Onze Populaire Rijlespakketten in Zwolle</h2>
                <p>Bij Autorijschool Assendorp kun je kiezen uit diverse pakketten, afhankelijk van jouw leerbehoeften:</p>
                <ul>
                    <li><strong>Standaard Rijlessen:</strong> Voor iedereen die op een ontspannen manier wil leren rijden, bieden we standaard rijlessen aan. Deze lessen zijn ontworpen om jou alle basisprincipes van veilig rijden te leren.</li>
                    <li><strong>Intensieve Rijcursussen:</strong> Wil je je rijbewijs snel halen? Onze intensieve cursussen zorgen voor een versnelde leerervaring waarbij je in korte tijd alle vaardigheden leert die je nodig hebt.</li>
                    <li><strong>Opfriscursussen:</strong> Als je al een rijbewijs hebt maar je niet meer zo zeker voelt achter het stuur, bieden we opfriscursussen aan om je zelfvertrouwen en vaardigheden te vergroten.</li>
                </ul>

                <h2>Contact en Locatie van Autorijschool Assendorp in Zwolle</h2>
                <p>Neem vandaag nog contact met ons op voor meer informatie of om je direct in te schrijven voor een rijlespakket.</p>

                <div class="contact-box-wrap">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-phone-line"></i>
                        </span>
                        <div class="contact-info">
                            <h5>Telefoon</h5>
                            <a href="tel:31642255956">(+31) 6 422 55 956</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-mail-send-line"></i>
                        </span>
                        <div class="contact-info">
                            <h5>Email</h5>
                            <a href="mailto:info@autorijschoolassendorp.nl">info@autorijschoolassendorp.nl</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-map-pin-line"></i>
                        </span>
                        <div class="contact-info">
                            <h5>Adres</h5>
                            <p>Assendorperdijk 128, 8012 EJ Zwolle</p>
                        </div>
                    </div>
                </div>

                <h2>Wat Onze Studenten Zeggen</h2>
                <p>Lees de ervaringen van onze studenten en ontdek waarom wij de beste rijschool in Zwolle zijn.</p>
                <a href="/#referenties" class="btn style1">Bekijk Getuigenissen</a>

                <h2>Schrijf Je Vandaag Nog In!</h2>
                <p>Bij Autorijschool Assendorp helpen we jou om een veilige en zelfverzekerde bestuurder te worden. Neem contact met ons op voor meer informatie of schrijf je direct in voor rijlessen bij de beste rijschool in Zwolle!</p>
                <a href="/#aanmelden" class="btn style1">Begin met Lessen</a>
            </div>
        </section>
    </div>
@endsection
