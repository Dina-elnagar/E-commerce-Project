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


img {
  width: 100%;
}

.masonry {
	column-count: 4;
	column-gap: 16px;
}

.masonry .mItem {
  display: inline-block;
  margin-bottom: 16px;
  width: 100%;
padding:1px;
}

@media (max-width: 1199px) {
  .masonry {
    column-count: 3;
  }
}

@media (max-width: 991px) {
  .masonry {
    column-count: 2;
  }
}

@media (max-width: 767px) {
  .masonry {
    column-count: 1;
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
    <br>
<br>
<div class="masonry">
  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e22.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e4.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e9.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e8.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e2.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e5.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e3.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e7.jpg')}}">
  </div>
  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e10.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e3.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e6.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e27.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e34.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e19.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e32.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e24.jpg')}}">
  </div>
  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e13.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e21.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e16.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e25.jpg')}}">
  </div>
  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e33.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e29.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e18.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e12.jpg')}}">
  </div>
  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e31.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e1.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e20.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e30.jpg')}}">
  </div>
  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e11.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e15.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e17.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e36.jpg')}}">
  </div>
  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e23.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e35.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e28.jpg')}}">
  </div>

  <div class="mItem">
    <img src=" {{asset('images/intImages/card2/e24.jpg')}}">
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
