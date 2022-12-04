@extends('layouts.main')
@section('container')
<div class="breadcumbs mb-3">
    <div class="container-fluid pt-1">
        <div class="d-flex justify-content-between-align-items-center text-white">
            <h2>Project</h2>
        </div>
    </div>
</div>
    <div class="mb-4 bg-light rounded-3">
        <div class="jumbotron">
            <img class="jumbotron-img d-block w-100 d-flex" src="/img/fto5.jpg" alt="">
        </div>
    </div>

    <div class="title-container mt-4 mb-3">
      <h2 class="text-center fw-bold">OUR PROJECT</h2>
    </div>

    <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      @foreach($projects as $project)
        <div class="col">
          <div class="card h-100 card-category-item">
            @if($project->image)
              <img src="/project_img/{{ $img->image }}" class="card-img" alt="">
            @else
              <img src="/img/blank_img.png" class="card-img-top" alt="#">
            @endif

            {{-- <img src="/img/img1.jpg" class="card-img-top" alt="..."> --}}
            <div class="card-body">
              <a class="card-title-proj" href="">
                <h5 class=" text-center" >{{ $project->title }}</h5>
              </a>
              <p class="card-text">{{ $project->deskripsi }}</p>
            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="col">
          <div class="card h-100 card-category-item">
            <img src="/img/img2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <a class="card-title-proj" href="">
                <h5 class=" text-center" >Grand Heaven, Emergency door</h5>
              </a>
              <p class="card-text">Pemasangan pintu darurat di wilayah rumah duka Grand Heaven Surabaya</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 card-category-item">
            <img src="/img/img3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <a class="card-title-proj" href="">
                <h5 class=" text-center" >Tierra Soho, draynase</h5>
              </a>
              <p class="card-text">Proyek saluran air di wilayah darmo harapan, Whiz</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 card-category-item">
            <img src="/img/img4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <a class="card-title-proj" href="">
                <h5 class=" text-center" >PT.ISM Bogasari, Kanopi</h5>
              </a>
              <p class="card-text">Pemasangan Atap Kanopi di PT.ISM Bogasari Surabaya</p>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
    <div class="d-flex justify-content-center">
      {{-- {{ $posts->links() }} --}}
  </div>
@endsection
