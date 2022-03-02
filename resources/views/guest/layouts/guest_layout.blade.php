<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page-title'){{'-'. config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('guest/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/guest/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('guest/assets/css/style.css')}}" />
    <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->
</head>

<body>
<main>
    <header>
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="menu-toggle"></div>
                    <div class="logo">
                        <img src="/guest/assets/images/logo-01.png">
                    </div>

                    <div class="my-nav">
                        <div class="menu">
                            <ul>
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('dashboard')}}">Portal</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>






@yield('content')





</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="fotter-content">
                    <h2>About Us</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut recusandae laboriosam praesentium quisquam voluptatibus. Rerum eligendi magnam impedit soluta voluptatem</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="fotter-content">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><i class="fal fa-chevron-double-right"></i><a href="{{route('index')}}">Home</a></li>
                        <li><i class="fal fa-chevron-double-right"></i><a href="{{route('dashboard')}}">Portal</a></li>
                        <li><i class="fal fa-chevron-double-right"></i><a href="{{route('about')}}">About Us</a></li>
                        <li><i class="fal fa-chevron-double-right"></i><a href="{{route('contact_us')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="fotter-content">
                    <h2>Address</h2>
                    <ol>
                        <li><i class="fal fa-map-marker-check"></i>First Floor,Vincent Plaza, Kuzhithurai,Marthandam, Kanyakumari Dist
                            Tamilnadu, India - 629163</li>

                        <li><i class="fal fa-envelope"></i>sales@smarteyeapps.com</li>
                        <li><i class="fal fa-phone-volume"></i>+91 9751791203</li>
                    </ol>
                </div>
            </div>
            <div class="col-12">
                <div class="end-footer">
                    <p>Copyright ©2020 smarteyeapps. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>
</html>