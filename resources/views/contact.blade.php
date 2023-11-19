

@extends('layout')
@section('content')
    <!DOCTYPE html>
    <html lang="zxx">

    <!-- Mirrored from templates.hibootstrap.com/dizu/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2023 13:19:36 GMT -->


    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_KEY') }}"></script>

		             <script type="text/javascript">
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = code
                  }
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){ document.getElementById("valid").value = "1234567"; return true; } else{ alert("De captcha was helaas fout ingevuld"); location.reload(); document.contactForm.action = "/"; window.location.replace("/contact");
 return false; } } function removeSpaces(string){ return string.split(' ').join(''); }
             </script>

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
        <title>Contact - Autorijschool Assendorp</title>
        <meta name="description" content="Contacteer Autorijschool Assendorp ✓ Personlijke begelijding ✓ Gratis intake ✓ Goedkoop lessen ✓ Betaal in termijnen ">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body  onload="Captcha()">

        <div class="content-wrapper">
            <div class="breadcrumb-wrap bg-f br-2">
                <div class="overlay op-8 bg-downriver"></div>
                <div class="container">
                    <div class="breadcrumb-title">
                        <h1 style="color: white">Contact</h1>
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
                                <form method="POST" action="/contact" class="form-wrap" id="contactForm" name="contactForm" onsubmit="ValidCaptcha();">
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


                                        <table style="text-align: center;">
                                            <tbody>
                                              <tr>
                                                <td>
                                                  Bevestig dat u geen robot bent:<br>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <input type="text" id="mainCaptcha" readonly="" onmousedown="return false" onselectstart="return false">
                                                  <input type="button" id="refresh" value="Niewe code" onclick="Captcha();">
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>
                                                  <p style="font-size: 10px;">Typ de tekst over zonder spaties</p>
                                                  <input type="text" id="txtInput">
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>

                                        <div class="col-md-12">
                                            <div class="form-group v1">
                                                <input name="valid" id="valid" type="text" value="12" cols="1" rows="1" required hidden>
                                                <div class="help-block with-errors">
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
                                    <span>Of nem contact met ons op</span>
                                    <h2>Contact informatie</h2>
                                </div>
                                <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="ri-phone-line"></i>
                                    </span>
                                    <div class="contact-info">
                                        <h5>Telefoon</h5>
                                        <a href="tel:31642255956">(+31 ) 6 422 55 956</a>
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
                                        <p>Assendorperdijk 128 8012 EJ Zwolle</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script type="text/javascript">
            $('#contactUSForm').submit(function(event) {
                event.preventDefault();

                grecaptcha.ready(function() {
                    grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_KEY') }}", {action: 'subscribe_newsletter'}).then(function(token) {
                        $('#contactForm').prepend('<input type="hidden" name="token" value="' + token + '">');
                        $('#contactForm').unbind('submit').submit();
                    });;
                });
            });
        </script>
    @endsection
