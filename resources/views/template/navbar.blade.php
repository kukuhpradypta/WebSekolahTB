@extends('welcome')
@section('navbar')
    <div class="container d-flex align-items-center">

        <img src="{{asset('template/assets/img/logotb.png')}}" alt="" style="height: 70px; width: 70px" />
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo me-auto"><img src="{{asset('template/assets/img/logo.png')}}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0" style="margin-left: auto">
          <ul>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="about.html">Profile</a></li>
            <li><a href="courses.html">Kurikulum</a></li>
            <li><a href="trainers.html">Hubungan Industri</a></li>
            <li><a href="events.html">Sarana Pra Sarana</a></li>
            <li><a href="pricing.html">Kesiswaan</a></li>
            <li><a href="contact.html">Kontak Kami</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>  
@endsection
@section('carousel')
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row counters kebawah">
                <div class="col-md-4">
                  <h2 style="color: white">Kegiatan Assesmen ANBK 2021</h2>
                </div>
                <div class="col-md-4">
                  <p style="font-weight: 100" class="mt-2">kegiatan ini di laksanakan pada tanggal 20 - 23 September 2021 di mulai pukul 07.40 sd 12.00 wib dengan lancar</p>
                </div>
                <div class="col-md-4 text-center">
                  <a href="#" style="background-color: #e39b0d; border-radius: 50px" class="btn text-center fw-bold text-white pe-5 ps-5 mt-4">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" id="counts">
            <div class="container">
              <div class="row counters kebawah">
                <div class="col-md-4">
                  <h2 style="color: white">
                    Jurusan di <br />
                    SMK Taruna Bhakti
                  </h2>
                </div>
                <div class="col-md-4">
                  <p style="font-weight: 100" class="mt-2">RPL, Multimedia, TEI, TKJ, dan Broadcasting</p>
                </div>
                <div class="col-md-4 text-center">
                  <a href="#" style="background-color: #e39b0d; border-radius: 50px" class="btn text-center fw-bold text-white pe-5 ps-5 mt-4">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="container">
              <div class="row counters kebawah">
                <div class="col-md-4">
                  <h2 style="color: white">
                    Libur lebaran <br />
                    2021
                  </h2>
                </div>
                <div class="col-md-4">
                  <p style="font-weight: 100" class="mt-2">Libur ini dilaksanakan pada tanggal 14 Mei s/d 28 Mei 2021</p>
                </div>
                <div class="col-md-4 text-center">
                  <a href="#" style="background-color: #e39b0d; border-radius: 50px" class="btn text-center fw-bold text-white pe-5 ps-5 mt-4">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
@endsection
@section('footer')
            <div class="container text-white">
          <div class="row counters mt-4 mb-5">
            <div class="col-md-2" style="font-family: poppins">
              <img src="{{asset('template/assets/img/logotb.png')}}" alt="" style="width: 95px; height: 95px" />
            </div>
            <div class="col-md-4 mt-3">
              <p style="font-size: 20px">
                <b>
                  YAYASAN SETYA BHAKTI <br />
                  SMK TARUNA BHAKTI
                </b>
              </p>
              <p style="font-size: 13px; font-weight: lighter">
                Jalan Pekapuran Kel.Curug <br />
                Kec.Cimanggis , Kota Depok <br />
                Propinsi Jawa Barat <br />
                <br />
                Telpon : (021) 874 4810
              </p>
            </div>
            <div class="col-md-6 mt-3">
              <p style="font-size: 20px"><b> Admission Information</b></p>
              <br />
              <p style="font-size: 13px; font-weight: lighter">
                Email : taruna@smktarunabhakti.net <br />
                Format: name, address, phone number, <br />
                majors, and description
              </p>
            </div>
            <hr class="mt-4" style="height: 2.5px" />
            <section>
              <div class="text-center" style="margin-bottom: -10%">
                <p style="font-size: 13px; font-weight: lighter">
                  Copyright SMK Taruna Bhakti <br />
                  Design by Software Engineering SMK Taruna Bhakti
                </p>
              </div>
            </section>
          </div>
        </div>
@endsection