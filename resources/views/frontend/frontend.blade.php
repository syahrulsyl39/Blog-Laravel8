<!doctype html>
<html lang="en">

<head>
    <title>Blog News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="fonts/brand/style.css">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>

<body>


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar light site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3">
                        <div class="site-logo">
                            <a href="index.html"><strong>Blog News</strong></a>
                        </div>
                    </div>

                    <div class="col-9  text-right">

                        <span class="d-inline-block d-lg-none"><a href="#"
                                class=" site-menu-toggle js-menu-toggle py-5 "><span
                                    class="icon-menu h3 text-black"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                                <li><a href="blog.html" class="nav-link">Berita Terbaru</a></li>
                                <li><a href="testimonials.html" class="nav-link">Program</a></li>
                                <li><a href="tutorials.html" class="nav-link">Tentang Kami</a></li>
                                <li><a href="about.html" class="nav-link">Hubungi Kami</a></li>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>


        <div class="site-section-cover overlay"
            style="background-image: url('{{ asset('frontend/images/hero_bg.jpg') }}');">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1>Informasi <strong>Terbaik</strong> Saat <strong>Ini</strong></h1>
                        <div class="col-lg-7 mb-4 mb-lg-0 m-auto">
                            <form action="#" class="d-flex search-form">
                                <span class="icon-"></span>
                                <input type="search" class="form-control mr-2" placeholder="Search">
                                <input type="submit" class="btn btn-primary px-4" value="Search">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light pb-0">
            <div class="container">
                <div class="row align-items-stretch overlap">
                    <div class="col-lg-8">
                        <div class="box h-100">
                            <div class="d-flex align-items-center">
                                <div class="img"><img src="{{ asset('frontend/images/img_1.jpg') }}"
                                        class="img-fluid" alt="Image"></div>
                                <div class="text">
                                    <h3><a href="#">Berita Terpanas</a></h3>
                                    <a href="#" class="category">Tutorial</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quidem totam
                                        exercitationem eveniet blanditiis nulla, et possimus, itaque alias maxime!</p>
                                    <p class="mb-0">
                                        <span class="brand-react h5"></span>
                                        <span class="brand-javascript h5"></span>
                                    </p>
                                    <p class="meta">
                                        <span class="mr-2 mb-2">1hr 24m</span>
                                        <span class="mr-2 mb-2">Advanced</span>
                                        <span class="mr-2 mb-2">Jun 18, 2020</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box small h-100">
                            <div class="d-flex align-items-center mb-2">
                                <div class="img"><img src="{{ asset('frontend/images/img_2.jpg') }}"
                                        class="img-fluid" alt="Image"></div>
                                <div class="text">
                                    <a href="#" class="category">Tutorial</a>
                                    <h3><a href="#">Learning React Native</a></h3>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="img"><img src="{{ asset('frontend/images/img_3.jpg') }}"
                                        class="img-fluid" alt="Image"></div>
                                <div class="text">
                                    <a href="#" class="category">Tutorial</a>
                                    <h3><a href="#">Learning React Native</a></h3>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="img"><img src="{{ asset('frontend/images/img_4.jpg') }}"
                                        class="img-fluid" alt="Image"></div>
                                <div class="text">
                                    <a href="#" class="category">Tutorial</a>
                                    <h3><a href="#">Learning React Native</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading mb-4">
                            <span class="caption">Tutorial Courses</span>
                            <h2>Choose Course</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch">
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-adobeillustrator"></span>
                            <h3>Illustrator</h3>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-adobephotoshop"></span>
                            <h3>Photoshop</h3>
                        </a>
                    </div>

                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-angular"></span>
                            <h3>Angular</h3>
                        </a>
                    </div>

                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-javascript"></span>
                            <h3>JavaScript</h3>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-react"></span>
                            <h3>React</h3>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="course">
                            <span class="wrap-icon brand-vue-dot-js"></span>
                            <h3>Vue</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}



        <div class="site-section bg-light">
            <div class="container">
                {{-- <div class="row mb-5 align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <form action="#" class="d-flex search-form">
                            <span class="icon-"></span>
                            <input type="search" class="form-control mr-2" placeholder="Search subjects">
                            <input type="submit" class="btn btn-primary px-4" value="Search">
                        </form>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <div class="d-inline-flex align-items-center ml-auto">
                            <span class="mr-4">Share:</span>
                            <a href="#" class="mx-2 social-item"><span class="icon-facebook"></span></a>
                            <a href="#" class="mx-2 social-item"><span class="icon-twitter"></span></a>
                            <a href="#" class="mx-2 social-item"><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-12 text-center mb-3">
                        <div class="heading mb-4">
                            <span class="caption">Berita</span>
                            <h2>Terpopuler</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex tutorial-item mb-4">
                            <div class="img-wrap">
                                <a href="#"><img src="{{ asset('frontend/images/img_1.jpg') }}" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div>
                                <h3><a href="#">Learning React Native</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam.
                                    Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>

                                <p class="mb-0">
                                    <span class="brand-react h5"></span>
                                    <span class="brand-javascript h5"></span>
                                </p>
                                <p class="meta">
                                    <span class="mr-2 mb-2">1hr 24m</span>
                                    <span class="mr-2 mb-2">Advanced</span>
                                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                                </p>

                                <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="d-flex tutorial-item mb-4">
                            <div class="img-wrap">
                                <a href="#"><img src="{{ asset('frontend/images/img_1.jpg') }}" alt="Image"
                                        class="img-fluid"></a>
                            </div>
                            <div>
                                <h3><a href="#">Learning React Native</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam tempore, saepe numquam.
                                    Doloremque culpa tenetur facere quisquam, animi illum possimus!</p>

                                <p class="mb-0">
                                    <span class="brand-react h5"></span>
                                    <span class="brand-javascript h5"></span>
                                </p>
                                <p class="meta">
                                    <span class="mr-2 mb-2">1hr 24m</span>
                                    <span class="mr-2 mb-2">Advanced</span>
                                    <span class="mr-2 mb-2">Jun 18, 2020</span>
                                </p>

                                <p><a href="tutorial-single.html" class="btn btn-primary custom-btn">View</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center mb-5">
                        <div class="heading">
                            <span class="caption">Biodata</span>
                            <h2>Para Penulis</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <h3 class="h5">Excellent Teacher!</h3>
                            <div>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star-o text-warning"></span>
                            </div>
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                    eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="{{ asset('frontend/images/person_1.jpg') }}" alt="Image"
                                    class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Mike Fisher</span>
                                    <span>Owner, Ford</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <h3 class="h5">Best Video Tutorial!</h3>
                            <div>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star-o text-warning"></span>
                            </div>
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                    eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="{{ asset('frontend/images/person_2.jpg') }}" alt="Image"
                                    class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Jean Stanley</span>
                                    <span>Traveler</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="testimonial-2">
                            <h3 class="h5">Easy to Understand!</h3>
                            <div>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star-o text-warning"></span>
                            </div>
                            <blockquote class="mb-4">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                    eveniet veniam. Ipsam, nam, voluptatum"</p>
                            </blockquote>
                            <div class="d-flex v-card align-items-center">
                                <img src="{{ asset('frontend/images/person_3.jpg') }}" alt="Image"
                                    class="img-fluid mr-3">
                                <div class="author-name">
                                    <span class="d-block">Katie Rose</span>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. </p>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Resources</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Support</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="footer-heading mb-4">Company</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>

                                Copyright &copy; 2022 <a href="">Syahrul Saleh</a>


                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
