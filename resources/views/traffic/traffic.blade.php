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

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js?v=3"></script>

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

<div class="container">

    <section class="p-5 mt-5 w-full">
        <canvas id="bars"></canvas>
    </section>
    <div class="row" style="justify-content: center; margin-top: -20px;">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div class="card"  style=" height: 80px; background-color: #17a9e3">
            <div style="margin-top: 20px; font-weight: bold; color: #000; font-size: 25px; text-align: center">
                @php
                $user = \App\Models\User::count();
                @endphp
                <p><i class="fa fa-user">     {{ $user }}</i></p>
            </div>
          </div>
        </div>
        <div class="col-sm-2 mb-3 mb-sm-0">
            <div class="card"  style=" height: 80px; background-color: #48f080">
                <div style="margin-top: 20px; font-weight: bold; color: #000; font-size: 25px; text-align: center">
                    @php
                    $foto = \App\Models\Foto::count();
                    @endphp
                    <p><i class="fa fa-image">      {{$foto}}</i></p>
                </div>
            </div>
          </div>
          {{-- <div class="col-sm-2 mb-3 mb-sm-0">
            <div class="card"  style=" height: 80px; background-color: #f7fc56">
                <div style="margin-top: 20px; font-weight: bold; color: #000; font-size: 25px; text-align: center">
                    <p><i class="fa fa-user">   20</i></p>
                </div>
            </div>
          </div> --}}
    </div>
</div>



        <script>
    var chartColors = {
        red: 'rgb(255, 99, 132)',
        orange: 'rgb(255, 159, 64)',
        yellow: 'rgb(255, 205, 86)',
        green: 'rgb(75, 192, 192)',
        info: '#41B1F9',
        blue: '#3245D1',
        purple: 'rgb(153, 102, 255)',
        grey: '#EBEFF6'
    };

    var ctxBar = document.getElementById("bars")
    var traffic = JSON.parse('{!! json_encode($traffic) !!}');
    console.log(traffic)
    var labels = traffic.map(ajuan => ajuan.date);
    var counts = traffic.map(ajuan => ajuan.count);
    var myBar = new Chart(ctxBar, {
    type: 'bar',
    data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Upload Gambar',
                data: counts,
                backgroundColor: chartColors.blue,
                barPercentage: 0.2,
                categoryPercentage: 0.3
            }]
        },
    options: {
        responsive: true,
        barRoundness: 1,
        title: {
        display: false,
        text: "Chart.js - Bar Chart with Rounded Tops (drawRoundedTopRectangle Method)"
        },
        legend: {
        display:false
        },
        scales: {
              y: {
                  max: 100
              }
          }
    }
    });
  </script>

</body>
</html>
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
