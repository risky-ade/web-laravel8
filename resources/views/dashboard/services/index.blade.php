@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Services</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
    </div>
    @endif

    <div class="container">
        <div class="table-responsive col-lg-8">
            <a href="/dashboard/services/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered table-sm table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $service->title }}</td>
                        <td>
                            <img src="/storage/{{ $service->image }}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <a href="/dashboard/services/{{ $service->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            
                            <form action="/dashboard/services/{{ $service->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection