<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top shadow">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">All Course</a></li>
                @if(Session::get('student_id'))
                    <li>
                        <a href="{{route('user-login')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            {{Session::get('student_name')}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{route('user-login')}}" class="nav-link">Login</a></li>
                    <li><a href="{{route('user-register')}}" class="nav-link">Registration</a></li>
                @endif
            </ul>
        </div>
    </nav>

@yield('body')

    <footer class="py-5 pb-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>About Institute</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto culpa delectus distinctio dolor eius excepturi fugiat, inventore itaque minima nihil praesentium quae quam saepe temporibus totam vel! Illum, reiciendis.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Popular Link</h3>
                        <hr/>
                        <ol class="nav">
                            <li><a href="" class="nav-link">Popular course One</a></li>
                            <li><a href="" class="nav-link">Popular course One</a></li>
                            <li><a href="" class="nav-link">Popular course One</a></li>
                            <li><a href="" class="nav-link">Popular course One</a></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Follow Us On</h3>
                        <hr/>
                        <ul class="nav">
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="bg-white mt-5"/>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center mb-0 text-white">Copyright@2022, All right recieve by BASIS</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('/')}}/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}/js/bootstrap.js"></script>

</body>
</html>
