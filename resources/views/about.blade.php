@extends('layouts.main')
@section('container')
<div class="breadcumbs mb-3">
    <div class="container-fluid pt-1">
        <div class="d-flex justify-content-between-align-items-center text-white">
            <h2>About Us</h2>
        </div>
    </div>
</div>
    <div class="mb-4 bg-light rounded-3">
        <div class="jumbotron">
            <img class="jumbotron-img d-block w-100 d-flex" src="/img/fto4.jpg" alt="">
        </div>
      </div>
 {{-- About-Us --}}
  <div class="about-us mt-3">
    <div class="container">
      <div class="title-container">
      <h2 class="text-center fw-bold">ABOUT US</h2>
      </div>
      <div class="row mt-5 justify-content-between">
        <div class="col-md-5">
          <h3 class="fw-bold about-us-title">
            VISI
          </h3>
          <ul class="list-group list-group-flush">
            <li class="fw-bolder list-group-item fs-5 opacity-75">
              Menjadikan CV. Citra Mandiri Sukses selalu mendapatkan prioritas dari hati pelanggan seluruh Indonesia.
            </li>
          </ul>
          <h3 class="fw-bold about-us-title">
            MISI
          </h3>
          <ul class="list-group list-group-flush">
            <li class="list-group-item fw-bolder fs-5 opacity-75"><i class="bi bi-check-all colours"></i>
              Memberi kepuasan pelanggan sehingga tumbuh kepercayaan dan menjadi pelanggan setia.
            </li>
            <li class="list-group-item fw-bolder fs-5 opacity-75"><i class="bi bi-check-all colours"></i>
              Memberikan Kepercayaan dengan berdasarkan Kualitas, Ketepatan, serta Harga yang kompetitive.
            </li>
          </ul>
          <p class="fw-bolder mt-3 about-us-subtitle">
            
            
          </p>
        </div>
        <div class="col-md-5">
          <p>
            Secara khusus kami mengkonsentrasikan perusahaan kami pada bidang usaha yang meliputi :
          </p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-check-all colours"></i>
              Pelaksana Konstruksi
            </li>
            <li class="list-group-item"><i class="bi bi-check-all colours"></i>
              Pembangunan Bangunan Baru
            </li>
            <li class="list-group-item"><i class="bi bi-check-all colours"></i>
              Mechanical dan Electrical
            </li>
            <li class="list-group-item"><i class="bi bi-check-all colours"></i>
              Perawatan Gedung
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </div>
  {{-- end About-us --}}
@endsection
