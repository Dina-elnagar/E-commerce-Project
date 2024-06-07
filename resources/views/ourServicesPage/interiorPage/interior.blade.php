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

@import url('https://fonts.googleapis.com/css?family=Poppins:200,400,800,900&display=swap');
$body-color: blue;
$poppins: 'Poppins', sans-serif;
body {
  margin: 0;
  padding: 0;
  background: #333;
  justify-content: center;
}
.hero {
 background: url({{asset('images/11.jpg')}});
  position: relative;
  display: flex;
  align-items: center;
  justify-content: left;
  font-family: $poppins;
  height: 70vh;
  width: 100vw;
  .overlay {
    position: absolute;
    top:0;
    left:0;
    right: 0;
   // background: rgb(19,58,83);
   // background: linear-gradient(220deg, rgba(19,58,83,0.85) 0%, rgba(208,97,40,0.85) 100%);
  .content {
      display: flex;
      flex-direction:column;
      justify-content: center;
      height: 70vh;
      width: 70vw;
      margin: auto;
      transform-origin: left;
      animation: reveal 1s ease-in-out forwards;
    h1 {
      font-size: 90px;
      line-height: 0.9;
      margin-bottom: 0px;
      color: white;
    }
    p {
      font-size: 24px;
      color: white;
    }
  }

button {
    position: absolute;
    bottom: 20px; /* Adjust distance from bottom as needed */
    right: 20px;  /* Adjust distance from right as needed */
    padding: 10 px 20px; /* Adjust padding as needed */
    background-color:rgba(161, 136, 127, 0.4); /* Background color */
    color: white; /* Text color */
    border: none;
    border-radius: 5	px; /* Rounded corners */
    font-size: 16px; /* Font size */

    cursor: pointer;
}

button:hover {
            background-color: rgba(161, 136, 127, 1); /* Darker background on hover (full opacity) */

        }


  &:before {
        content: '';
        position: absolute;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        background: #F1EEDC;
        z-index: 3;
        animation: reveal .5s reverse forwards;
        animation-delay: .5s;
        transform-origin: ;
    }
    &:after {
        content: '';
        position: absolute;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        background: #E5DDC5;
        z-index: 2;
        animation: reveal 0.7s reverse forwards;
        animation-delay: .7s;
        transform-origin: left;
    }
  }
}
@keyframes reveal {
  0% {
    transform: scaleX(0);
  }
  100% {
    transform: scaleX(1);
  }
}

:root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  background-color: white;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 100%;
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  border-radius: calc(var(--curve) * 1px);
  background-color: rgba(245, 245, 245, 0.5); /* 50% transparent */
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}
.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;
 background-color: rgba(245, 245, 245, 0.2); /* 50% transparent */
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}


.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #1B1B1B;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: Goudy Old Style;
  font-size: .8em;
  color:#F1EEDC;
}

.card__status {
  font-size: .8em;
  color:#D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #424242;
  font-family: Goudy Old Style;
  font-size:18px;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
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
                    <form id="searchForm">
                        <input type="text" id="searchInput" placeholder="Search...">
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>

<section class="hero">
  <div class="overlay">
      <div class="content">
        <h1>creative <br>solutions.</h1>
        <p>Creating space, Redefining Luxury.</p>
  <button>
  <a href="{{url('/interiorRequest')}}" style="text-decoration: none; color: inherit;">Submit Request</a>
</button>

      </div>
  </div>
</section>
<Br>
<br>

<ul class="cards">

  <li>
    <a href="{{url('/intCard1')}}" class="card">
      <img src="{{asset('images/j1.jpg')}}" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">

          <img class="card__thumb" src="{{asset('images/j.png')}}" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Japandi Supply House</h3>

          </div>
        </div>
        <p class="card__description">Japandi is a blend of Japanese minimalism & Scandinavian cozy. Explore our site to find Japandi for your home & daily rituals inspiring calm, serene living.</p>
      </div>
    </a>
  </li>

<li>
    <a href="{{url('/intCard2')}}" class="card">
      <img src="{{asset('images/k.jpg')}}" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">

          <img class="card__thumb" src="{{asset('images/e1.jpg')}}" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Esita Group</h3>

          </div>
        </div>
        <p class="card__description">Our Kitchens Are Tested by Experts in Laboratories under Extreme Conditions. Transform your space with the latest in modern kitchen aesthetics.</p>
      </div>
    </a>
  </li>

<li>
    <a href="{{url('/intCard3')}}" class="card">
      <img src="{{asset('images/uu.jpg')}}" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">

          <img class="card__thumb" src="{{asset('images/u.jpg')}}" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Brunner</h3>

          </div>
        </div>
        <p class="card__description">Brunner is one of the leading contract office furniture and interior designing manufacturers in Europe.State of the art design and ideal interior decoration.</p>
      </div>
    </a>
  </li>

</ul>


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

    <script>
        const searchForm = document.getElementById('searchForm');
        const searchInput = document.getElementById('searchInput');
        const cards = document.querySelectorAll('.card');

        searchForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form submission
            const searchTerm = searchInput.value.toLowerCase().trim(); // Get search term and normalize it

            cards.forEach(card => {
                const cardTitle = card.querySelector('.card__title').innerText.toLowerCase(); // Get card title and normalize it
                const cardDescription = card.querySelector('.card__description').innerText.toLowerCase(); // Get card description and normalize it
                if (cardTitle.includes(searchTerm) || cardDescription.includes(searchTerm)) {
                    card.style.display = 'block'; // Show card if it contains the search term
                } else {
                    card.style.display = 'none'; // Hide card if it does not contain the search term
                }
            });
        });
    </script>


</body>

</html>
