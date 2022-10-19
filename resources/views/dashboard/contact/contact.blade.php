@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Contact</h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="col-lg-8">
    <form action="/dashboard/contact/{{ $contact->id }}" method="POST"  class="mb-5" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="from-group mb-3">
                <label for="">Nama Perusahaan</label>
                <input type="text" class="form-control" name="name" @error('name') is-invalid @enderror id="name" placeholder="nama" value="{{ $contact->name }}">
                @error('name')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
            </div>
            <div class="from-group mb-3">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" @error('alamat') is-invalid @enderror id="alamat"  placeholder="alamat" value="{{ $contact->alamat }}">
                @error('alamat')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
            </div>
            <div class="from-group mb-3">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon" @error('telepon') is-invalid @enderror id="telepon"  placeholder="telepon" value="{{ $contact->telepon }}">
                @error('telepon')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
            </div>
            <div class="from-group mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" class="form-control" name="nomorhp" @error('nomorhp') is-invalid @enderror id="nomorhp"  placeholder="nomor hp" value="{{ $contact->nomorhp }}">
                @error('nomorhp')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
            </div>
            <div class="from-group mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" @error('email') is-invalid @enderror id="email"  placeholder="e-mail" value="{{ $contact->email }}">
                @error('email')
                <div class="invalid-feedback">
                   {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Contact</button>
        </form>
    </div>

@endsection