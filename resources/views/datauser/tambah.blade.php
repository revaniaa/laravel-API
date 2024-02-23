<!DOCTYPE html>
<html lang="en">

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
        {{-- <link href="{{asset('/src/css/style.css')}}" rel="stylesheet"> --}}
    </head>

    <body>
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div> --}}
        <!-- Spinner End -->

        <div class="container" style="margin-top: 25px">
            <h1 style="text-align: center">Tambah Data User</h1>
            <div class="card">
                <div class="card-body">
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="username" class="form-label">NAMA</label>
                      <input type="text" class="form-control" name="username"id="username">
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">NAMA LENGKAP</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">EMAIL</label>
                        <input type="text" class="form-control" name="email" id="email">
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">PASSWORD</label>
                        <input type="text" class="form-control" name="password" id="password">
                      </div>
                      {{-- <div class="mb-3">
                        <label for="level" class="form-label">LEVEL</label>
                        <input type="text" class="form-control" id="level">
                      </div> --}}
                      <a href="/user" class="btn btn-info">Back</a>
                    <button type="submit" class="btn btn-success float-end">Submit</button>
                  </form>
                </div>
            </div>
        </div>


         <!-- Back to Top -->
         {{-- <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a> --}}


         <!-- JavaScript Libraries -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
         <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
         <script src="/src/lib/wow/wow.min.js"></script>
         <script src="/src/lib/easing/easing.min.js"></script>
         <script src="/src/lib/waypoints/waypoints.min.js"></script>
         <script src="/src/lib/owlcarousel/owl.carousel.min.js"></script>

         <!-- Template Javascript -->
         <script src="/src/js/main.js"></script>
     </body>

 </html>
