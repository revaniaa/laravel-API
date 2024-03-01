@extends('layouts.master')

<head>
    <meta charset="utf-8">
    <title>Gallery Foto</title>
    {{-- - Pest Control Website Template --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/src/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/src/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/src/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('/src/css/style.css')}}" rel="stylesheet">
</head>
<div class="card mb-0" style="max-width: 900px; margin-left: 400px; margin-top: 80px; height: 400px; border-radius: 50px">
    <div class="row g-0">
      <div class="col-md-4" style="text-align: center;">
        <img mat-card-image style="height: 400px; width: 350px;"
        src="{{ asset('storage/' . $foto->image) }}"alt="...">
      </div>
        <div class="col-md-8">
            {{-- <div class="card-body" style="margin-left: 70px; margin-top: 40px"> --}}
              {{-- <h5 class="card-title">Card title</h5> --}}
              <div style="display: flex; margin-left: 60px; margin-top: 20px">
                <div class="col-md-2" style="text-align: center;">
                    <img mat-card-image style="height: 60px; width: 60px; border-radius: 50px;"
                    src="/src/img/user2.jpeg"alt="...">
                </div>
                <div>
                    <p style="margin-top: 20px;">{{ $user->username }}</p>
                </div>
              </div>
              <div class="input-group mb-3" style="margin-top: 240px;">
                <div class="col-md-2" style="text-align: center; margin-left: 60px">
                    <img mat-card-image style="height: 60px; width: 60px; border-radius: 50px;"
                    src="/src/img/user2.jpeg"alt="...">
                </div>
                <div style="margin-left: -2px; margin-top: 15px; width: 320px;">
                    <input type="text" class="form-control" placeholder="Tambah Komentar" aria-label="Username" aria-describedby="basic-addon1">
                </div>

              </div>
        </div>
    </div>
  </div>
    <div style="margin-left: 400px; margin-top: 20px">
        <a href="/home" class="btn btn-info">Back</a>
    </div>


{{-- <div style="text-align: center"> --}}
        {{-- <p>photo profile</p> --}}
        {{-- <p>{{ Auth::user()->username }}</p>
        <p>{{ Auth::user()->nama_lengkap }}</p>
        <p>{{ Auth::user()->email }}</p>
        <p>{{ Auth::user()->level }}</p>
        <p>deskripsi profile</p> --}}
{{-- </div> --}}

