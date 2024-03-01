@extends('nav')

@section('content')

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center">

    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Selamat datang di Perpustakaan Baca Seru!</h1>
          <h5 data-aos="fade-up" data-aos-delay="400">Yuk, temukan keseruan di setiap halaman!</h5>
        
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Home -->

  <main id="main">

    {{-- <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-1.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="/assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section --> --}}

    

    {{-- <!-- ======= Counts Section ======= -->
    <section id="about" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="/assets/img/counts-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section --> --}}


    
   

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>sering ditanyakan</h2>
    </div>

    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-5">
        <i class="ri-question-line"></i>
        <h4>Apa saja layanan yang disediakan oleh perpustakaan ini?</h4>
      </div>
      <div class="col-lg-7">
        <p>
          Perpustakaan kami menyediakan layanan peminjaman buku, akses ke sumber daya digital, ruang baca, dan program-program acara terkait literasi.
        </p>
      </div>
    </div><!-- End F.A.Q Item-->

    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-5">
        <i class="ri-question-line"></i>
        <h4>Apakah perpustakaan ini memiliki ruang baca?</h4>
      </div>
      <div class="col-lg-7">
        <p>
          Tentu, kami memiliki ruang baca yang nyaman untuk para pengunjung. Ruang baca ini dilengkapi dengan fasilitas seperti WiFi, meja belajar, dan kursi ergonomis.
        </p>
      </div>
    </div><!-- End F.A.Q Item-->

    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
      <div class="col-lg-5">
        <i class="ri-question-line"></i>
        <h4>Apakah perpustakaan ini menyediakan panduan literasi dan bantuan penelitian?</h4>
      </div>
      <div class="col-lg-7">
        <p>
          Ya, kami menyediakan panduan literasi dan bantuan penelitian melalui website kami. Anda juga dapat berkonsultasi dengan staf perpustakaan untuk mendapatkan bantuan lebih lanjut.
        </p>
      </div>
    </div><!-- End F.A.Q Item-->

    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
      <div class="col-lg-5">
        <i class="ri-question-line"></i>
        <h4>Bagaimana cara mendonasikan buku atau materi ke perpustakaan?</h4>
      </div>
      <div class="col-lg-7">
        <p>
          Kami menerima sumbangan buku dan materi lainnya. Untuk informasi lebih, silakan hubungi staf perpustakaan atau bisa langsung datang ke perpustakaan kami
        </p>
      </div>
    </div><!-- End F.A.Q Item-->

    <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
      <div class="col-lg-5">
        <i class="ri-question-line"></i>
        <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
      </div>
      <div class="col-lg-7">
        <p>
          Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
        </p>
      </div>
    </div><!-- End F.A.Q Item-->

  </div>
</section><!-- End F.A.Q Section -->


 

    

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer -->
@endsection