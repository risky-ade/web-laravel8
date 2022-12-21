@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Proyek</h1>
    </div>


   
    <div class="container">
            <a href="/dashboard/projects" class="btn btn-primary mb-3">Kembali</a>
                <div class="col-md-3 mb-3">
                    <label class="mb-3 fw-bold" for="title">Cover</label>
                    {{-- <form action="/dashboard/projects/deletecover/{{ $project->id }}" method="post">
                        <button class="badge bg-danger border-0"><span data-feather="trash-2"></button>
                            @csrf
                            @method('delete')
                    </form> --}}
                    <img src="/cover/{{ $project->cover }}" class="img-responsive mb-3" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    <br>

                        @if (count($project->images)>0)
                        <label class="mb-3 fw-bold" for="title">Gambar</label>
                        @foreach ($project->images as $img)
                        <form action="/dashboard/projects/deleteimage/{{ $img->id }}" method="post">
                            <button class="badge bg-danger border-0"><span data-feather="trash-2"></button>
                            @csrf
                            @method('delete')
                            </form>
                        <img src="/project_img/{{ $img->image }}" class="img-responsive mb-3" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                        @endforeach
                        @endif
                </div>
                <div class="col-md-6">
                    <form method="post" action="/dashboard/projects/{{ $project->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group mb-3">
                            <label class="fw-bold" for="title">Nama Proyek</label>
                            <input type="text" class="form-control mt-2 @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $project->title) }}" placeholder="title">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="fw-bold" for="name" class="form-label">Nama Client</label>
                            <select class="form-select" name="client_id">
                              @foreach ($clients as $client)
                                @if(old('client_id',$project->client_id)== $client->id )
                                  <option value="{{ $client->id }}" selected >{{ $client->name }}</option>
                                  @else
                                  <option value="{{ $client->id }}">{{ $client->name }}</option>
                                  @endif
                              @endforeach
                            </select>
                          </div>
                        <div class="mb-3">
                            <label class="fw-bold" for="title" class="form-label">Scope</label>
                            <select class="form-select" name="service_id">
                              @foreach ($services as $service)
                                @if(old('service_id', $project->service_id)== $service->id )
                                  <option value="{{ $service->id }}" selected >{{ $service->title }}</option>
                                  @else
                                  <option value="{{ $service->id }}">{{ $service->title }}</option>
                                  @endif
                              @endforeach
                            </select>
                          </div>

                          <div class="mb-3">
                            <label for="cover" class="form-label">Cover Gambar</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input type="file" name="cover" class="form-control">

                            @error('cover')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror 
                          </div>
                          
                          <div class="mb-3">
                            <label class="fw-bold" for="image" class="form-label">Gambar Proyek</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input type="file" name="images[]" class="form-control" multiple>

                            @error('image')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror 
                          </div>

                        <div class="form-group mb-3">
                            <label class="fw-bold" for="tanggal">Tanggal Proyek Selesai</label>
                            <input type="date" class="form-control mt-2" name="tanggal"required autofocus value="{{ old('tanggal', $project->tanggal) }}">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="fw-bold" for="alamat">Alamat Proyek</label>
                            <input type="text" class="form-control mt-2" @error('alamat') is-invalid @enderror id="alamat" name="alamat" required autofocus value="{{ old('alamat', $project->alamat) }}" placeholder="Alamat">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="fw-bold" for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control mt-2" @error('deskripsi') is-invalid @enderror id="deskripsi" name="deskripsi" required autofocus value="{{ old('deskripsi', $project->deskripsi) }}" placeholder="Deskripsi">
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary mb-4 ">Submit</button>
                    </form>
            </div>
    </div>

@endsection