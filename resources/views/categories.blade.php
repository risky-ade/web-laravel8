
@extends('layouts.main')
@section('container')
    <div class="breadcumbs mb-3">
        <div class="container-fluid pt-1">
            <div class="d-flex justify-content-between-align-items-center text-white">
                <h2>Article Category</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-3 mt-4">

                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                        </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    {{-- Note : old script categories --}}

    {{-- @foreach ($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    </ul>
    @endforeach --}}
@endsection
