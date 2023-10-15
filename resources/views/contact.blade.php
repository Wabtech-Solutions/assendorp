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

        <div class="content-wrapper">
            <div class="breadcrumb-wrap bg-f br-2">
                <div class="overlay op-8 bg-downriver"></div>
                <div class="container">
                    <div class="breadcrumb-title">
                        <h2>Contact</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="/">Home </a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>

            <section class="contact-us-wrap pt-100">
                <div class="container">
                    <div class="row gx-5 pb-100">
                        <div class="col-xl-7 col-lg-7">
                            <div class="contact-form">
                                <div class="content-title style1 mb-20">
                                    <h2>Stuur ons een bericht</h2>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form method="POST" action="/contact" class="form-wrap" id="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Naam" id="name"
                                                    required data-error="Dit veld is verplicht" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" required
                                                    placeholder="Email" data-error="Dit veld is verplicht" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="msg_subject" placeholder="Onderwerp"
                                                    id="msg_subject" required data-error="Dit veld is verplicht" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group v1">
                                                <textarea name="bericht" id="message" placeholder="Bericht" cols="30" rows="10" required
                                                    data-error="Dit veld is verplicht"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-check checkbox style2">
                                                    <input name="gridCheck" value="I agree to the terms and privacy policy."
                                                        class="form-check-input" type="checkbox" id="gridCheck" required />
                                                    <label class="form-check-label" for="gridCheck">
                                                        Ik accepteer de
                                                        <a href="/docs/Alg.-voorwaarden-Autorijschool-Assendorp-10-2018.pdf"
                                                            target="_blank">Algemene voorwaarden</a>
                                                        en
                                                        <a href="/docs/Privacy-verklaring.pdf" target="_blank">privacy
                                                            policy</a>.
                                                    </label>
                                                    <div class="help-block with-errors gridCheck-error"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn style1 w-100 d-block">
                                                Verstuur bericht
                                            </button>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="contact-box-wrap">
                                <div class="content-title style1 mb-30">
                                    <span>For Any Inquiry Talk With Us</span>
                                    <h2>Contact Details</h2>
                                </div>
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="ri-phone-line"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h5>Call Now</h5>
                                        <a href="tel:44789289528790">+44 7892 8952 8790</a>
                                        <a href="tel:44789289522345">+44 7892 8952 2345</a>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="ri-mail-send-line"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h5>Email</h5>
                                        <a
                                            href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#0d65686161624d69647778236e6260"><span
                                                class="__cf_email__"
                                                data-cfemail="95fdf0f9f9fad5f1fcefe0bbf6faf8">[email&#160;protected]</span></a>
                                        <a
                                            href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#c4b7b1b4b4abb6b084a0adbeb1eaa7aba9"><span
                                                class="__cf_email__"
                                                data-cfemail="dfacaaafafb0adab9fbbb6a5aaf1bcb0b2">[email&#160;protected]</span></a>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="ri-map-pin-line"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h5>Location</h5>
                                        <p>30 Division Et, 4578. A Denver, CO 80237, USA</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="ri-share-line"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h5>Follow Us</h5>
                                        <ul class="social-profile list-style style1">
                                            <li>
                                                <a target="_blank" href="https://facebook.com/">
                                                    <i class="flaticon-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://twitter.com/">
                                                    <i class="flaticon-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://instagram.com/">
                                                    <i class="flaticon-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://linkedin.com/">
                                                    <i class="flaticon-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endsection
