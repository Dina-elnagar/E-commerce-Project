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








@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600);

html body * {
  box-sizing: border-box;
  font-family: 'Open Sans', Arial, sans-serif;
}
.gridywrap div[class*=gridy] {
  background: #eee;
  box-shadow: inset 0 0 0 1px #ddd;
  padding: 15px; float: left;
  position: relative;
}
.gridywrap .gridy-1,
.gridywrap .gridy-2,
.gridywrap .gridy-3 {width: 320px;
  overflow: hidden;}

.gridywrap .gridy-1 {width: 100%;}
.gridywrap .gridy-2 {width: 100%;}
.gridywrap .gridy-3 {width: 100%;}

.gridywrap .gridyhe-1 {height: 520px;}
.gridywrap .gridyhe-2 {height: 520px;}


@media screen and (min-width: 840px) {
  .gridywrap .gridyhe-2 {height: 840px;}
  .gridywrap {
    width: 100%;
  }
  .gridywrap .gridy-1 {width: 50%;}
  .gridywrap .gridy-2 {width: 50%;}
  .gridywrap .gridy-3 {width: 100%;}
}
@media screen and (min-width: 1024px) {
  .gridywrap .gridy-1 {width: 33.3%;}
  .gridywrap .gridy-2 {width: 66.6%;}
  .gridywrap .gridy-3 {width: 100%;}
  .gridywrap .gridyhe-2 {height: 1040px;}
}

/*styling*/
.gridywrap .gridimg {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  background-position: center center;
  background-size: cover;
}
.gridywrap .gridimg img {
  width: 100%;
}
.gridywrap .gridinfo {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.7);
  text-align: center;
  transition: all 0.8s;
}
.gridywrap .gridinfo h3 {
  font-size: 24px;
  color: #EEEEEE;
  font-weight: bold;
  text-transform: uppercase;
  margin: 130px 0 20px;
  position: relative;
}
.gridywrap .gridinfo h3:after {
  content: '';
  width: 25px;
  border-top: 4px solid #EEEEEE;
  display: block;
  margin: 0 auto;
  margin-top: 25px;
}
.gridywrap .gridinfo .gridmeta {
  transition-delay: 0.25s;
}
.gridywrap .gridinfo .gridmeta p {
  display: inline-block;
  font-size: 15px;
  color: #212121;
  font-weight: bold;
  margin-bottom: 15px;
}
.gridywrap .gridinfo .gridmeta p i {
  margin-right: 5px;
}
.gridywrap .gridinfo .gridmeta p.gridwho {
  margin-left: 25px;
}
.gridywrap .gridinfo p.gridexerpt {
  width: 60%;
  margin: 0 auto;
  line-height: 22px;
  margin-bottom: 25px;
  color: #EEEEEE;
  font-weight: bold;
  transition-delay: 0.5s;
}

.gridywrap .gridinfo * {
  opacity: 0;
  transition: all 0.8s;
}
.gridywrap .gridinfo h3 {
  opacity: 1;
}
.gridywrap .gridinfo .grid-btn {
  color: #EEEEEE;
  text-decoration: none;
  margin: 0 auto;
  width: 35px;
  height: 35px;
  line-height: 35px;
  border-radius: 25px;
  border: 1px solid #EEEEEE;
  display: block;
  overflow: hidden;
}
.gridywrap .gridinfo .grid-btn:hover {
  width: 75px;
  background: rgba(0,0,0,0.3);
}
.gridywrap .gridinfo .grid-btn span {
  opacity: 0;
  display: none;
  transition: opacity 0.8s;
}
.gridywrap .gridinfo .grid-btn:hover span {
  opacity: 1;
  display: inline;
}
.gridywrap .gridinfo .grid-btn:hover i {
  opacity: 0;
  display: none;
}

.gridywrap .gridinfo:hover * {
  opacity: 0.7;
}
.gridywrap .gridinfo:hover p {
  opacity: 1;
}
.gridywrap .gridinfo:hover {
 background: rgba(229, 221, 197, 0.7);

}
.gridywrap .gridinfo:hover h3 {
  margin-top: 70px;
  opacity: 1;
}

.intro {
  text-align: center;
  padding: 25px;
  background: #111;
  color: #ddd;
}
h1 {
  font-size: 48px;
  font-weight: 300;
  padding: 15px 0;
}
.intro p {
  opacity: 0.5;
  font-size: 12px;
}
.intro p a {
  color: #FA8CD3;
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



<div class="gridywrap">
  <div class="gridy-2 gridyhe-1">

     <div class="gridimg" style="background-image: url({{asset('images/4.jpg')}})">&nbsp;</div>

    <div class="gridinfo">
      <h3> the Best Payment Plan You Can Get</h3>
      <div class="gridmeta">
        <p class="gridwhen"><i class="fa fa-clock-o"></i> 01:13 17th mar 2024</p>
        <p class="gridwho"><i class="fa fa-user"></i> Style Home</p>
      </div>
      <p class="gridexerpt">The Icon Residence, New Cairo — Apartments, Villas, Townhouses, Penthouses, Buildings and Commercial Properties Available.</p>
      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  <div class="gridy-1 gridyhe-1">
     <div class="gridimg" style="background-image: url({{asset('images/h.jpg')}})">&nbsp;</div>

    <div class="gridinfo">
      <h3>New Collection</h3>
      <div class="gridmeta">
        <p class="gridwhen"><i class="fa fa-clock-o"></i> 10:54 23th Feb 2024</p>
        <p class="gridwho"><i class="fa fa-user"></i> Aster Company</p>
      </div>
      <p class="gridexerpt">Aster Design is specialized in the market of 20th century decorative art and design offering a service of sourcing and expertise.</p>
      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>

  <div class="gridy-1 gridyhe-2">
   <div class="gridimg" style="background-image: url({{asset('images/t.jpg')}})">&nbsp;</div>

    <div class="gridinfo">
      <h3>Tips</h3>
      <div class="gridmeta">
        <p class="gridwhen"><i class="fa fa-clock-o"></i> 09:02 4th Apr 2024</p>
        <p class="gridwho"><i class="fa fa-user"></i> Be Concept</p>
      </div>
      <p class="gridexerpt">There's an order to decorating a space. Designers share their 9 steps learn more about it.</p>
      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  <div class="gridy-2 gridyhe-1">
      <div class="gridimg" style="background-image: url({{asset('images/13.jpg')}})">&nbsp;</div>

    <div class="gridinfo">
      <h3>Item Title</h3>
      <div class="gridmeta">
        <p class="gridwhen"><i class="fa fa-clock-o"></i> 19:38 19th Jan 2024</p>
        <p class="gridwho"><i class="fa fa-user"></i> Kabbani Furniture</p>
      </div>
      <p class="gridexerpt">At Qabani Furniture, we'll help you furnish your home with modern and contemporary designs. We have a wide range of sofas, corner units, bedrooms, dining rooms, living rooms, mattresses, and furniture.</p>
      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  <div class="gridy-1 gridyhe-1">
      <div class="gridimg" style="background-image: url({{asset('images/s.jpg')}})">&nbsp;</div>

    <div class="gridinfo">
      <h3>New Collection</h3>
      <div class="gridmeta">
        <p class="gridwhen"><i class="fa fa-clock-o"></i> 10:42 3rd May 2024</p>
        <p class="gridwho"><i class="fa fa-user"></i> Aster Company</p>
      </div>
      <p class="gridexerpt">Aster Design is specialized in the market of 20th century decorative art and design offering a service of sourcing and expertise.</p>

      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
    </div>
  </div>
  <div class="gridy-1 gridyhe-1">
     <div class="gridimg" style="background-image: url({{asset('images/d.jpg')}})">&nbsp;</div>

    <div class="gridinfo">
      <h3>Big sale</h3>
      <div class="gridmeta">
        <p class="gridwhen"><i class="fa fa-clock-o"></i> 13:26 7th Feb 2024</p>
        <p class="gridwho"><i class="fa fa-user"></i> Dove ARCHITECTS AND INTERIOR DESIGNERS</p>
      </div>
      <p class="gridexerpt">DOVE architecture & DOVE interiors are a RIBA chartered architecture and interior design practice in Cheshire. A vibrant and growing company with an impressive reputation to equal its high standard of desig</p>
      <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
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
