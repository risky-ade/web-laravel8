@extends('layouts.main')
@section('container')
<section>
    
    <div class="breadcumbs mb-3">
        <div class="container-fluid">
            <div class="d-flex justify-content-between-align-items-center text-white">
                <h2>Home</h2>
            </div>
        </div>
    </div>
     {{-- carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
          <div class="carousel-item active" >
            <img src="/img/fto1.jpg" class="d-block w-100 d-flex carousel-img" alt="...">
            <div class="carousel-caption d-fluid d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/fto2.jpg" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-fluid d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/fto3.jpg" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-fluid d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </section>
  {{-- end carousel --}}
  


{{-- service --}}
<div class="services mt-2 bg-light py-5">
  <div class="container">
    <div class="title-container">
      <h2 class="text-center fw-bold">SERVICES</h2>
    </div>
    <p class="text-center mt-4">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam unde rem perspiciatis, id incidunt accusantium veritatis nostrum 
    </p>
    <div class="row mt-5">
      <div class="col-md-4">
        <div class="card border-0 text-center p-4">
          <div class="card-body">
            <div class="card-icon">
              <i class="fa fa-book fa-3x"></i>
            </div>
            <div class="card-title mt-3">Lorem ipsum</div>
            <p class="card-description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 text-center p-4">
          <div class="card-body">
            <div class="card-icon">
              <i class="fa fa-book fa-3x"></i>
            </div>
            <div class="card-title mt-3">Lorem ipsum</div>
            <p class="card-description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 text-center p-4">
          <div class="card-body">
            <div class="card-icon">
              <i class="fa fa-book fa-3x"></i>
            </div>
            <div class="card-title mt-3">Lorem ipsum</div>
            <p class="card-description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 text-center p-4 mt-3">
          <div class="card-body">
            <div class="card-icon">
              <i class="fa fa-book fa-3x"></i>
            </div>
            <div class="card-title mt-3">Lorem ipsum</div>
            <p class="card-description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 text-center p-4 mt-3">
          <div class="card-body">
            <div class="card-icon">
              <i class="fa fa-book fa-3x"></i>
            </div>
            <div class="card-title mt-3">Lorem ipsum</div>
            <p class="card-description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 text-center p-4 mt-3">
          <div class="card-body">
            <div class="card-icon">
              <i class="fa fa-book fa-3x"></i>
            </div>
            <div class="card-title mt-3">Lorem ipsum</div>
            <p class="card-description">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, libero dolore voluptatibus maiores repudiandae omnis similique, sed cupiditate iste assumenda soluta ut veritatis quod enim repellendus cum magni autem impedit?
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- end service --}}


@endsection

