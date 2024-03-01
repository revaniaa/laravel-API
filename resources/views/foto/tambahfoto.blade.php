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

<div class="container d-flex justify-content-center">
    <div class="card w-50" style="margin-top: 30px">
        <div class="card-header">Tambah Foto</div>
            <div class="card-body">
                <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                    {{-- buat kolom image di database --}}
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="image" class="form-control" name="image">
                        @error('image')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    {{-- semua kolom disamakan sama database --}}
                    <div class="form-group" style="margin-top: 10px">
                        <label for="describe_photo">Describe Foto</label>
                        <textarea id="describe_photo" cols="30" rows="5" class="form-control is invalid" name="describe_photo"></textarea>
                        @error('describe_photo')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-info" style="margin-top: 15px; margin-left: 520px">Create</button>
                </form>
            </div>

        </div>
    </div>
    <div style="margin-left: 445px; margin-top: 20px">
        <a href="/foto" class="btn btn-info">Back</a>
    </div>

