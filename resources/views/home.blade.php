@extends('app')

@section('title', 'Rush Design')

@section('content')

<section id="home">

    <div class="row jumbotron-bg">

        <div class="col-md-6 jumbo-left-bg">

            <div class="jumbo-left">
                <br><br>
                <h6 class="jumbo-subtext">Hi, I'm Fakhrus</h6>
                <h1 class="jumbo-text">Digital Designer</h1>
                <h1 class="jumbo-text">& Programmer</h1>
                <h6 class="jumbo-subtext">from <b>RushDesignProject.com</b></h6>
                <br><br><br>
                <a href="#project" class="button-white">See My Projects</a>
            </div>

        </div>
        
        <div class="col-md-6">
        <img src="{{asset('images/jumbotron.png')}}" alt="jumbotron-img">
        </div>
    </div>

    <div class="row" style="background-color: black;">
        <div class="moving-mouse-holder">
            <div class="mouse">
              <div class="mouse-button">&nbsp;</div>
            </div>
            <div class="text">Scroll Down <br> To Explore More</div>
          </div>
    </div>
        

</section>

<section id="aboutus">

    <div class="row title-div">
        <div class="col-md-6 hidedot">
            .
        </div>
        <div class="col-md-6">
            <h1 class="title">Experience</h1>
            <h1 class="title-stroke">Passion</h1> 
        </div>
    </div>


    <div class="row content-margin">
        <div class="col-md-6">
            <img src="{{asset('images/aboutus.png')}}" alt="aboutus-img">
        </div>

        <div class="col-md-6">
            <h6 class="subtitle">Fakhrus Syakirin Ramadhan</h6>
            <p class="text">Saya seorang Graphic Designer yang hobi mendesain UI UX 
                (User Interface, User Experience) Aplikasi dan Website. Saya 
                juga senang Editing Video Motion Graphic dan Video Effect.
                <br><br>
                Selain itu saya berpengalaman bekerja sebagai Apple iOS 
                Developer dan Android Mobile Application di salah satu 
                perusahaan Software House di Yogyakarta.
                <br><br>
                Saya pernah membangun Startup bernama Inspyro Game 
                Development yang memproduksi game, dan saya juga 
                pernah membangun Startup bernama Ramein.id Aplikasi 
                Pengelolaan Tiket Event dan Event Organizer. 
                <br><br>
                Saat ini saya menjadi Chief Executive Officer di Pola Kreatif
                Perusahaan Pelayanan Jasa Desain dan software IT
                PT Aruziki Digital Inspirasi.</p>
        </div>
    </div>

    <div class="row client-row">

        <div class="col-md-4 client-image">
            <img src="{{asset('images/client1.png')}}" alt="" srcset="">
        </div>

        <div class="col-md-4 client-image">
            <img src="{{asset('images/client2.png')}}" alt="" srcset="">
        </div>

        <div class="col-md-4 client-image">
            <img src="{{asset('images/client3.png')}}" alt="" srcset="">
        </div>

    </div>


</section>

<section id="project">

    <div class="row title-div">
        <div class="col-md-6">
            <h1 class="title">Project</h1>
            <h1 class="title-stroke">Gallery</h1> 
        </div>
        <div class="col-md-6 hidedot">
            .
         </div>
    </div>

    <div>
        <img src="{{asset('images/project.png')}}" alt="project-img">
    </div>

    <div class="content-margin">

    <div class="row">

        <div class="col-md-6">
            <img src="{{asset('images/project_1.png')}}" alt="project1">
        </div>

        <div class="col-md-6">
            <h6 class="subtitle">Santapin Apps</h6>
            <p class="text">Santapin merupakan aplikasi yang berkolaborasi dengan 
                Garuda Indonesia yang membantu penumpang pesawat 
                memesan makanan di area bandara. Makanan dapat 
                diantar ke ruang tunggu pesawat baik sebelum check in 
                maupun di ruang tunggu transit pesawat.</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6 order-md-2">
            <img src="{{asset('images/project_2.png')}}" alt="project2">
        </div>

        <div class="col-md-6 order-md-1">
            <h6 class="subtitle">AVO Store - Avoskin Apps</h6>
            <p class="text">Aplikasi AVO Store adalah aplikasi penjualan dan 
                pendistribusian produk kecantikan / kosmetik milik 
                Avoskin beauty PT AVO Innovation Technology. Aplikasi ini memiliki fitur penjualan 
                produk, pembelian produk, keranjang belanja, 
                pilihan kurir, pembayaran, dan fitur poin.</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6">
            <img src="{{asset('images/project_3.png')}}" alt="project3">
        </div>

        <div class="col-md-6">
            <h6 class="subtitle">Alask Apps</h6>
            <p class="text">Alask merupakan aplikasi konsultasi psikologi via chat 
                maupun video call dengan sistem pembayaran topup saldo 
                untuk berkomunikasi dengan para psikiater. Menu aplikasi ini 
                dikategorikan berdasarkan masalah yang dialami pasien 
                sehingga pasien mendapatkan pelayanan konsultasi 
                dengan tepat.</p>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6 order-md-2">
            <img src="{{asset('images/project_4.png')}}" alt="project4">
        </div>

        <div class="col-md-6 order-md-1">
            <h6 class="subtitle">Looke Cosmetics</h6>
            <p class="text">Looke Cosmetics merupakan perusahaan yang 
                memproduksi produk kecantikan / kosmetik. 
                Desain Web Looke ini merupakan desain 
                web promosi aplikasi looke beauty untuk 
                para calon konsumen yang ingin mencoba 
                produk lipstik menggunakan kamera selfie 
                pada smartphone calon konsumen   .</p>
        </div>

    </div>

    </div>

</section>

<section id="portfolio">

    <div class="row title-div">
            <div class="col-md-6 hidedot">
                .
            </div>
            <div class="col-md-6">
                <h1 class="title">Portfolio</h1>
                <h1 class="title-stroke">Gallery</h1> 
            </div>
    </div>

    <div>
        <img src="{{asset('images/portfolio.png')}}" alt="portfolio-img">
    </div>

    <div class="content-margin">

    <div class="row portfolio-row">
            <div class="col-md-6">
                <img src="{{asset('images/portfolio1.png')}}" alt="portfolio1">
                <h6 class="subtitle">Disc.</h6>
                <p class="text">Disc. merupakan Desain UI UX Aplikasi Pemutar Musik untuk dengan tampilan 
                    simple yang mudah untuk digunakan dan tampilan yang modern serta clean.</p>
            </div>
    
            <div class="col-md-6">
                <img src="{{asset('images/portfolio2.png')}}" alt="portfolio2">
            <h6 class="subtitle">Route!</h6>
                <p class="text">Route! merupakan Desain UI UX Aplikasi pemesanan tiket pesawat, 
                    travel, kapal, bus, dan transportasi lainnya</p>
            </div>
    </div>

    <br>

    <div class="row portfolio-row">
        <div class="col-md-6">
            <img src="{{asset('images/portfolio3.png')}}" alt="portfolio3">
            <h6 class="subtitle">Construct</h6>
            <p class="text">Construct merupakan Desain UI UX Aplikasi
                pencarian tenaga kerja, perusahaan, dan
                rantai pasok konstruksi bangunan.</p>
        </div>

        <div class="col-md-6">
            <img src="{{asset('images/portfolio4.png')}}" alt="portfolio4">
            <h6 class="subtitle">Fit Go</h6>
            <p class="text">Fit Go adalah Desain UI UX Aplikasi Fitness
                Tracker untuk mengukur tingkat aktifitas
                olahraga dan mengukur kalori surplus / defisit</p>
        </div>
    </div>

    <br>

    <div class="row portfolio-row">
        <div class="col-md-6">
            <img src="{{asset('images/portfolio5.png')}}" alt="portfolio5">
            <h6 class="subtitle">Hat Coffee</h6>
            <p class="text">Hat Coffee merupakan Desain UI UX Aplikasi 
                reservasi & pemesanan makanan / minuman
                di suatu kafe dan restoran</p>
        </div>

        <div class="col-md-6">
            <img src="{{asset('images/portfolio6.png')}}" alt="portfolio6">
            <h6 class="subtitle">Zulfa Muslima</h6>
            <p class="text">Zulfa Muslima adalah Desain UI UX Website
                eCommerce untuk belanja fashion muslimah</p>
        </div>
    </div>

    <br>

    <div>
        <video controls poster="{{asset('videos/portfolio_vid1_preview.jpg')}}" class="video-centered">
            <source src="{{asset('videos/portfolio_vid1.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
          </video>

          <h6 class="subtitle">Ramein.id - Grand Launching Video</h6>
          <p class="text">Ini merupakan video promosi dan intro untuk acara Grand Launching Ramein.id aplikasi
            pengelolaan tiket event dan Event Organizer</p>
    </div>

</div>

</section>

<section id="service">

    <div class="row title-div hidedot">
    <div class="col-md-6">
        <h1 class="title">What I Do</h1>
        <h1 class="title-stroke">Services</h1> 
    </div>
    <div class="col-md-6">
        .
    </div>
    </div>

    <div class="row card-row">
        <div class="col-md-6">
            <div class="container-fluid" style="width: 80%;">
                <img class="card-img-top" src="{{asset('images/services_uiux.png')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="subtitle">Desain UI UX <br> Aplikasi Mobile & Website</h5>
                  <p class="text">Mendesain Tampilan, Membuat Icon,
                    Objek Ilustrasi, Membuat Prototype</p>
                </div>
                <div class="card-body">
                  <a href="https://wa.me/6281344865221?text=Halo,%20Saya%20ingin%20bekerjasama%20dengan%20anda" class="button-black">Pesan Sekarang</a>
                </div>
              </div>
        </div>

        <div class="col-md-6">
            <div class="container-fluid" style="width: 80%;">
                <img class="card-img-top" src="{{asset('images/services_website.png')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="subtitle">Website Landing Page <br> Personal / Usaha</h5>
                  <p class="text">Membangun website landing page untuk kebutuhan promosi dan informasi usaha</p>
                </div>
                <div class="card-body">
                  <a href="https://wa.me/6281344865221?text=Halo,%20Saya%20ingin%20bekerjasama%20dengan%20anda" class="button-black">Pesan Sekarang</a>
                </div>
              </div>
        </div>
    </div>

</section>

<section id="contact">

    <div class="contact">

        <div class="contact-front">
            <h1 class="title-white">Together we'll make</h1>
            <h1 class="title-stroke-white">dreams come true</h1>
            <br>
            <h6 class="subtitle-white">Contact Me</h6>
      
            <a target="whatsapp" href="https://wa.me/6281344865221?text=Halo,%20Saya%20ingin%20bekerjasama%20dengan%20anda"><i class="fab fa-whatsapp"></i></a>
            <a target="instagram" href="https://www.instagram.com/rush.dsign/"><i class="fab fa-instagram"></i></a>
            <a target="dribbble" href="https://dribbble.com/Fakhrus"><i class="fab fa-dribbble"></i></a>
            <a target="gmail" href="mailto:fakhrusramadhan@gmail.com?"><i class="far fa-envelope"></i></a>

            <br><br><br>

            <p class="text-white">Griya Ketawang Permai Blok O no.1 <br>
                Ambarketawang Gamping Sleman <br>
                Yogyakarta Indonesia </p>
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="contact-footer-left">
                    <h1 class="title-white">Together we'll make</h1>
                    <h1 class="title-stroke-white">dreams come true</h1>
                    <br>
                    <h6 class="subtitle-white">Contact Me</h6>
              
                        <a target="whatsapp" href="https://wa.me/6281344865221?text=Halo,%20Saya%20ingin%20bekerjasama%20dengan%20anda"><i class="fab fa-whatsapp"></i></a>
                        <a target="instagram" href="https://www.instagram.com/rush.dsign/"><i class="fab fa-instagram"></i></a>
                        <a target="dribbble" href="https://dribbble.com/Fakhrus"><i class="fab fa-dribbble"></i></a>
                        <a target="gmail" href="mailto:fakhrusramadhan@gmail.com?"><i class="far fa-envelope"></i></a>
        
                        <br><br><br>
               
                    <p class="text-white">Griya Ketawang Permai Blok O no.1 <br>
                        Ambarketawang Gamping Sleman <br>
                        Yogyakarta Indonesia </p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('images/footer.png')}}" alt="footer-img">
                <img class="bottom-logo" src="{{asset('images/logowhite.png')}}" alt="footer-img">
            </div>
        </div>

    </div>
    
</section>

@endsection