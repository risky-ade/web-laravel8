@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Sliders</h1>
    </div>

    <div class="container">
        <div class="table-responsive">
            <a href="/dashboard/sliders" class="btn btn-primary mb-3">Kembali</a>
            <div class="row">
                <div class="col-md-8">
                    <form method="post" action="/dashboard/sliders/{{ $slider->id }}" class="mb-5" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Judul</label>
                            <input type="text" class="form-control mt-2" @error('title') is-invalid @enderror id="title" name="title" required autofocus value="{{ old('title', $slider->title) }}" placeholder="Judul">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" class="form-control mt-2" type="hidden" id="" cols="30" rows="10" >{{ $slider->description }}</textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="image">Gambar</label>
                            <input type="hidden" name="oldImage" value="{{ $slider->image }}">
                            @if($slider->image)
                              <img src="{{ asset('storage/' . $slider->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                            @else
                              <img class="img-preview img-fluid mb-3 col-sm-5">
                            @endif
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                            @error('image')
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
    <script>
          // untuk menonaktifkan fitur upload file pada trix editor
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage(){
        const image = document.querySelector('#image');
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