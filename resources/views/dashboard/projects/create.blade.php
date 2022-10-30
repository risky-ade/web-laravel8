@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Proyek</h1>
    </div>

    <div class="container">
        <div class="table-responsive">
            <a href="/dashboard/projects" class="btn btn-primary mb-3">Kembali</a>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="/dashboard/projects" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Nama Proyek</label>
                            <input type="text" class="form-control mt-2" @error('name') is-invalid @enderror id="name" name="name" required autofocus value="{{ old('name') }}" placeholder="Nama">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Nama Client</label>
                            <select class="form-select" name="service_id">
                              @foreach ($clients as $client)
                                @if(old('client_id')== $client->id )
                                  <option value="{{ $client->id }}" selected >{{ $client->name }}</option>
                                  @else
                                  <option value="{{ $client->id }}">{{ $client->name }}</option>
                                  @endif
                              @endforeach
                            </select>
                          </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Scope</label>
                            <select class="form-select" name="service_id">
                              @foreach ($services as $service)
                                @if(old('service_id')== $service->id )
                                  <option value="{{ $service->id }}" selected >{{ $service->title }}</option>
                                  @else
                                  <option value="{{ $service->id }}">{{ $service->title }}</option>
                                  @endif
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="">Tanggal Proyek Selesai</label>
                            <input type="date" class="form-control mt-2">
                            @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Alamat Proyek</label>
                            <input type="text" class="form-control mt-2" @error('description') is-invalid @enderror id="description" name="description" required autofocus value="{{ old('description') }}" placeholder="Deskripsi">
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Deskripsi</label>
                            <input type="text" class="form-control mt-2" @error('description') is-invalid @enderror id="description" name="description" required autofocus value="{{ old('description') }}" placeholder="Deskripsi">
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="justify-content-end">
                        <button type="submit" class="btn btn-primary mb-4 justify-content-center">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection