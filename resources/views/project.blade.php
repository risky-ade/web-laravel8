@extends('layouts.main')
@section('container')
<div class="breadcumbs mb-3">
    <div class="container-fluid">
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
        <div class="col">
          <div class="card h-100 card-category-item">
            <img src="/img/img1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">ITS,Portal Gate Automatic</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 card-category-item">
            <img src="/img/img2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">This is a short card.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 card-category-item">
            <img src="/img/img3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 card-category-item">
            <img src="/img/img4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      {{-- {{ $posts->links() }} --}}
  </div>
@endsection
