@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 mb-3">
            <h2 class="mb-3">{{ $project->title }}</h2>
            
            <div style="max-height: 350px; overflow:hidden;">
                {{-- <img src="cover/{{ $project->cover }}"
                alt="" class="img-fluid"> --}}
                @if($project->cover)
                <img src="/cover/{{ $project->cover }}" class="img-fluid shadow-sm"alt="">
              @else
                <img src="/img/blank_img.png" class="img-fluid" alt="#">
              @endif
            </div>

            
            
        </div>
        <div class="row col-md-8 mt-3">
            <ul class="">
                <li class="list-item list-unstyled">
                    @if (count($project->images)>0)
                        @foreach ($project->images as $img)
                        <img src="/project_img/{{ $img->image }}" class="img-responsive mb-3 mx-3 shadow-lg" style="max-height: 300px; max-width: 300px;" alt="" srcset="">
                        @endforeach
                        @endif
                </li>
            </ul>
        </div>

        <div class="col-md-6 fs-6">
            <ul class="list-group list-group-flush ">
                <li class="list-group-item"><i class="bi bi-check-all colours"></i>
                  Nama Client : {{ $project->client->name }}
                </li>
                <li class="list-group-item"><i class="bi bi-check-all colours"></i>
                  Scope : {{ $project->service->title }}
                </li>
                <li class="list-group-item"><i class="bi bi-check-all colours"></i>
                  Alamat Proyek : {{ $project->alamat }}
                </li>
                <li class="list-group-item"><i class="bi bi-check-all colours"></i>
                  Tanggal Selesai Proyek : {{ $project->tanggal }}
                </li>
              </ul>
        </div>
      
        <a href="/project" class="d-block mt-3">Back to all project</a>
</div>

@endsection
