<!DOCTYPE html>
<html lang="en" dir="ltr">

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





        .bg-image {
            /* The image used */
            background-image: url({{asset('images/g.jpg')}});

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

            /* Add the overlay effect */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: -1; /* Keep the image behind the content */
        }





        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: "Inter", Arial, Helvetica, sans-serif;
        }
        .form-mb-5 {
            margin-bottom: 20px;
        }
        .form-pt-3 {
            padding-top: 12px;
        }
        .form-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .form-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;

        }
        .form-form-label {
            display: block;
            font-weight: 500;
            font-size: 16px;
            color: #212121;
            margin-bottom: 12px;
        }
        .form-form-label-2 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .form-form-input {
            width: 100%;
            padding: 12px 24px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
            background: white;
            font-weight: 500;
            font-size: 16px;
            color: #6b7280;
            outline: none;
            resize: none;
        }
        .form-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .form-btn {
            text-align: center;
            font-size: 16px;
            border-radius: 6px;
            padding: 14px 32px;
            border: none;
            font-weight: 600;
            background-color: #BCAAA4;
            color: #EEEEEE;
            width: 100%;
            cursor: pointer;
        }
        .form-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .form--mx-3 {
            margin-left: -12px;
            margin-right: -12px;
        }
        .form-px-3 {
            padding-left: 12px;
            padding-right: 12px;
        }
        .flex {
            display: flex;
        }
        .flex-wrap {
            flex-wrap: wrap;
        }
        .w-full {
            width: 100%;
        }
        @media (min-width: 540px) {
            .sm\:w-half {
                width: 50%;
            }
        }



    </style>
</head>

<body>
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
<div class="bg-image"></div>

<br>

<div class="form-main-wrapper">

    <div class="form-form-wrapper">
        <form method="POST" action="{{ route('submitRequest') }}">
            @csrf
            <input type="hidden" name="type" value="Rent" id="type">

            <div class="form-mb-5">
                <label for="name" class="form-form-label"> Full Name </label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Full Name"
                    class="form-form-input"
                    required
                />
            </div>
            <div class="form-mb-5">
                <label for="phoneNumber" class="form-form-label"> Phone Number </label>
                <input
                    type="text"
                    name="phoneNumber"
                    id="phoneNumber"
                    placeholder="Enter your phone number"
                    class="form-form-input"
                    required
                />
            </div>
            <div class="form-mb-5">
                <label for="email" class="form-form-label"> Email Address </label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email"
                    class="form-form-input"
                    required
                />
            </div>
            <div class="flex flex-wrap form--mx-3">
                <div class="w-full sm:w-half form-px-3">
                    <div class="form-mb-5 w-full">
                        <label for="dates" class="form-form-label"> Date </label>
                        <input
                            type="date"
                            name="dates"
                            id="dates"
                            class="form-form-input"
                            required
                        />
                    </div>
                </div>
                <div class="w-full sm:w-half form-px-3">
                    <div class="form-mb-5">
                        <label for="times" class="form-form-label"> Time </label>
                        <input
                            type="time"
                            name="times"
                            id="times"
                            class="form-form-input"
                            required
                        />
                    </div>
                </div>
            </div>

            <div class="form-mb-5 form-pt-3">
                <label class="form-form-label form-form-label-2" >
                    Request Details
                </label>
                <div class="flex flex-wrap form--mx-3">
                    <div class="w-full sm:w-half form-px-3">
                        <div class="form-mb-5">
                            <input
                                type="text"
                                name="area"
                                id="area"
                                placeholder="Enter Area"
                                class="form-form-input"
                                required
                            />
                        </div>
                    </div>
                    <div class="w-full sm:w-half form-px-3">
                        <div class="form-mb-5">
                            <input
                                type="text"
                                name="city"
                                id="city"
                                placeholder="Enter City"
                                class="form-form-input"
                                required
                            />
                        </div>
                    </div>
                    <div class="w-full sm:w-half form-px-3">
                        <div class="form-mb-5">
                            <input
                                type="number"
                                name="minCost"
                                id="minCost"
                                placeholder="Min. Cost"
                                class="form-form-input"
                                required
                            />
                        </div>
                    </div>
                    <div class="w-full sm:w-half form-px-3">
                        <div class="form-mb-5">
                            <input
                                type="number"
                                name="maxCost"
                                id="maxCost"
                                placeholder="Max. Cost"
                                class="form-form-input"
                                required
                            />
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-mb-5">

                <input
                    type="text"
                    name="comments"
                    id="comments"
                    placeholder="Other Details."
                    class="form-form-input"

                />
            </div>
            <div>
                <button class="form-btn" type="submit">Submit Request</button>
            </div>
        </form>
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
