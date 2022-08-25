@extends('layouts.main')
@section('container')
<div class="breadcumbs mb-3">
    <div class="container-fluid">
        <div class="d-flex justify-content-between-align-items-center text-white">
            <h2>About Us</h2>
        </div>
    </div>
</div>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Custom jumbotron</h1>
          <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        </div>
      </div>
 {{-- About-Us --}}
  <div class="about-us mt-3">
    <div class="container">
      <div class="title-container">
      <h2 class="text-center fw-bold">ABOUT US</h2>
      </div>
      <div class="row mt-5">
        <div class="col-md-6">
          <h3 class="fw-bold about-us-title">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          </h3>
          <p class="fw-bolder mt-4 about-us-subtitle">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt deserunt magni corporis iure placeat dicta, adipisci error ad autem amet ullam tenetur officiis a blanditiis facilis temporibus pariatur doloremque dolores?
          </p>
        </div>
        <div class="col-md-6">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, vero ipsum. Odit, fugiat quos delectus natus excepturi cum ipsum vel, iste explicabo asperiores alias, tenetur nesciunt quibusdam voluptates. Exercitationem, harum.
          </p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-check-all colours"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </li>
            <li class="list-group-item"><i class="bi bi-check-all colours"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </li>
            <li class="list-group-item"><i class="bi bi-check-all colours"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </li>
            <li class="list-group-item"><i class="bi bi-check-all colours"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </li>
          </ul>
          <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vitae consequatur ut modi nostrum obcaecati officiis aut! Sapiente repellat fugit assumenda ipsa, doloribus impedit reiciendis quia, harum vel, suscipit eius?</p>
        </div>
      </div>
    </div>
  </div>
  {{-- end About-us --}}
@endsection
