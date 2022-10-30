@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Client</h1>
    </div>

    <div class="container">
        <div class="table-responsive">
            <a href="/dashboard/clients" class="btn btn-primary mb-3">Kembali</a>
            <div class="row">
                <div class="col-md-7">
                    <form method="POST" action="/dashboard/clients/{{ $client->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Nama Client</label>
                            <input type="text" class="form-control mt-2" @error('name') is-invalid @enderror id="name" name="name" required autofocus value="{{ old('name',$client->name) }}" placeholder="Nama">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Deskripsi</label>
                            <input type="text" class="form-control mt-2" @error('description') is-invalid @enderror id="description" name="description" required autofocus value="{{ old('description',$client->description) }}" placeholder="Deskripsi">
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary mb-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection