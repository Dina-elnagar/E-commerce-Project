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


*, *:before, *:after {
  box-sizing: border-box;
}

body {
  background: white;
  color: rgba(0, 0, 0, 0.7);
  font-family: 'Lato', sans-serif;
}

h1, h2 {
  font-family: 'Fjalla One', sans-serif;
  margin-top: 0;
  text-transform: uppercase;
}

figure {
  margin: 0;
}

img {
  height: auto;
  width: 100%;
}

.wrapper {
  display: grid;
  grid-gap: 50px;
  grid-template-columns: 1fr 2fr;
  grid-auto-rows: minmax(100px, auto);
  margin: 24px;
  max-width: 1000px;
  position: relative;
}

.wrapper > * {
  grid-column: 1 / span 2;
}

.header {
  font-size: 1.5em;
  grid-row: 1 / 2;
}

header:after {
  background: rgba(229, 221, 197, 0.7);
  content: "";
  display: block;
  height: 20px;
  width: auto;
}

.article {
  text-align: right;
}

.featured-image-1 {
  grid-row: 2 / 3;
}

.number-1 {
  grid-row: 2 / 4;

}

.featured-image-2, .number-2 {
  grid-row: 4 / 5;
}

.number-1, .number-4 {
  align-self: end;
  color: rgba(229, 221, 197, 0.7);
  font-family: 'Fjalla One', sans-serif;
  font-size: 480px;
  line-height: 480px;
  grid-column: 1 / 2;
}

.article-1, .article-4 {
  grid-column: 2 / 3;
}

.featured-image-2, .number-2 {
  align-self: end;
}

.number-2 {
  color:  rgba(229, 221, 197, 0.7);
  font-size: 200px;
  justify-self: end;
  line-height: 160px;
}

.number-3 {
  background: rgba(229, 221, 197, 0.7);
  border-radius: 130px;
  color: white;
  font-family: 'Fjalla One', sans-serif;
  font-size: 100px;
  height: 130px;
  line-height: 130px;
  position: absolute;
  grid-row: 6 / 7;
  right: -20px;
  text-align: center;
  top: -20px;
  width: 130px;
}

.featured-image-3 img {
  height: 100%;
}

.number-4 {
  font-size: 320px;
  left: -20px;
  line-height: 320px;
  position: absolute;
}

@media (min-width: 600px) {

  .wrapper {
    grid-template-columns: repeat(2, 1fr 2fr);
    margin: 24px auto;
  }

  .header {
    grid-column: 3 / 5;
    width: 70%;
  }

  .featured-image-1 {
    grid-row: 1 / 3;
  }

  .article-1 {
    grid-row: 3 / 4;
  }

  .article-2 {
    grid-column: 4 / 5;
    grid-row: 4 / 5;
  }

  .featured-image-2, .number-2 {
    grid-column: 3 / 5;
    grid-row: 2 / 4;
  }

  .featured-image-3, .number-3 {
    grid-row: 4 / 6;
  }

  .featured-image-4, .number-4 {
    grid-column: 3 / 5;
    grid-row: 5 / 6;
  }

  .number-4 {
    font-size: 320px;
    grid-row: 5 / 7;
  }

  .article-3, .article-4 {
    grid-row: 6 / 7;
  }

  .article-4 {
    grid-column: 4 / 5;
  }

}



    </style>
</head>

<body>
    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="#">Redefine</a></div>
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

<div class="wrapper">
  <header class="header"><h1>The Future Of <br> Real Estate Field</h1></header>
  <figure class="featured-image-1">
      <img src="{{asset('images/x.jpg')}}" >
   </figure>
  <div class="number-1">1</div>
  <article class="article article-1">
    <h2>THE PERFECT<br>LOCATION</h2>
    <p>Ideally located in the New Alamein City, where beachside living is a way of life. It neighbors the Alamein Lagoon and overlooks Alamein Towers.</p>
  </article>
  <figure class="featured-image-2">
      <img src="{{asset('images/ooooo.jpg')}}">
   </figure>
  <div class="number-2">2</div>
  <article class="article article-2">
    <h2>Arizona<br>Muse</h2>
    <p>The Essence of Elegance - Unveiling Our Latest Furniture Collection<br>Indulge in Timeless Sophistication with Our Navy Blue Elegance Collection, Where Luxury Meets Comfort.</p>
  </article>
  <figure class="featured-image-3">
      <img src="{{asset('images/3.jpg')}}" >
   </figure>
  <div class="number-3">3</div>
  <article class="article article-3">
    <h2>Zahra<br>North Coast</h2>
    <p>Zahra is a mega residential, touristic and hospitality development by Morshedy Group located at KM 124 on Egypt’s North Coast.
It is only a stone’s throw either way from Hacienda Bay, a mere 15-minute drive from Al-Alamein Airport and overlooks the white sands and pristine waters of the Mediterranean. With both a unique and convenient location, the project is set to become a landmark development, capitalizing on the many rewards this setting has to offer; including a mild climate, abundant sunshine and a refreshing sea breeze.</p>
  </article>
  <figure class="featured-image-4">
      <img src="{{asset('images/c.jpg')}}" >
   </figure>
  <div class="number-4">4</div>
  <article class="article article-4">
    <h2>Japandi<br>Elevating Home Vibes</h2>
    <p>Discover why Japandi designs are the ultimate choice for creating a cozy and inviting atmosphere in your client's home, blending the serene simplicity of Japanese aesthetics with the warmth and functionality of Scandinavian design.</p>
  </article>
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
