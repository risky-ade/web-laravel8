@extends('layouts.main')
@section('container')
    <div class="breadcumbs mb-3">
        <div class="container-fluid">
            <div class="d-flex justify-content-between-align-items-center text-white">
                <h2>Client</h2>
            </div>
        </div>
    </div>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <div class="carousel-img d-flex align-items-center p-0">
                <img src="/img/fto1.jpg" class="d-block w-100 d-flex carousel-img" alt="CV.CMS">
                <h5 class="card-title text-center flex-fill p-4 fs-3"> CV. CMS</h5>
            </div>

          <h1 class="display-5 fw-bold">Custom jumbotron</h1>
          <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        </div>
      </div>

      <div class="col-md-8 container">
      <table class="table table-striped table-hover table-bordered" id="datatables">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
      </table>
    </div>
@endsection
