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
                            <a href="#"><strong>Blog News</strong></a>
                        </div>
                    </div>

                    <div class="col-9  text-right">

                        <span class="d-inline-block d-lg-none"><a href="#"
                                class=" site-menu-toggle js-menu-toggle py-5 "><span
                                    class="icon-menu h3 text-black"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="#" class="nav-link">Home</a></li>
                                <li><a href="#berita" class="nav-link">Berita Terbaru</a></li>
                                <li><a href="#category" class="nav-link">Category</a></li>
                                <li><a href="#tentang" class="nav-link">Tentang Kami</a></li>
                                <li><a href="#contact-section" class="nav-link">Hubungi Kami</a></li>
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
                    <div class="col-lg-10 text-center mt-lg-4">
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
                            <div class="d-flex align-items-md-start">
                                <div class="img"><img src="{{ asset('frontend/images/img_1.jpg') }}"
                                        class="img-fluid" alt="Image"></div>
                                <div class="text">
                                    <h3><a href="#">Berita Terpopuler</a></h3>
                                    <a href="#" class="category">One Piece</a>
                                    <p>One Piece adalah sebuah seri manga Jepang yang ditulis dan diilustrasikan oleh
                                        Eiichiro Oda. Manga ini telah dimuat di majalah Weekly Shōnen Jump milik
                                        Shueisha sejak tanggal 22 Juli 1997, dan telah dibundel menjadi 91 volume
                                        tankōbon.
                                    </p>
                                    <p class="mb-0">
                                        <span class="brand-react h5"></span>
                                        <span class="brand-javascript h5"></span>
                                    </p>
                                    <p class="meta">
                                        <span class="mr-2 mb-2">1hr 24m</span>
                                        <span class="mr-2 mb-2">Advanced</span>
                                        <span class="mr-2 mb-2">Jun 18, 2022</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div class="box small h-100">
                            <div class="d-flex align-items-center mb-2" id="category">
                                <div class="ml-3 ">
                                    <h3 class="">List Category</h3>
                                    @foreach ($data_category as $category)
                                        <ul class="list-unstyled">
                                            <li><a href="#">{{ $category->nama }}</a></li>

                                        </ul>
                                    @endforeach
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
                            <span class="caption" id="berita">Berita</span>
                            <h2>Terbaru</h2>
                        </div>
                    </div>

                    @foreach ($data_post as $data)
                        <div class="col-lg-6">
                            <div class="d-flex tutorial-item mb-4">
                                <div class="img-wrap">
                                    <a href="#"><img src="{{ asset('storage/' . $data->gambar) }}" alt="Image"
                                            class="img-fluid"></a>
                                </div>
                                <div>

                                    <h3><a href="#">{{ $data->judul }}</a></h3>

                                    <p>{{ $data->content }}</p>

                                    <p class="mb-0">
                                        <span class="brand-react h5"></span>
                                        <span class="brand-javascript h5"></span>
                                    </p>
                                    <a href="#" class="category">{{ $data->category->nama }}</a>
                                    <p class="meta">
                                        <span class="mr-2 mb-2">{{ $data->users->name }} : </span>
                                        <span class="mr-2 mb-2">{{ $data->created_at->diffforhumans() }}</span>
                                    </p>



                                    <p><a href="{{ route('detail', $data->id) }}"
                                            class="btn btn-primary custom-btn">View</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

        <div class="site-section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center mb-5">
                        <div class="heading">
                            <span class="caption">Biodata</span>
                            <h2>Anggota</h2>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    @foreach ($data_penulis as $penulis)
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="testimonial-2">
                                <h3 class="h5">{{ $penulis->jabatan }}</h3>
                                <div>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star text-warning"></span>
                                    <span class="icon-star-o text-warning"></span>
                                </div>
                                <blockquote class="mb-4">
                                    <p>{{ $penulis->biografi }}</p>
                                </blockquote>
                                <div class="d-flex v-card align-items-center">
                                    <img src="{{ asset('storage/' . $penulis->gambar) }}" alt="Image"
                                        class="img-fluid mr-3">
                                    <div class="author-name">
                                        <span class="d-block">{{ $penulis->penulis }}</span>
                                        <span>{{ $penulis->jabatan }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>




        <div class="site-section bg-light" id="contact-section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 mb-5">

                        <form action="{{ route('tambah-contact') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="Nama depam"
                                        name="nama_depan">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nama belakang"
                                        name="nama_belakang">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="pesan" id="" class="form-control" placeholder="Masukkan pesan anda disini." cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 mr-auto">
                                    <button class="btn btn-primary btn-block" type="submit">Simpan Pesan</button>
                                </div>

                            </div>
                        </form>


                    </div>
                    <div class="col-lg-4 ml-auto">
                        <div class="bg-white p-3 p-md-5">
                            <h3 class="text-black mb-4">Hubungi Kami</h3>
                            <ul class="list-unstyled footer-link">
                                <li class="d-block mb-3">
                                    <span class="d-block text-black">Alamat:</span>
                                    <span>Jl Abdul DG Sirua, Makassar Indonesia</span>
                                </li>
                                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>0822
                                        92209848</span></li>
                                <li class="d-block mb-3"><span
                                        class="d-block text-black">Email:</span><span>Blognews@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="site-footer">
            <div class="container">

                <div class="heading text-center m-auto">

                    <h2 id="tentang">Tentang Kami</h2>
                </div>
                <p class="text-center row-8">Kami adalah salah satu penyedia layanan terbaik & ini akan membantu
                    Anda
                    mencari berita
                    terupdate
                    yang bagus dengan cara termudah dan ini adalah salah satu cara terbaik dan tepat untuk yang
                    sesuai untuk Anda.</p>



                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5 text-center">
                            <p>Copyright &copy; 2022 <a href="">Blog News</a>
                            <ul class="list-unstyled social text-center">
                                <li><a href="#"><span class="icon-facebook"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            </ul>

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
