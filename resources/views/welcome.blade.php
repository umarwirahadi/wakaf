<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Wakaf - Almutawally</title>
  <meta content="wakaf pesantren" name="description">
  <meta content="wakaf almutawally" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

  {{-- <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 --}}
  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Wakaf</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#home" class="">Home</a></li>
          <li><a href="#sejarah">Sejarah</a></li>
          <li><a href="#pengembangan">Pengembangan</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#pengurus">Pengurus</a></li>
          <li><a href="#program">Program wakaf</a></li>
         {{--  <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a href="#contact">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a href="https://wa.me/+6283824611988" target="__blank" class="btn-getstarted">Chat admin</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="home" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h2 class="">Wakaf Pengembangan Kampus 2 </h2>
            <h1 class="">Pesantren Terpadu Al-Mutawally</h1>
            <p class="">Patalagan-Pancalang-Kuningan-Jawa Barat </p>
            <div class="d-flex">
              <a href="https://wa.me/6283824611988" class="btn-get-started" target="__blank">Wakaf Sekarang</a>
            </div>
          </div>
          <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="/assets/img/masjid.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="zoom-in">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/logo-almutawally.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/kab_kuningan.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/kemenag.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logo-almutawally.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logo-almutawally.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logo-almutawally.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logo-almutawally.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/logo-almutawally.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->
    <section id="sejarah" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class=""><i>
          “Kamu sekali-kali tidak sampai kepada kebajikan (yang sempurna) sebelum kamu menafkahkan sebagian dari apa yang kamu cintai.”
        </i>
        </h2>
        (Q.S. Ali Imran: 92)
      </div>
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Pesantren Terpadu Al Mutawally tengah mengembangkan kampus kedua seluas 2 hektar di Desa Patalagan, Pancalang, Kuningan, Jawa Barat, dalam upaya pengembangan pendidikan dan dakwah Islam. Rencananya, kampus ini akan dilengkapi dengan fasilitas seperti masjid, asrama santri, aula, ruang kelas, lapangan olahraga, dan fasilitas penunjang lainnya untuk mendukung proses belajar mengajar. Pembangunan kampus ini diharapkan dapat mencetak generasi Muslim yang mandiri, sholeh, ‘alim, komunikatif, dan visioner.
            </p>
            <p>
              Selain sebagai investasi properti, memiliki tanah wakaf untuk pesantren dianggap sebagai investasi akhirat dan berkah masa depan. Tanah wakaf di pesantren tidak hanya memberikan manfaat dalam kehidupan dunia, tetapi juga di akhirat, karena menjadi bagian dari perjalanan pendidikan umat Islam dan mendatangkan pahala yang tak terhingga dari Allah SWT.
            </p>
           
          </div>
       

        </div>
       

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us" data-builder="section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class=""><span class="">Sejarah singkat </span><strong>Pesantren Al-Mutawally</strong></h3>
              <p>
                Pesantren Al-Mutawally memiliki sejarah yang panjang, dimulai dua abad lalu yang terinspirasi dari KH. Mutawally, yang nama aslinya KH. Sirojurrasyidin, seorang ulama besar di Kuningan pada masanya. Gelar "Mutawally" diberikan atas "karomah"nya yang dapat menghidupkan mesin kapal laut yang tiba-tiba mati saat perjalanan haji. Beliau adalah putra KH. Qona’an, perintis Pesantren di Huludayeuh, Timbang, dan keturunan
ke-11 dari Sunan Gunung Djati.</p>
<p>
  Setelah melaksanakan ibadah haji, KH. Mutawally mendirikan pesantren di Gibug, Desa Bojong Cilimus Kuningan pada akhir
abad ke-19, yang santrinya dari berbagai daerah di pulau jawa. Namun sepeninggalnya pada tahun 1953, Pesantren tersebut mengalami kevakuman, yang tersisa hanya kegiatan pengajian Kamisan di Mushalla Sirajurrosyidin ath-Thohiriyah
</p>
<p>
  Baru di era generasi ketiga dan keempat, yang dimulai  dengan pendirian Yayasan Al Mutawally pada 1989, perintisan Pesantren Al Mutawally dimulai, di bawah Ketua Yayasan bapak Moch. Rozak, B.A., dan dilanjutkan oleh bapak Drs. KH. Nunung Abdullah Dunun. Saat ini, Ketua Yayasan sekaligus Direktur Pesantren Terpadu Al Mutawally adalah Prof. KH. Didin Nurul Rosidin, M.A. PhD. Alhamdulillah di bawah kepemimpinannya, Yayasan/Pesantren Al Mutawally tumbuh pesat dan memiliki berbagai lembaga pendidikan termasuk Pesantren Terpadu, Madrasah Tsanawiyah, dan Madrasah Aliyah, serta memiliki rencana pengembangan lebih lanjut dengan kampus baru di Desa Patalagan.
</p>           
            </div>         

          </div>

          <div class="col-lg-4 order-1 order-lg-2 why-us-img">
            <img src="assets/img/Pengasuh.png" class="img-fluid" alt="pengasuh pesantren al-mutawally" data-aos="zoom-in" data-aos-delay="50">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-center">
            <img src="/assets/img/masjid-za.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 content">

            <h3>Pembangunan Masjid Zainal Abidin tahap kedua </h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>

            <div class="skills-content skills-animation">

              <div class="progress">
                <span class="skill"><span>Semen</span> <i class="val">30/560 Zak</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Pasir</span> <i class="val">100/2000 Kubik</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Bata</span> <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

              <div class="progress">
                <span class="skill"><span>Kayu/Bambu</span> <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div><!-- End Skills Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Services Section -->
    <section id="pengembangan" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Rencana Pengembangan</h2>
        <p>Pesantren Al-Mutawally memiliki Rencana pengembangan strategis untuk mencapai Mutawally emas pada tahun 2045</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"> 2019</i></div>
              {{-- <h4><a href="service-details.html" class="stretched-link">Lorem Ipsum</a></h4> --}}
              <p>Pembangunan Al-Mutawally 2 di Desa Patalagan, Kec. Pancalang, sekitar 6 KM dari Kampus 1 Al-Mutawally 1 di atas tanah wakaf seluas kurang lebih satu hektar</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"> 2020</i></div>
              {{-- <h4><a href="service-details.html" class="stretched-link">Sed ut perspici</a></h4> --}}
              <p>Peningkatan kemampuan santri dan SDM dalam penguasan materi yang diajarkan dan penguatan jaringan so0sial <i>(social networkong)</i></p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"> 2021</i></div>
              {{-- <h4><a href="service-details.html" class="stretched-link">Magni Dolores</a></h4> --}}
              <p>Peningkatan sarana Prasarana terutama penambahan Ruang Kelas baru (RKB) sebanyak 10 (sepuluh) kelas </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"> 2025</i></div>
              {{-- <h4><a href="service-details.html" class="stretched-link">Nemo Enim</a></h4> --}}
              <p>Pengembangan usaha produktif dan kreatif dalam peningkatan kemandirian yayasan secara ekonomi</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->   

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kegiatan</h2>
        <p>Kegiatan penyelenggaraan pesantren al-mutawally</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Sekolah</li>
            <li data-filter=".filter-product">Pengajian</li>
            <li data-filter=".filter-branding">Extrakulikuler</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/kegiatan/donordarah.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/kegiatan/futsal.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/kegiatan/image3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/kegiatan/image4.jpeg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/kegiatan/image5.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/kegiatan/image6.jpeg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/kegiatan/image7.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/kegiatan/image8.jpeg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/kegiatan/image9.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/kegiatan/image10.jpeg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/kegiatan/image11.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/kegiatan/image12.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/kegiatan/image19.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/kegiatan/image20.jpeg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/kegiatan/khutbah.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/kegiatan/qosidah.jpeg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/kegiatan/santri.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/kegiatan/seminar.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="pengurus" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pengurus</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/pengurus/Prof_H_Didin_Nurul_Rosidin_S.Ag_MA_Ph_D.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Prof.H. Didin Nurul Rosidin, S.Ag. MA, Ph.D</h4>
                <span>Ketua</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/pengurus/Dr_H_Mahbub Nuryadien_M_Ag.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Drs. H. Mahbub Nuryadien, M.Ag</h4>
                <span>Wakil Ketua</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/pengurus/Ikin_Sodiki_S.PdI.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ikin Sodikin, S.Pd.I</h4>
                <span>Sekretaris</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/pengurus/Uud_Syafruddin_S_HI.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Uud Syafruddin, S.HI</h4>
                <span>Wakil Sekretaris</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/pengurus/Hj_Aan_Nurhasanah_S.Ag.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4> Hj. Aan Nurhasanah, S.Ag</h4>
                <span>Bendahara</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('storage/images/pengurus/profile.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Encu Abdul Hafidz, S.EI</h4>
                <span>Wakil Bendahara</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->        

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Pricing Section -->
    <section id="program" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Program wakaf</h2>
        <p>Kami memiliki program pilihan wakaf khusus untuk muwakif sebagai berikut</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="60">
            <div class="pricing-item">
              <h3>Plan 1</h3>
              <h4><sup>Rp</sup>100.000<span> / Paket</span></h4>             
              <a href="#" class="buy-btn">Wakaf sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="120">
            <div class="pricing-item">
              <h3>Plan 2</h3>
              <h4><sup>Rp</sup>500.000<span> / Paket</span></h4>              
              <a href="#" class="buy-btn">Wakaf Sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="180">
            <div class="pricing-item">
              <h3>Plan 3</h3>
              <h4><sup>Rp</sup>1.000.000<span> / Paket</span></h4>              
              <a href="#" class="buy-btn">Wakaf Sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>
        <div class="row gy-4 mt-3">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="240">
            <div class="pricing-item">
              <h3>Plan 4</h3>
              <h4><sup>Rp</sup>5.000.000<span> / Paket</span></h4>             
              <a href="#" class="buy-btn">Wakaf sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Plan 5</h3>
              <h4><sup>Rp</sup>10.000.000<span>/Paket</span></h4>
              <a href="#" class="buy-btn">Wakaf Sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="360">
            <div class="pricing-item">
              <h3>Plan 6</h3>
              <h4><sup>Jumlah Lain</sup></h4>              
              <a href="#" class="buy-btn">Wakaf Sekarang</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>

        <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Informasi dan layanan seputar pondok pesantren dan Wakaf bisa mengisi form dibawah ini atau chat langsung dengan admin untuk mendapatkan informasi lebih lanjut</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Jl. Pesantren No. 177 Dusun Pahing</p>
                  <p>RT. 011 RW.004 Bojong, Cilimus, Kuningan Jawa Barat 455556</p>            
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Hubungi kami</h3>                  
                  <p><a href="https://wa.me/+6283824611988" target="__blank">083824611988 (WA)</a></p>

                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email kami</h3>
                  <p>ponpesmutawally@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1197199087146!2d108.49260427580455!3d-6.876256917283217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f19c11ba857e1%3A0xf28a290f2c93884c!2sPESANTREN%20TERPADU%20AL-MUTAWALLY!5e0!3m2!1sen!2sid!4v1715927093360!5m2!1sen!2sid" width="470" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Infaq Center</h4>
            <p>013301000846566 Bank.  BRI a.n Panitia Pembangunan Masjid Zainal Abidin</p>
            <form action="#" method="post" class="php-email-form">
              {{-- <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div> --}}
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <img src="/assets/img/al_mutawally.png" alt="Al-Mutawally" class="" width="300">
            {{-- <span class="sitename">Pesantren Terpadu Al-Mutawally</span> --}}
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Pesantren No. 177 Dusun Pahing</p>
            <p>RT. 011 RW.004 Bojong, Cilimus, Kuningan Jawa Barat 455556</p>
            <p class="mt-3"><strong>Phone:</strong> <span>(0232) 8910177</span></p>
            <p><strong>Email:</strong> <span>ponpesmutawally@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Hubungi kami</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Sejarah</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Program wakaf</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Link terkait</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Al-Mutawally</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">PSB</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Kementerian Agama</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">JABAR</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Ikuti kami juga di sosial media berikut, untuk mendapatkan informasi terbaru seputar pesantren dan unit kegiatan lainnya</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

    {{-- <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div> --}}

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>