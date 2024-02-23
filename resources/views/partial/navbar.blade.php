<div class="container-fluid bg-dark">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="text-primary mb-0 display-5">Gallery<span class="text-white">Foto</span></h1>
            </a>
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-dark"></span>
            </button>
            <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="/home" class="nav-item nav-link ">Home</a>
                    @if (auth()->user()->level=="admin")
                    <a href="/user" class="nav-item nav-link ">Data User</a>
                    @endif
                    <a href="/foto" class="nav-item nav-link ">Foto</a>
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            // Get the current URL path
                            var path = window.location.pathname;

                            // Find the corresponding link in the navbar and add a class to highlight it
                            $('.nav-link').each(function() {
                                var href = $(this).attr('href');
                                if (path.substring(0, href.length) === href) {
                                    $(this).addClass('active');
                                }
                            });
                        });
                    </script>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> {{ Auth::user()->username }}</a>
                        <div class="dropdown-menu m-0 bg-primary">
                            <a href="/profile" class="dropdown-item">Profil</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
