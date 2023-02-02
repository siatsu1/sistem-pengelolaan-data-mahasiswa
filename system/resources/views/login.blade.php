<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('public')}}\assets\marker\wifi.png">
    <link rel="icon" href="{{ url('public') }}/assets/marker/6.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{ url('public') }}/assets_onedash/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ url('public') }}/assets_onedash//css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{ url('public') }}/assets_onedash//css/style.css" rel="stylesheet" />
    <link href="{{ url('public') }}/assets_onedash//css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ url('public') }}/assets_onedash//css/pace.min.css" rel="stylesheet" />

    <title>SIAKAD</title>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">

        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6 bg-light d-flex align-items-center justify-content-center p-0">
                                <!-- <img src="{{ url('public/app/images') }}/bg1.jpg" class="img-fluid m-0" alt="" style="width: fit-content; margin:0;"> -->
                                <img src="{{ url('public/app/images') }}/college.png" class="img-fluid m-0 p-0" alt="" style="width: 200px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title text-center"><b>LOGIN</b><b> WEB</b><b> SIAKAD</b></h5>
                                    <!-- <p class="card-text mb-5">See your growth and get consulting support!</p> -->
                                    <form class="form-body" action="{{url('proseslogin')}}" method="post">
                                        @csrf
                                        
                                        <div class="row g-3">

                                            <div class="col-12">
                                                <label class="form-label">USERNAME</label>
                                                <div class="ms-auto position-relative">
                                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                                    <input type="text" name="username" class="form-control radius-30 ps-5" id="inputEmailAddress">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">PASSWORD</label>
                                                <div class="ms-auto position-relative">
                                                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                                    <input type="password" name="password" class="form-control radius-30 ps-5">
                                                </div>
                                            </div>


                                            
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary radius-30">LOGIN</button>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center">
                                                <p class="mb-0">Don't have an account yet? <a href="{{url('registrasi')}}">Sign up here</a></p>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!--end page main-->

    </div>
    <!--end wrapper-->


    <!--plugins-->
    <script src="{{ url('public') }}/assets_onedash//js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets_onedash//js/pace.min.js"></script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @foreach(['success', 'warning', 'error', 'info'] as $status)
        @if (session($status))
        <script>
            swal({
                title: "{{ Str::upper($status) }}",
                text: "{{ session($status) }}!",
                icon: "{{ $status }}",
            });
        </script>
        @endif
    @endforeach


</body>

</html>