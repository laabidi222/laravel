@extends('Layout.main')

@push('title')
    <title> Home </title>
@endpush



@section('main-section')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <link href="vendor/aos/aos.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <link href="css\style.css" rel="stylesheet">

    </head>

    <body>
     
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
            <div class="container" data-aos="fade-in">
                <h1>bienvenue</h1>
                <h2>C'est le site d'inscription que j'ai créé pour apprendre. J'espère que vous l'apprécierez</h2>
            </div>
        </section>

        <main id="main">

            <section id="why-us" class="why-us">
                <div class="container">

                    <div class="row">
                        <div class="col-xl-4 col-lg-5" data-aos="fade-up">
                            <div class="content">
                                <h3>c'est quoi le but de ce site</h3>
                                <p>
                                Un site d'inscription en ligne permet aux étudiants potentiels de s'inscrire facilement à tout moment et de n'importe où, ce qui améliore l'accessibilité aux informations sur les programmes et simplifie le processus d'inscription..
                                </p>
                                </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-flex">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                     <div class="icon-box mt-4 mt-xl-0">
                                           <a href="page_facultes"> <!-- Lien vers la page des facultés -->
                                               <i class="bx bx-desktop"></i>
                                                 <h4>Informatique</h4>
                                              <p>En a des facultés privées pour le domaine informatique</p>
                                           </a>
                                      </div>
                                 </div>

                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up"
                                        data-aos-delay="200">
                                        <div class="icon-box mt-4 mt-xl-0">
                                        <a href="page_facultes1">
                                            <i class="bx bx-heart"></i>
                                            <h4>Santé</h4>
                                            <p>En a des faculté privé pour la domaine Santé </p>
                                      </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up"
                                        data-aos-delay="300">
                                        <div class="icon-box mt-4 mt-xl-0">
                                        <a href="page_facultes2">
                                            <i class="bx bx-money"></i>
                                            <h4>Gestion</h4>
                                            <p>En a des faculté privé pour les domaine de gestion .</p></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            
                <footer id="footer">

                    <div class="container d-lg-flex py-4">

                        <div class="me-lg-auto text-center text-lg-start">
                            <div class="copyright">
                                &copy; Copyright <strong><span>Tashi</span></strong>. All Rights Reserved
                            </div>
                    
                        </div>
                        <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                          
                        </div>
                    </div>
                </footer>

                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                        class="bi bi-arrow-up-short"></i></a>

                <script src="vendor/aos/aos.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="vendor/glightbox/js/glightbox.min.js"></script>
                <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
                <script src="vendor/swiper/swiper-bundle.min.js"></script>
                <script src="vendor/php-email-form/validate.js"></script>

                <script src="js\main.js"></script>

    </body>

    </html>
@endsection
