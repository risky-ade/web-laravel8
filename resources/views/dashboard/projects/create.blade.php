@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Proyek</h1>
    </div>

    <div class="container">
            <a href="/dashboard/projects" class="btn btn-primary mb-3">Kembali</a>
                <div class="col-md-6">
                    <form method="post" action="/dashboard/projects" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Nama Proyek</label>
                            <input type="text" class="form-control mt-2 @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}" placeholder="title">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Client</label>
                            <select class="form-select" name="client_id">
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
                            <label for="title" class="form-label">Scope</label>
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

                          <div class="mb-3">
                            <label for="cover" class="form-label">Cover Gambar</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror"  id="cover" onchange="previewImage()">

                            @error('cover')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror 
                          </div>

                          <div class="mb-3">
                            <label for="image" class="form-label">Gambar Proyek</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input type="file" name="images[]" class="form-control" multiple>

                            @error('image')
                            <div class="invalid-feedback">
                              {{ $message }}
                            </div>
                            @enderror 
                          </div>

                        <div class="form-group mb-3">
                            <label for="tanggal">Tanggal Proyek Selesai</label>
                            <input type="date" class="form-control mt-2" name="tanggal">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat">Alamat Proyek</label>
                            <input type="text" class="form-control mt-2" @error('alamat') is-invalid @enderror id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}" placeholder="Alamat">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control mt-2" @error('deskripsi') is-invalid @enderror id="deskripsi" name="deskripsi" required autofocus value="{{ old('deskripsi') }}" placeholder="Deskripsi">
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


    <script>
         function previewImage(){
            const image = document.querySelector('#cover');
            const imgPreview = document.querySelector('.img-preview')
            
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection