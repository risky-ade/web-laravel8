@extends('layouts.main')
@section('container')
    <div class="breadcumbs mb-3">
        <div class="container-fluid">
            <div class="d-flex justify-content-between-align-items-center text-white">
                <h2>Client</h2>
            </div>
        </div>
    </div>
    <div class="mb-lg-4 bg-light rounded-3">
      <div class="jumbotron">
          <img class="jumbotron-img d-block w-100 d-flex" src="/img/p6.jpg" alt="">
      </div>
  </div>

    <div class="title-container mt-4 mb-3">
      <h2 class="text-center fw-bold">OUR CLIENT</h2>
    </div>

      <div class="col-md-8 container">
      <table class="table table-striped table-hover table-bordered" id="datatables">
        <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Year</th>
              <th scope="col">Client</th>
              <th scope="col">Project</th>
              <th scope="col">Address</th>
              <th scope="col">Scope</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>2020</td>
              <td>ITS</td>
              <td>Portal gate & parking</td>
              <td>Surabaya</td>
              <td>Portal Gate System</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>2019</td>
              <td>Grand Heaven</td>
              <td>Pemasangan pintu besi</td>
              <td>Surabaya</td>
              <td>Emergency door</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>2019</td>
              <td>PT. Gudang Garam Kediri</td>
              <td>Pintu Sliding Henderson cover ACP</td>
              <td>Kediri</td>
              <td>Sliding door</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>2020</td>
              <td>PT. UCC</td>
              <td>Stainlessteel & kaca Tempered</td>
              <td>Pandaan</td>
              <td>Stainlessteel</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>2020</td>
              <td>J&T</td>
              <td>Pintu Besi / Fire Door</td>
              <td>Waru, Sidoarjo</td>
              <td>Emergency Door</td>
            </tr>

          </tbody>
      </table>
    </div>

@endsection
