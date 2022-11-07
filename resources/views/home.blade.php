@extends('layouts.main')
@section('container') 
<div class="breadcumbs mb-3">
  <div class="container-fluid pt-1">
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
              <h5>CV. CITRA MANDIRI SUKSES</h5>
              <p>Our Team Has More Experience In General Construction Field</p>
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
   


  {{-- end carousel --}}
  


{{-- service --}}
<div class="services mt-2  py-5">
  <div class="container">
    <div class="title-container">
      <h2 class="text-center fw-bold">OUR SCOPE</h2>
    </div>

    <div class="row mt-4">
      @foreach($services as $service)
      <div class="col-md-4 mt-4 mb-4">
        <div class="category-item">
            <div class="card bg-dark text-white border-0">
              
            @if($service->image)
              <img src="{{ asset('storage/' . $service->image) }}" class="card-img" alt="">
            @else
              <img src="/img/blank_img.png" class="card-img-top" alt="#">
            @endif

            <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(5, 5, 5, 0.37)">{{ $service->title }}</h5>
            </div>
            </div>
        </div>
      </div>
      @endforeach

     

    </div>
  </div>
  <div class="d-flex justify-content-center">
    {{ $services->links() }}
</div>
</div>
{{-- end service --}}

@endsection

