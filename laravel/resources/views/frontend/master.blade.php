<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SPKM FTUnsoed</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="{{ asset('/favicon.png') }}" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
	<!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    
    <!-- AOS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url({{url('frontend/img/teknik.jpg')}});">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="{{ asset('/logo.png') }}" alt="logo">
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	SPKM<br>
            	FTUnsoed
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                Sistem Poin Kredit Mahasiswa.
                <br> Fakultas Teknik Universitas Jenderal Soedirman.
            </p>
            <a href="{{ route('login') }}" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-blue">Login</a>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Fitur SKPM FTUnsoed</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{ asset('frontend/img/smart-protect-1.jpg') }}" alt="Anti-spam" class="mx-auto">
                <h4>Pengelolaan Poin Kegiatan Mahasiswa</h4>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{ asset('frontend/img/smart-protect-1.jpg') }}" alt="Anti-spam" class="mx-auto">
                <h4>Pengelolaan Data Kegiatan Mahasiswa</h4>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{ asset('frontend/img/smart-protect-1.jpg') }}" alt="Anti-spam" class="mx-auto">
                <h4>Pengelolaan Sertifikat Laporan Kegiatan</h4>
            </div>
        </div>
    </div>
    <!-- contact us -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-9 align-self-center text-white text-center text-md-right my-2">
                    Hubungi Kami :
                </div>
                <div class="col-md-3 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- AOS -->
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script>
      AOS.init({
      });
    </script>
</body>

</html>