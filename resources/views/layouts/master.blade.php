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

                        {{-- @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" style="margin-top: 10px; height: 59px;" role="alert">
                                {{ session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        @endif --}}

            <div class="container" style="margin-top: 30px; justify-content: center">

                <div class="row">
                     @foreach ($fotos as $foto)
                        <div class="col-md-3" style="margin-top: 35px">
                            <div class="card">

                                {{-- <a href="#modal_{{$foto->id_photo}}" data-lightbox="mygallery" data-title="A beatiful"> --}}
                                    <div class="show_image"><a href="{{ asset('storage/' . $foto->image) }}"><img style="width: 100%; height: 280px;" src="{{ asset('storage/' . $foto->image) }}" ></a></div>

                                    <div style="margin-left: 5px;" >
                                        <p>{{ $foto->describe_photo }}</p>
                                            <div style="margin-top: 5px; display: flex">
                                                        @php
                                                            $comments = \App\Models\Komen::where('id_photo', $foto->id_photo)->get()
                                                        @endphp
                                                @if (auth()->user()->level=="pengguna")
                                                <div style="display: flex">
                                                    <span id="likesCount_{{ $foto->id_photo }}" class="likeCount" style="margin-top: 14px">{{ $foto->like_post }}</span>

                                                    <form action="/foto/like" method="POST">
                                                        @csrf
                                                        <input name="id_photo" type="hidden" value="{{$foto->id_photo}}">
                                                        <button  type="submit" style="border: none; background: transparent; color: #555">
                                                            {{-- onclick="return confirm('Sukai foto ini?')" --}}
                                                            <i style="font-size: 25px; margin-right: 5px; margin-left: 5px; margin-top: 13px" class="fa fa-heart  btn-like"></i>
                                                        </button>
                                                    </form>

                                                    {{-- <p>4</p>
                                                    <i style="font-size: 25px; margin-right: 5px; margin-left: 5px" class="fa fa-heart btn-like" ></i> --}}
                                                </div>
                                                <div style="display: flex">
                                                    <span class="btn btn-default btn-xs" style="margin-top: 7px">{{$comments->count()}}</span>
                                                    <a href="#modal_{{$foto->id_photo}}" data-toggle="modal">
                                                        <i style="font-size: 25px; margin-right: 5px; color: #555; margin-top: 15px" id="icon2" class="fa fa-comment-dots"></i>
                                                    </a>
                                                </div>
                                                <button onclick="copyToClipboard('{{ $foto->image }}')" style="border: none; background: transparent;">
                                                    <i style="font-size: 25px; margin-left: 20px; margin-bottom: 25px; margin-top: 15px; color: #555" id="icon3" class="fa fa-share"></i>
                                                </button>

                                                @endif
                                            </div>
                                    </div>

                            </div>
                        </div>
                    {{-- Modal --}}
                    <div class="modal fade" id="modal_{{$foto->id_photo}}">
                        <div class="modal-dialog" style="width: 600px">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div style="display: flex">
                                        <img style="width: 305px; height: 280px; margin-left: 50px" src="{{ asset('storage/' . $foto->image) }}">

                                    </div>

                                    <div class="desc-post" style="padding: 10px; margin-bottom: -5px">
                                        {{-- {{ $foto->describe_photo }} --}}
                                    <p style="word-break: break-all">{{ $foto->describe_photo }}
                                    </p>

                                    </div>

                                    <div class="pull-footer" style="background-color: #e0e0eb; height: 50px; border-radius: 8px">
                                        <span class="user-info" style="margin-left: 10px; margin-top: 5px"> {{\App\Models\User::find ($foto->id_user)->username }}</span>
                                        <span class="user-time" style="float: right; margin-right: 10px; margin-top: 17px;">{{ $foto->created_at }}</span>
                                    </div>
                                    <br>
                                    <h5>Comment :</h5>
                                    <form action="{{route('tambahKomen',$foto->id_photo)}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            {{-- <input type="text" name="comment" class="form-control" placeholder="Tambahkan Komentar...."> --}}
                                            <textarea name="comment" type="text" id="" class="form-control" cols="30" rows="10" style="height: 102px;" ></textarea>
                                        </div>
                                        <button class="btn btn-success" style="margin-top: 5px; width: 100%"  placeholder="Tambahkan Komentar...." type="submit">Kirim</button>
                                    </form>
                                    <hr>

                                    {{-- @if ($foto->komens) --}}


                                    <div class="comment-list" style="margin-top: 8px">

                                        @if ($comments->isEmpty())
                                            <div class="text-center">Belum Ada Komentar!</div>
                                        @else
                                            @foreach ($comments as $comment)
                                                <div class="comment-body">
                                                    <div style="height: 60px; border-radius: 8px">
                                                        <div class="card" style="background-color: #ffff66;">
                                                            <p style="margin-left: 10px;font-size: 18px;">
                                                                {{ $comment->content }}</p>
                                                            <div style="font-size:small; margin-left: 60%; ">
                                                                <span> {{ $comment->user->username }} </span>|
                                                                <span> {{ $comment->created_at->diffForHumans() }} </span>
                                                            </div>
                                                        </div>
                                                </div>
                                                </div>
                                            @endforeach
                                        @endif
                                     </div>

                                    {{-- <div class="comment-list" style="margin-top: 8px">
                                            @foreach($foto as $komen)
                                            <div class="comment-body" style="background-color: #ffff66; height: 70px; border-radius: 8px">
                                                <p style="margin-left: 10px">komentar</p>
                                                <div class="comment-info">
                                                    <span  class="pull-right" style="float: right; margin-right: 10px">
                                                        <span><small>by user</span>
                                                        <span>waktu</span></small>
                                                    </span>
                                                </div>
                                            </div>
                                            @endforeach
                                    </div>
                                    @endif --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- endModal --}}
                    @endforeach

                </div>
                {{-- end container --}}
            </div>





            <style>
                .comment-body{
                    /* background-color: #2ab27b; */
                    color: #000000;
                    padding: 16px;
                    margin-bottom: 15px
                }
                .comment-body p{
                    font-size: 12px;
                    margin-bottom: 10px;
                    border-bottom: 1px solid #000000;
                }
            </style>
            {{-- end comment --}}

            <script>
                // Fungsi untuk menyalin link ke clipboard
                function copyToClipboard(image) {
                  // Mengambil elemen input atau textarea dengan value berisi link yang ingin disalin
                  const linkInput = document.createElement('input');
                  const linkText = `localhost:8000/storage/${image}`;
                  // Menambahkan link ke elemen input
                  linkInput.value = linkText;

                  // Menambahkan elemen input ke body
                  document.body.appendChild(linkInput);

                  // Memilih dan menyalin teks di dalam elemen input
                  linkInput.select();
                  document.execCommand('copy');

                  // Menghapus elemen input setelah disalin
                  document.body.removeChild(linkInput);

                  // Pemberitahuan bahwa link berhasil disalin (opsional)
                  alert('Link has been copied to clipboard: ' + linkText);
                }
                 // Menambahkan event listener pada tombol
                    // const shareButton = document.getElementById('shareButton');
                    // shareButton.addEventListener('click', copyToClipboard);
            </script>
            {{-- <script>
                const like = (id) => {
                        $.ajax({
                            url: '/foto/like/' + id,
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                '_token': '{{ csrf_token() }}'
                            },
                            success: function (data) {
                                if (data.success) {
                                    $('#likesCount_' + id).text(data.likes);
                                    // Nonaktifkan tombol like setelah diklik
                                    $('.likeButton[data-id="' + id + '"]').prop('disabled', true);
                                } else {
                                    alert('User not authenticated');
                                }
                            },
                            error: function () {
                                alert('Error');
                            }
                        });
                }
            </script> --}}




            {{-- <script>

                const btnLikes = document.querySelectorAll('.btn-like');

                btnLikes.forEach(btnLike => {
                    btnLike.addEventListener('click', function(e) {
                        e.target.classList.toggle('text-danger')
                    });

                });
            </script>
            <script src="lightbox-plus-jquery.min.js"></script> --}}

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
