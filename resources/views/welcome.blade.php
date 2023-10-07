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
                                        <p>Dat is wat al 20 jaar door mensen wordt gezegd. Autorijschool is een betrouwbare
                                            rijschool waar persoonlijke ondersteuning op 1 staat. Bij autorijschool
                                            assendorp in Zwolle haal je binnen No-Time je rijbewijs!</p>
                                        <p>✓ Personlijke begelijding ✓ Gratis intake ✓ Goedkoop lessen</p>
                                        <a href="/over-ons" class="btn style1">Meer info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="book-course-wrap style1">
                <div class="container">
                    <div class="book-course-form">
                        <h4>Begin met lessen</h4>
                        <form action="#" class="booking-form">
                            <div class="form-group">
                                <label for="name">Volledige Naam*</label>
                                <input type="text" id="name" placeholder="Naam" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email*</label>
                                <input type="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="course-plan">Kies een pakket</label>
                                <select name="course-plan" id="course-plan">
                                    <option value="0">Ik weet het nog niet</option>
                                    <option value="A">Pakket A</option>
                                    <option value="B">Pakket B</option>
                                    <option value="C">Pakket C</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Datum voor intake (telefonisch)</label>
                                <input type="date" id="date" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn style1 w-100 d-block">Plan intake</button>
                            </div>
                        </form>
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
                                    <p>There are many variations of passages of Lorem Ipsum amet avoilble but majority have
                                        suffered alteration in some form, by injected humur or randomise words which don't
                                        sure amet sit dolor quras solo dolor.</p>
                                </div>
                                <div class="ceo-message">
                                    <p>"Lorem ipsum dolor sit amet consec tetur adiping slicing elit. Archite tempo ribus
                                        veniam placeat provident ipsam amet sit"</p>
                                    <h6>Rob, Eigenaar &amp; Instructeur</h6>
                                </div>
                                <a href="about.html" class="btn style1">Lees meer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


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
                                <img src="assets/img/courses/course-4.jpg" alt="Image">
                            </div>
                            <span class="label">Gratis intake</span>
                            <div class="course-info">
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>30 Lessen</li>
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>Inclusief 1e
                                        examen</li>
                                </ul>
                                <h3><a href="course-details.html">Pakket A</a></h3>
                                <p>Meld je aan via onderstaande button, er wordt dan spoedig contact met je opgenomen.</p>
                                <div class="course-author-wrap">
                                    <div class="course-author">
                                        <span class="course-author-img">
                                            <img src="assets/img/team/instructor-4.jpg" alt="Image">
                                        </span>
                                        <a href="team-details.html">Rob</a>
                                    </div>
                                    <p class="course-price">€ 1992,-</p>
                                </div>
                                <a class="btn style2" href="course-details.html">
                                    Meld je aan <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                        <div class="course-card style2">
                            <div class="course-img">
                                <img src="assets/img/courses/course-4.jpg" alt="Image">
                            </div>
                            <span class="label">Gratis intake</span>
                            <div class="course-info">
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>30 Lessen</li>
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>Inclusief 1e
                                        examen</li>
                                </ul>
                                <h3><a href="course-details.html">Pakket A</a></h3>
                                <p>Meld je aan via onderstaande button, er wordt dan spoedig contact met je opgenomen.</p>
                                <div class="course-author-wrap">
                                    <div class="course-author">
                                        <span class="course-author-img">
                                            <img src="assets/img/team/instructor-4.jpg" alt="Image">
                                        </span>
                                        <a href="team-details.html">Rob</a>
                                    </div>
                                    <p class="course-price">€ 1992,-</p>
                                </div>
                                <a class="btn style2" href="course-details.html">
                                    Meld je aan <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                        <div class="course-card style2">
                            <div class="course-img">
                                <img src="assets/img/courses/course-4.jpg" alt="Image">
                            </div>
                            <span class="label">Gratis intake</span>
                            <div class="course-info">
                                <ul class="course-metainfo list-style">
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>30 Lessen</li>
                                    <li><i class="fa-regular fa-circle-check" style="color: #6c1a14;"></i>Inclusief 1e
                                        examen</li>
                                </ul>
                                <h3><a href="course-details.html">Pakket A</a></h3>
                                <p>Meld je aan via onderstaande button, er wordt dan spoedig contact met je opgenomen.</p>
                                <div class="course-author-wrap">
                                    <div class="course-author">
                                        <span class="course-author-img">
                                            <img src="assets/img/team/instructor-4.jpg" alt="Image">
                                        </span>
                                        <a href="team-details.html">Rob</a>
                                    </div>
                                    <p class="course-price">€ 1992,-</p>
                                </div>
                                <a class="btn style2" href="course-details.html">
                                    Meld je aan <i class="flaticon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="vehicle-wrap bg-concrete">
                <div class="container">
                    <div class="content-title style1 text-center mb-40">
                        <span>De Lesauto</span>
                        <h2>Hiermee ga je lessen</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div style="" class="">
                                <div class="vehicle-card style2">
                                    <div class="vehicle-img">
                                        <img src="https://www.autorijschoolassendorp.nl/wp-content/uploads/2020/11/auto-768x576.jpg"
                                            alt="Image">
                                    </div>
                                    <div class="vehicle-info">
                                        <div class="row justify-content-center">
                                        <div class="col-md-7">
                                        <h3><a href="vehicle-details.html">Peugeot 208 (2020) </a></h3>
                                        <p><i class="fa-solid fa-fan" style="color: #6c1a14;"></i> Airco Climate control
                                            <br>
                                            <i class="fa-solid fa-route" style="color: #6c1a14;"></i> Navigatie
                                            <br>
                                            <i class="fa-solid fa-gauge" style="color: #6c1a14;"></i> Cruisecontrol
                                            <br>
                                            <i class="fa-solid fa-camera" style="color: #6c1a14;"></i> Achteruitrij-camera
                                            <br>
                                            <i class="fa-solid fa-cube" style="color: #6c1a14;"></i> 3D Dashboard
                                            <br>
                                            <i class="fa-solid fa-gears" style="color: #6c1a14;"></i> Handgeschakeld
                                        </p>
                                    </div>
                                </div>
                                        <a href="vehicle-details.html" class="btn style2">Plan je rijles<i
                                                class="flaticon-right-arrow-1"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="cta-wrap style1 bg-downriver ptb-100">
                <div class="container">
                    <div class="row align-items-center cta-text">
                        <div class="col-lg-8 col-md-7">
                            <div class="content-title">
                                <h2 class="text-white">Start Learning To Drive Today</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 text-end">
                            <a href="course-one.html" class="btn style1">Admission Course</a>
                        </div>
                    </div>
                </div>
            </div>


            <section class="team-wrap pt-100 pb-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                            <div class="section-title style1 text-center mb-40">
                                <span>OUR TEAM</span>
                                <h2>Our Professional Instructor</h2>
                            </div>
                        </div>
                    </div>
                    <div class="team-slider-one owl-carousel">
                        <div class="team-card style2">
                            <div class="team-img">
                                <img src="assets/img/team/team-2.jpg" alt="Image">
                                <ul class="social-profile list-style style1">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://pinterest.com/">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info-wrap">
                                <div class="team-info">
                                    <h3><a href="team-details.html">Mossie Ullrich</a></h3>
                                    <span>Driving Instructor</span>
                                </div>
                                <a href="team-details.html" class="team-link"><i
                                        class="flaticon-plus-symbol-button"></i></a>
                            </div>
                            <a href="team-details.html" class="btn style2">Read More <i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                        <div class="team-card style2">
                            <div class="team-img">
                                <img src="assets/img/team/team-3.jpg" alt="Image">
                                <ul class="social-profile list-style style1">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://pinterest.com/">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info-wrap">
                                <div class="team-info">
                                    <h3><a href="team-details.html">Jackie Schmeler</a></h3>
                                    <span>Senior Instructor</span>
                                </div>
                                <a href="team-details.html" class="team-link"><i
                                        class="flaticon-plus-symbol-button"></i></a>
                            </div>
                            <a href="team-details.html" class="btn style2">Read More <i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                        <div class="team-card style2">
                            <div class="team-img">
                                <img src="assets/img/team/team-4.jpg" alt="Image">
                                <ul class="social-profile list-style style1">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://pinterest.com/">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info-wrap">
                                <div class="team-info">
                                    <h3><a href="team-details.html">Benett Watson</a></h3>
                                    <span>Defensive Instructor</span>
                                </div>
                                <a href="team-details.html" class="team-link"><i
                                        class="flaticon-plus-symbol-button"></i></a>
                            </div>
                            <a href="team-details.html" class="btn style2">Read More <i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                        <div class="team-card style2">
                            <div class="team-img">
                                <img src="assets/img/team/team-1.jpg" alt="Image">
                                <ul class="social-profile list-style style1">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://pinterest.com/">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info-wrap">
                                <div class="team-info">
                                    <h3><a href="team-details.html">Erik Ondricka</a></h3>
                                    <span>Senior Instructor</span>
                                </div>
                                <a href="team-details.html" class="team-link"><i
                                        class="flaticon-plus-symbol-button"></i></a>
                            </div>
                            <a href="team-details.html" class="btn style2">Read More <i
                                    class="flaticon-right-arrow"></i></a>
                        </div>
                        <div class="team-card style2">
                            <div class="team-img">
                                <img src="assets/img/team/team-5.jpg" alt="Image">
                                <ul class="social-profile list-style style1">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://pinterest.com/">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-info-wrap">
                                <div class="team-info">
                                    <h3><a href="team-details.html">Savannah Ashley</a></h3>
                                    <span>Assistant Driver</span>
                                </div>
                                <a href="team-details.html" class="team-link"><i
                                        class="flaticon-plus-symbol-button"></i></a>
                            </div>
                            <a href="team-details.html" class="btn style2">Read More <i
                                    class="flaticon-right-arrow"></i></a>
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
                                            <span class="odometer" data-count="6500"></span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Learn From Here</p>
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
                                            <span class="odometer" data-count="100"></span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Top Instructors</p>
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
                                            <span class="odometer" data-count="550"></span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Current Student</p>
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
                                            <span class="odometer" data-count="940"></span>
                                            <span class="target">+</span>
                                        </h2>
                                        <p>Own Vehicles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="testimonial-wrap ptb-100">
                <div class="container">
                    <div class="section-title style1 text-center mb-40">
                        <span>CLIENTS FEEDBACK POSTS</span>
                        <h2>What Our Customer Says</h2>
                    </div>
                    <div class="testimonial-slider-two owl-carousel">
                        <div class="testimonial-card style1">
                            <p class="client-quote">
                                Nunc quam arcu, pretium quis quam sed aoreet efficitur liuam volutpat. lobortis sem
                                consequat consequat impe nulla viverraut loremut tetur diam nunc bibendum impea Lorem ipsum
                                dolor sit amet, consec isicing elit.
                            </p>
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="assets/img/testimonials/client-1.jpg" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Hayleym Pheobe</h3>
                                    <span>Co-Founder, Olley Inc</span>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <p class="client-quote">
                                Nunc quam arcu, pretium quis quam sed aoreet efficitur liuam volutpat. lobortis sem
                                consequat consequat impe nulla viverraut loremut tetur diam nunc bibendum impea Lorem ipsum
                                dolor sit amet, consec isicing elit.
                            </p>
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="assets/img/testimonials/client-2.jpg" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Jim Morison</h3>
                                    <span>Enterpreneur</span>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <p class="client-quote">
                                Nunc quam arcu, pretium quis quam sed aoreet efficitur liuam volutpat. lobortis sem
                                consequat consequat impe nulla viverraut loremut tetur diam nunc bibendum impea Lorem ipsum
                                dolor sit amet, consec isicing elit.
                            </p>
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="assets/img/testimonials/client-3.jpg" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Alex Cruis</h3>
                                    <span>CEO, Brandix ltd</span>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <p class="client-quote">
                                Nunc quam arcu, pretium quis quam sed aoreet efficitur liuam volutpat. lobortis sem
                                consequat consequat impe nulla viverraut loremut tetur diam nunc bibendum impea Lorem ipsum
                                dolor sit amet, consec isicing elit.
                            </p>
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="assets/img/testimonials/client-4.jpg" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Harry Jackson</h3>
                                    <span>Founder, IBAC</span>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <p class="client-quote">
                                Nunc quam arcu, pretium quis quam sed aoreet efficitur liuam volutpat. lobortis sem
                                consequat consequat impe nulla viverraut loremut tetur diam nunc bibendum impea Lorem ipsum
                                dolor sit amet, consec isicing elit.
                            </p>
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="assets/img/testimonials/client-5.jpg" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Martina Haris</h3>
                                    <span>Enterpreneur</span>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card style1">
                            <p class="client-quote">
                                Nunc quam arcu, pretium quis quam sed aoreet efficitur liuam volutpat. lobortis sem
                                consequat consequat impe nulla viverraut loremut tetur diam nunc bibendum impea Lorem ipsum
                                dolor sit amet, consec isicing elit.
                            </p>
                            <div class="client-info-wrap">
                                <div class="client-img">
                                    <img src="assets/img/testimonials/client-6.jpg" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Anjelic Lisa</h3>
                                    <span>Founder, Lexamd Inc</span>
                                </div>
                                <div class="quote-icon">
                                    <i class="flaticon-quote"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="blog-wrap pt-100 pb-75 bg-concrete">
                <div class="container">
                    <div class="section-title style1 text-center mb-40">
                        <span>RECENT POSTS</span>
                        <h2>Read Our Latest News</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog-5.jpg" alt="Image">
                                    <p class="blog-date">12 Sep</p>
                                </div>
                                <div class="blog-info">
                                    <ul class="blog-metainfo  list-style">
                                        <li><i class="flaticon-user-1"></i> <a href="posts-by-author.html">Admin</a></li>
                                        <li><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>0
                                            Comment</li>
                                    </ul>
                                    <h3><a href="blog-details-right-sidebar.html">Lighting The Way With Guest Daniel
                                            Stern</a></h3>
                                    <p>It is a long established fact that lorem will be when looking as it sito.</p>
                                    <a href="blog-details-right-sidebar.html" class="btn style2">Read More
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog-4.jpg" alt="Image">
                                    <p class="blog-date">25 Aug</p>
                                </div>
                                <div class="blog-info">
                                    <ul class="blog-metainfo  list-style">
                                        <li><i class="flaticon-user-1"></i> <a href="posts-by-author.html">Admin</a></li>
                                        <li><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>1
                                            Comment</li>
                                    </ul>
                                    <h3><a href="blog-details-right-sidebar.html">How To Safely Road-trip During This
                                            Pandemic</a></h3>
                                    <p>It is a long established fact that lorem will be when looking as it sito.</p>
                                    <a href="blog-details-right-sidebar.html" class="btn style2">Read More
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <img src="assets/img/blog/blog-6.jpg" alt="Image">
                                    <p class="blog-date">22 Aug</p>
                                </div>
                                <div class="blog-info">
                                    <ul class="blog-metainfo  list-style">
                                        <li><i class="flaticon-user-1"></i> <a href="posts-by-author.html">Admin</a></li>
                                        <li><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>0
                                            Comment</li>
                                    </ul>
                                    <h3><a href="blog-details-right-sidebar.html">Why Auto Driving Will Help You To
                                            Pass</a></h3>
                                    <p>It is a long established fact that lorem will be when looking as it sito.</p>
                                    <a href="blog-details-right-sidebar.html" class="btn style2">Read More
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


    </html>
@endsection
