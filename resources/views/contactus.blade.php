@extends('layouts.main')
@section('container')

<div class="container pt-5" style="max-width: 500px">
    <h3 class="text-center fw-bold pb-2 fs-4">Contact Us</h3>
    <!-- Alert User -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="" method="post" action="{{ route('contact.save') }}">
        @csrf

        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="name" id="name">

            <!-- Show error -->
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">

            <!-- Show error -->
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif                
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">

            <!-- Show error -->
            @if ($errors->has('phone'))
                <div class="alert alert-danger">
                    {{ $errors->first('phone') }}
                </div>
            @endif                                
        </div>

        <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" name="subject" id="subject">

            <!-- Show error -->
            @if ($errors->has('subject'))
                <div class="alert alert-danger">
                    {{ $errors->first('subject') }}
                </div>
            @endif                 
        </div>

        <div class="form-group">
            <label>Isi Pesan</label>
            <textarea class="form-control" name="message" id="message" rows="5"></textarea>

            <!-- Show error -->
            @if ($errors->has('message'))
                <div class="alert alert-danger">
                    {{ $errors->first('message') }}
                </div>
            @endif                    
        </div>
        <button type="submit" class="mt-3 btn btn-primary btn-kirim" name="send" value="Send">Kirim</button>
                <button class="btn btn-primary btn-loading d-none" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
        </button>
    </form>
</div>
@endsection