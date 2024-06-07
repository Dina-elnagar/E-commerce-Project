{{--<div class="p-6 lg:p-8 bg-white border-b border-gray-200">--}}
{{--    <x-application-logo class="block h-12 w-auto" />--}}

{{--    <h1 class="mt-8 text-2xl font-medium text-gray-900">--}}
{{--        Welcome to your Jetstream application!--}}
{{--    </h1>--}}

{{--    <p class="mt-6 text-gray-500 leading-relaxed">--}}
{{--        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed--}}
{{--        to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe--}}
{{--        you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel--}}
{{--        ecosystem to be a breath of fresh air. We hope you love it.--}}
{{--    </p>--}}
{{--</div>--}}

{{--<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">--}}
{{--    <div>--}}
{{--        <div class="flex items-center">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />--}}
{{--            </svg>--}}
{{--            <h2 class="ml-3 text-xl font-semibold text-gray-900">--}}
{{--                <a href="https://laravel.com/docs">Documentation</a>--}}
{{--            </h2>--}}
{{--        </div>--}}

{{--        <p class="mt-4 text-gray-500 text-sm leading-relaxed">--}}
{{--            Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.--}}
{{--        </p>--}}

{{--        <p class="mt-4 text-sm">--}}
{{--            <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700">--}}
{{--                Explore the documentation--}}

{{--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">--}}
{{--                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />--}}
{{--                </svg>--}}
{{--            </a>--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <div class="flex items-center">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">--}}
{{--                <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />--}}
{{--            </svg>--}}
{{--            <h2 class="ml-3 text-xl font-semibold text-gray-900">--}}
{{--                <a href="https://laracasts.com">Laracasts</a>--}}
{{--            </h2>--}}
{{--        </div>--}}

{{--        <p class="mt-4 text-gray-500 text-sm leading-relaxed">--}}
{{--            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.--}}
{{--        </p>--}}

{{--        <p class="mt-4 text-sm">--}}
{{--            <a href="https://laracasts.com" class="inline-flex items-center font-semibold text-indigo-700">--}}
{{--                Start watching Laracasts--}}

{{--                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 fill-indigo-500">--}}
{{--                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />--}}
{{--                </svg>--}}
{{--            </a>--}}
{{--        </p>--}}
{{--    </div>--}}



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Responsive Drop Down Navigation Menu | Redefine</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            margin: 0;
            /* Remove default margin */
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 70px;
            background: #E5DDC5;
            /* Changed color */
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            z-index: 99;
        }

        nav .navbar {
            height: 100%;
            max-width: 1250px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: auto;
            padding: 0 50px;
        }

        .navbar .logo a {
            font-size: 50px;
            color: #fff;
            text-decoration: none;
            font-weight: 300;
            font-family: 'Brush Script MT', cursive;
            /* Changed font */
        }

        nav .navbar .nav-links {
            line-height: 70px;
            height: 100%;
        }

        nav .navbar .links {
            display: flex;
        }

        nav .navbar .links li {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            list-style: none;
            padding: 0 14px;
        }

        nav .navbar .links li a {
            height: 100%;
            text-decoration: none;
            white-space: nowrap;
            color: #fff;
            font-size: 15px;
            font-weight: 500;
        }

        .links li:hover .htmlcss-arrow,
        .links li:hover .js-arrow {
            transform: rotate(180deg);
        }

        nav .navbar .links li .arrow {
            height: 100%;
            width: 22px;
            line-height: 70px;
            text-align: center;
            display: inline-block;
            color: #fff;
            transition: all 0.3s ease;
        }

        nav .navbar .links li .sub-menu {
            position: absolute;
            top: 70px;
            left: 0;
            line-height: 40px;
            background: #E5DDC5;
            /* Changed color */
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            border-radius: 0 0 4px 4px;
            display: none;
            z-index: 2;
        }

        nav .navbar .links li:hover .htmlCss-sub-menu,
        nav .navbar .links li:hover .js-sub-menu {
            display: block;
        }

        .navbar .links li .sub-menu li {
            padding: 0 22px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar .links li .sub-menu a {
            color: #fff;
            font-size: 15px;
            font-weight: 500;
        }

        .navbar .links li .sub-menu .more-arrow {
            line-height: 40px;
        }

        .navbar .links li .sub-menu .more-sub-menu {
            position: absolute;
            top: 0;
            left: 100%;
            border-radius: 0 4px 4px 4px;
            z-index: 1;
            display: none;
        }

        .links li .sub-menu .more:hover .more-sub-menu {
            display: block;
        }

        .navbar .search-box {
            position: relative;
            height: 40px;
            width: 40px;
        }

        .navbar .search-box i {
            position: absolute;
            height: 100%;
            width: 100%;
            line-height: 40px;
            text-align: center;
            font-size: 22px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .navbar .search-box .input-box {
            position: absolute;
            right: calc(100% - 40px);
            top: 80px;
            height: 60px;
            width: 300px;
            background: #E5DDC5;
            /* Changed color */
            border-radius: 6px;
            opacity: 0;
            pointer-events: none;
            transition: all 0.4s ease;
        }

        .navbar.showInput .search-box .input-box {
            top: 65px;
            opacity: 1;
            pointer-events: auto;
            background: #E5DDC5;
            /* Changed color */
        }

        .search-box .input-box::before {
            content: '';
            position: absolute;
            height: 20px;
            width: 20px;
            background: #E5DDC5;
            /* Changed color */
            right: 10px;
            top: -6px;
            transform: rotate(45deg);
        }

        .search-box .input-box input {
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 4px;
            transform: translate(-50%, -50%);
            height: 35px;
            width: 280px;
            outline: none;
            padding: 0 15px;
            font-size: 16px;
            border: none;
        }

        .navbar .nav-links .sidebar-logo {
            display: none;
        }

        .navbar .bx-menu {
            display: none;
        }

        @media (max-width:920px) {
            nav .navbar {
                max-width: 100%;
                padding: 0 25px;
            }

            nav .navbar .logo a {
                font-size: 27px;
            }

            nav .navbar .links li {
                padding: 0 10px;
                white-space: nowrap;
            }

            nav .navbar .links li a {
                font-size: 15px;
            }
        }

        @media (max-width:800px) {
            nav .navbar .bx-menu {
                display: block;
            }

            nav .navbar .nav-links {
                position: fixed;
                top: 0;
                left: -100%;
                display: block;
                max-width: 270px;
                width: 100%;
                background: #E5DDC5;
                /* Changed color */
                line-height: 40px;
                padding: 20px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                transition: all 0.5s ease;
                z-index: 1000;
            }

            .navbar .nav-links .sidebar-logo {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .sidebar-logo .logo-name {
                font-size: 25px;
                color: #fff;
            }

            .sidebar-logo i,
            .navbar .bx-menu {
                font-size: 25px;
                color: #fff;
            }

            nav .navbar .links {
                display: block;
                margin-top: 20px;
            }

            nav .navbar .links li .arrow {
                line-height: 40px;
            }

            nav .navbar .links li {
                display: block;
            }

            nav .navbar .links li .sub-menu {
                position: relative;
                top: 0;
                box-shadow: none;
                display: none;
            }

            nav .navbar .links li .sub-menu li {
                border-bottom: none;
            }

            .navbar .links li .sub-menu .more-sub-menu {
                display: none;
                position: relative;
                left: 0;
            }

            .navbar .links li .sub-menu .more-sub-menu li {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .links li:hover .htmlcss-arrow,
            .links li:hover .js-arrow {
                transform: rotate(0deg);
            }

            .navbar .links li .sub-menu .more-sub-menu {
                display: none;
            }

            .navbar .links li .sub-menu .more span {
                display: flex;
                align-items: center;
            }

            .links li .sub-menu .more:hover .more-sub-menu {
                display: none;
            }

            nav .navbar .links li:hover .htmlCss-sub-menu,
            nav .navbar .links li:hover .js-sub-menu {
                display: none;
            }

            .navbar .nav-links.show1 .links .htmlCss-sub-menu,
            .navbar .nav-links.show3 .links .js-sub-menu,
            .navbar .nav-links.show2 .links .more .more-sub-menu {
                display: block;
            }

            .navbar .nav-links.show1 .links .htmlcss-arrow,
            .navbar .nav-links.show3 .links .js-arrow {
                transform: rotate(180deg);
            }

            .navbar .nav-links.show2 .links .more-arrow {
                transform: rotate(90deg);
            }
        }

        @media (max-width:370px) {
            nav .navbar .nav-links {
                max-width: 100%;
            }
        }

        body {
            font: 100% system-ui, sans-serif;
            margin: 0 auto;
            width: 100%;
        }
        .hero {
            position: relative;
            background-image: url({{ asset('images/g.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 100vh;
        }
        .hero_content {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 65%;
            transform: translate(0%, -50%);
            transition: all ease 0.3s;
        }
        h1 {
            font-size: 60px;
            margin: 0;
            font-weight: 900;
            color: #212121;
        }
        .explore {
            text-align: left;
        }
        button {
            cursor: pointer;
            margin: 1rem;
            color: white;
            letter-spacing: 2px;
            border: none;
            background-color: #BCAAA4;
            border-radius: 30px;
            width: 120px;
            height: 50px;
        }
        p {
            margin: 0;
            font-size: 15px;
            text-decoration: none;
            color: #212121;

        }
        .picture {
            margin: 1rem;
            position: absolute;
            bottom: 0;
            right: 0;
        }
        a {
            color: black;
            cursor: pointer;
            text-decoration: none;
        }
        @media (max-width: 1090px) {
            h1 {
                font-size: 40px;
            }
        }
        @media (max-width: 700px) {
            .hero_content {
                background-color: #ffedde;
                width: 400px;
                padding: 20px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            .explore {
                text-align: center;
            }
        }




    </style>
</head>

<body class="antialiased">

<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="{{url('/')}}">Redefine</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name" style="font-family: 'Brush Script MT', cursive;">Redefine</span>
                <!-- Changed font -->
                <i class='bx bx-x'></i>
            </div>
            <ul class="links">
                <li><a href="{{url('/')}}">Home</a></li>

                <li><a href="{{url('/buy')}}">Buy</a></li>

                <li><a href="{{url('/rent')}}">Rent</a></li>
                <li>
                    <a href="{{url('/blogs')}}">Blog</a>
                </li>
                <li>
                    <a href="{{url('/ourServices')}}">Our Services</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="{{url('/interior')}}">Interior Designing</a></li>
                        <li><a href="{{url('/furniture')}}">Furniture</a></li>
                        <li><a href="{{url('/budget')}}">Budgeting</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/aboutUs')}}">About Us</a></li>

                @if (Route::has('login'))
                    @auth
{{--                        <li>    <a href="{{ url('/dashboard') }}" >Dashboard</a></li>--}}
                        <li>    <a href="{{ url('/logout') }}" >Log Out</a></li>
                    @else
                        <li>   <a href="{{ route('login') }}" >Log in</a></li>

                    @endauth
                @endif
            </ul>
        </div>
        <div class="search-box">
            <i class='bx bx-search'></i>
            <div class="input-box">
                <input type="text" placeholder="Search...">
            </div>
        </div>
    </div>
</nav>
<br>

<div class="hero">
    <div class="hero_content">
        <h1>Creative</br>solutions.</h1>
        <div class="explore"><a href="{{url('/ourServices')}}">
                <p><button>EXPLORE</button> Be <strong>unique.</strong></p>
        </div>
    </div>


    <script>
        let navbar = document.querySelector(".navbar");
        let searchBox = document.querySelector(".search-box .bx-search");
        let menuOpenBtn = document.querySelector(".navbar .bx-menu");
        let menuCloseBtn = document.querySelector(".nav-links .bx-x");
        let navLinks = document.querySelector(".nav-links");
        let htmlcssArrow = document.querySelector(".htmlcss-arrow");
        let moreArrow = document.querySelector(".more-arrow");
        let jsArrow = document.querySelector(".js-arrow");

        searchBox.addEventListener("click", () => {
            navbar.classList.toggle("showInput");
            searchBox.classList.toggle("bx-x");
        });

        menuOpenBtn.onclick = function () {
            navLinks.style.left = "0";
        };

        menuCloseBtn.onclick = function () {
            navLinks.style.left = "-100%";
        };

        htmlcssArrow.onclick = function () {
            navLinks.classList.toggle("show1");
        };

        moreArrow.onclick = function () {
            navLinks.classList.toggle("show2");
        };

        jsArrow.onclick = function () {
            navLinks.classList.toggle("show3");
        };




    </script>
</body>

</html>
