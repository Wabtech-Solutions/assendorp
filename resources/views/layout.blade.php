<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/dizu/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2023 13:19:36 GMT -->



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

        <header class="header-wrap style1">
            <div class="header-top">
                <button type="button" class="close-sidebar">
                    <i class="ri-close-fill"></i>
                </button>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="header-top-left">
                                <ul class="contact-info list-style">
                                    <li><i class="flaticon-call"></i> <a href="tel:+31642255956">(+31) 6 42 25 59 56</a>
                                    </li>
                                    <li><i  class="flaticon-envelope"></i> <a
                                            href="mailto:info@autorijschoolassendorp.nl"><span
                                                class="__cf_email__"
                                                data-cfemail="82eae7eeeeedc2e6ebf8f7ace1edef">info@autorijschoolassendorp.nl</span></a>
                                    </li>
                                    <li><i class="flaticon-location-1"></i>
                                        <p>Assendorperdijk 128, 8012 EJ Zwolle</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header-bottom">
                    <div class="mobile-bar-wrap">
                        {{-- <div class="mobile-sidebar">
                            <i class="ri-menu-4-line"></i>
                        </div> --}}
                        <div class="mobile-menu xl-none">
                            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
                            <img style="width: 140px" src="/assets/img/ARA/logo.webp" alt="Autorijschool Assendorp">
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close xl-none">
                                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                            </div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">

                                    <a href="/" class="nav-link active">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/over" class="nav-link">
                                        Over ons
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/#PakketA" class="nav-link">
                                        Pakketten
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/#diversen" class="nav-link">
                                        Diversen
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="/#refereties" class="nav-link">Referenties</a>
                                </li>
                            </ul>

                                <div class="header-btn">
                                    <a href="/contact" class="btn style1">Contact</a>
                                </div>
                            </div>
                        </div>
                    </nav>

                </div>
                <div class="search-area">
                    <div class="container">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" placeholder="Search Here" autofocus>
                            </div>
                        </form>
                        <button type="button" class="close-searchbox">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        </header>

@yield('content')


        <footer class="footer-wrap pt-100">
            <div class="container">
                <div class="row pb-75">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <a href="/" class="footer-logo">
                                <img src="/assets/img/ARA/logo.webp" alt="Autorijschool Assendorp">
                            </a>
                            <br>
                            <label class="form-check-label" for="gridCheck">
                                <a href="/docs/Alg.-voorwaarden-Autorijschool-Assendorp-10-2018.pdf"
                                    target="_blank" style="color: #D0341D">Algemene voorwaarden</a>
                            </label>
<br>
                            <label class="form-check-label" for="gridCheck">
                            <a href="/docs/Privacy-verklaring.pdf" target="_blank" style="color: #D0341D">privacy
                                policy</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Pagina's</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="/goedkope-rijles-zwolle">
                                        <i class="flaticon-right-arrow-1"></i>
                                        Goedkope rijles Zwolle
                                    </a>
                                </li>
                                <li>
                                    <a href="rijles-zwolle">
                                        <i class="flaticon-right-arrow-1"></i>
                                        Rijles Zwolle
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="flaticon-right-arrow-1"></i>
                                        Rijbewijs halen Zwolle
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="flaticon-right-arrow-1"></i>
                                        Goede rijschool Zwolle
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="flaticon-right-arrow-1"></i>
                                        Snel rijbewijs Zwolle
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Werktijden</h3>
                            <ul class="footer-menu list-style">
                                <div class="parent-container">
                                <div class="container22">
                                    <li>
                                      <p style="color: white; font-size: 13px">Maandag:</p>
                                    </li>
                                    <li>
                                      <p style="color: white; font-size: 13px">Dinsdag:</p>
                                    </li>
                                    <li>
                                      <p style="color: white; font-size: 13px">Woensdag:</p>
                                    </li>
                                    <li>
                                      <p style="color: white; font-size: 13px">Donderdag:</p>
                                    </li>
                                    <li>
                                      <p style="color: white; font-size: 13px">Vrijdag:</p>
                                    </li>
                                  </div>
                                  <div class="container22">
                                <li>
                                    <p style="color: white; font-size: 13px">09:00 - 16:00</p>
                                </li>
                                <li>
                                    <p style="color: white; font-size: 13px">09:00 - 16:00</p>
                                </li>
                                <li>
                                    <p style="color: white; font-size: 13px">09:00 - 13:00</p>
                                </li>
                                <li>
                                    <p style="color: white; font-size: 13px">09:00 - 16:00</p>
                                </li>
                                <li>
                                    <p style="color: white; font-size: 13px">09:00 - 16:00</p>
                                </li>
                            </div>
                        </div>
                                <br>
                                <li>
                                    <p style="color: white; font-size: 13px">Zat- Zon- Feestdagen gesloten</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Contact</h3>
                            <ul class="contact-info list-style">
                                <li>
                                    <span><i class="flaticon-phone-call"></i></span>
                                    <h6>Telefoon</h6>
                                    <a href="tel:0642255956">(+31 ) 6 422 55 956</a>
                                </li>
                                <li>
                                    <span><i class="flaticon-envelope"></i></span>
                                    <h6>Email</h6>
                                    <a href="mailto:info@autorijschoolassendorp.nl">info@autorijschoolassendorp.nl</a>
                                </li>
                                <li>
                                    <span><i class="flaticon-location-1"></i></span>
                                    <h6>Adres</h6>
                                    <p>Assendorperdijk 128
                                        8012 EJ Zwolle</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <div class="container">
                    <p><i class="ri-copyright-line"></i>
                        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <span>Autorijschool Assendorp</span>. Ontwikkeld door <a
                            href="https://wabtech-solutions.nl/" target="_blank">Wabtech-Solutions</a>
                    </p>
                </div>
            </div>
        </footer>




    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/odometer.js"></script>
    <script src="assets/js/fancybox.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/tweenmax.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/31ccdf92d3.js" crossorigin="anonymous"></script>
    <script id="dsq-count-scr" src="//autorijschoolassendorp.disqus.com/count.js" async></script>

</body>

</html>
