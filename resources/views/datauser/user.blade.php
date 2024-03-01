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
        <link href="{{asset('/src/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div> --}}
        <!-- Spinner End -->


        <!-- Navbar Start -->
        @include('partial.navbar')
        <!-- Navbar End -->

        <div class="container" style="margin-top: 25px">
            <h1 style="text-align: center">Data User</h1>
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            {{-- <a href="/tambah" class="btn btn-info mb-2">Tambah Data</a> --}}
            <table class="table table-bordered" border="5" style="margin-top: 10px">
                <thead>
                  <tr>
                    <th scope="col">NAMA</th>
                    <th scope="col">NAMA LENGKAP</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">LEVEL</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $dt )
                  <tr>
                    <td>{{$dt->username}}</td>
                    <td>{{$dt->nama_lengkap}}</td>
                    <td>{{$dt->email}}</td>
                    <td>{{$dt->level}}</td>
                    <td>
                        <form action="{{ route('user.destroy', $dt->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="/edit/{{ $dt->id }}" class="btn btn-success btn-sm">Edit</a>
                            <button onclick="return confirm('Hapus user ini?')" class="btn btn-danger btn-sm" style="margin-left: 10px">Hapus</button>
                        </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>


         <!-- Back to Top -->
         <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


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
