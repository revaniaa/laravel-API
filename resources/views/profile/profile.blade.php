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
<div class="card mb-0" style="max-width: 800px; margin-left: 400px; margin-top: 80px; height: 400px" enctype="multipart/form-data">
    <div class="row g-0">
      <div class="col-md-4" style="text-align: center;">
        <img mat-card-image style="height: 300px; width: 300px; border-radius: 150px; margin-left: 35px; margin-top: 15px;"
        src="{{ asset('storage/' . Auth::user()->image) }}"alt="...">
        {{-- <div class="mb-3" style="margin-left: 50px; margin-top: 20px">
            <label for="image" class="form-label">Post Foto</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <div style="margin-left: 150px; margin-top: 20px">
            <a href="" class="btn btn-info" style="width: 150px">Create Foto</a>
        </div> --}}
      </div>
      <div class="col-md-8">
        <div class="card-body" style="margin-left: 70px; margin-top: 40px">
          {{-- <h5 class="card-title">Card title</h5> --}}
          <div style="display: flex">
            <p>Nama</p>
            <p style="margin-left: 96px">:</p>
            <p style="margin-left: 10px">{{ Auth::user()->username }}</p>
          </div>
          <div style="display: flex">
            <p>Nama Lengkap</p>
            <p style="margin-left: 30px">:</p>
            <p style="margin-left: 10px">{{ Auth::user()->nama_lengkap }}</p>
          </div>
          <div style="display: flex">
            <p>Email</p>
            <p style="margin-left: 98px">:</p>
            <p style="margin-left: 10px">{{ Auth::user()->email }}</p>
          </div>
          <div style="display: flex">
            <p>Level</p>
            <p style="margin-left: 100px">:</p>
            <p style="margin-left: 10px">{{ Auth::user()->level }}</p>
          </div>
          <div style="display: flex">
            <p>Deskripsi Profile</p>
            <p style="margin-left: 25px">:</p>
            <p style="margin-left: 10px">{{ Auth::user()->deskripsi_profile }}</p>
          </div>
          {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
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
</div>
{{--  --}}
