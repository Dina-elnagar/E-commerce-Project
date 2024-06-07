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




@import url("https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght,SOFT,WONK@9..144,100..900,0..100,0..1&family=Fraunces:ital,opsz,wght,SOFT,WONK@1,9..144,100..900,0..100,0..1&display=swap");

/* Variables and page setup */

html {
	font-family: Fraunces, serif;
	font-size: 115%;
	line-height: 1.35;
	font-weight: 340;
	color: #212121;
	background: #EFEBE9;
	padding-bottom: 20vh;

	/* Typetura */
	--tt-key: html;
	--tt-max: 900;
	--tt-ease: cubic-bezier(0, 0.78, 0.53, 1);

	/* Grid */
	--max-width: 1200px;
	--columns: 6;
	--gutter: 1.5rem;

	/* Color */
	--primary: #5D4037;
	--background: #efeded;
	--background-alt: #ffffff;
	--text: #31355b;
}
@keyframes html {
	0% {
		font-size: 0%;
	}

	100% {
		font-size: 125%;
	}
}
* {
	--grid: minmax(var(--gutter), 1fr)
		repeat(
			var(--columns),
			minmax(
				0,
				calc(
					(var(--max-width) - (var(--gutter) * (var(--columns) - 1))) /
						var(--columns)
				)
			)
		)
		minmax(var(--gutter), 1fr);
}

/* Element styles */

body {
	margin: 0;
}

img {
	width: 100%;
}

/* Typography */

.masthead {
	color: var(--primary);
	mix-blend-mode: multiply;
	text-align: center;
	font-variation-settings: "WONK" 1, "SOFT" 30;
	--tt-key: masthead;
	--tt-max: 1200;
	--tt-ease: ease-in-out;
	margin: 0.5em 0 -0.5em;
}
@keyframes masthead {
	0% {
		font-size: 1rem;
		margin-bottom: -0.45em;
		font-weight: 600;
	}
	100% {
		font-size: 6.5rem;
		margin-bottom: -0.375em;
		font-weight: 500;
	}
}

.primary-headline {
	--tt-key: primary-headline;
	--tt-ease: cubic-bezier(1, 0, 1, 1);
	--tt-max: 585;
	line-height: 1;
	font-variation-settings: "SOFT" 0, "WONK" 1;
	margin: 0.5rem 0;
}
@keyframes primary-headline {
	0% {
		font-size: 1rem;
		font-weight: 500;
	}
	100% {
		font-size: 4rem;
		font-weight: 300;
	}
}

.meta {
	font-style: italic;
	margin: 0.25rem 0;
	font-size: 0.75rem;
}

.entry-summary {
	margin: 0.25rem 0;
}

/* Layout */

.main {
	column-gap: var(--gutter);
	grid-template-columns: var(--grid);
	padding: var(--gutter);
}

.entry {
	margin-bottom: var(--gutter);
}

.entry,
.entry-content {
	display: flex;
	flex-direction: column;
}

.entry-img {
	aspect-ratio: 5 / 3;
	object-fit: cover;
}

.entry-date {
	order: -1;
}

/* Module overrides */

.entry-lede time {
	margin-bottom: 1rem;
}

.entry-lede time::after {
	content: "";
	display: block;
	width: calc(100% + (var(--gutter) * 2));
	height: 1px;
	margin-left: calc(var(--gutter) * -2);
	background: var(--primary);
	mix-blend-mode: multiply;
	margin-top: 0.67rem;
}

/* Breakpoints */

@media (min-width: 30em) {
	html {
		--columns: 12;
	}
	.main,
	.entry-lede {
		padding: 0;
		display: grid;
	}

	.entry,
	.trending {
		grid-column-start: 3;
		grid-column-end: span 10;
	}

	.entry-lede {
		column-gap: var(--gutter);
		grid-template-columns: var(--grid);
		grid-column-start: 1;
		grid-column-end: span 14;
		margin-bottom: 4rem;
	}

	.entry-lede > .entry-img {
		aspect-ratio: auto;
		grid-column-start: 1;
		grid-column-end: span 10;
	}

	.entry-lede .entry-content {
		grid-column-start: 3;
		grid-column-end: span 11;
		margin: -2.5rem calc(var(--gutter) * -1) 0;
		background: var(--background-alt);
		padding: 0.5rem var(--gutter) 1rem;
	}
}
@media (min-width: 50em) {
	html {
		--columns: 24;
	}

	.main::before,
	.main::after {
		content: "";
		display: block;
		grid-column-start: 8;
		grid-column-end: 26;
		grid-row-start: 2;
		grid-row-end: 3;
		background: var(--background-alt);
		margin: 0 calc(var(--gutter) * -1);
		z-index: -1;
	}
	.main::after {
		grid-column-start: 2;
		background-color: var(--primary);
		height: 1px;
		mix-blend-mode: multiply;
	}

	.entry {
		grid-column-end: span 9;
		margin-bottom: var(--gutter);
	}
	.entry:nth-child(n + 2) {
		margin-top: -2rem;
		grid-row-start: 2;
	}
	.entry:nth-child(2) {
		grid-column-start: 8;
	}
	.entry:nth-child(3) {
		grid-column-start: 17;
	}

	.entry-lede {
		column-gap: var(--gutter);
		grid-template-columns: var(--grid);
		grid-column-start: 1;
		grid-column-end: span 26;
		margin-bottom: 4rem;
	}

	.entry-lede > .entry-img {
		aspect-ratio: auto;
		grid-column-start: 1;
		grid-column-end: span 13;
	}

	.entry-lede .entry-content {
		grid-column-start: 14;
		grid-column-end: span 12;
		margin: 0.5rem 0;
		padding: 4rem 0 0;
		background: none;
	}

	.trending {
		grid-row-start: 2;
		grid-column-start: 2;
		grid-column-end: span 6;
		margin-top: var(--gutter);
		transform: translatex(calc(var(--gutter) * -1));
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

<header class="header">
	<h1 class="header-title masthead">Redefine.</h1>
</header>
<main class="main">
	<article class="entry entry-lede">
		<img class="entry-img" src="{{asset('images/abbb.jpg')}}" alt="" />
		<div class="entry-content">
			<h1 class="entry-headline primary-headline">Where Creativity Happens</h1>
			<time class="entry-date meta">October 08, 2023</time>

			<p class="entry-summary">We are Redefine and we aim to redefine the entire real estate market, When people intend to look for companies to buy their homes

The confusion of interior designs and furniture begins with them from that moment, and they start asking there and hear gossip scattered between this company and that place this designer and that exhibition without talking about the terrifying increase in prices of course! Here comes our turn!

</p>
		</div>
	</article>
	<article class="entry">
		<img class="entry-img" src="{{asset('images/abb.jpg')}}" alt="" />
<br>
		<h1 class="entry-headline primary-headline">Creative Solutions.</h1>

		<p class="entry-summary">What distinguishes us as Redefine is that we have collected for clients everything they may need in one place from searching for suitable residential units and a group of highly experienced interior designers in addition to the budget customization service in what suits the clients and suits the services required from us
</p>
	</article>

	<article class="entry">
		<img class="entry-img" src="{{asset('images/ap1.jpg')}}" alt="" />
<br>
		<h1 class="entry-headline primary-headline">whats Our New Services</h1>
		<time class="entry-date meta">January 24, 2024</time>

		<p class="entry-summary">Redefine is excited to announce the launch of two new services designed to enhance your experience and meet diverse needs. First, we are introducing budget customization, allowing clients to tailor their financial plans and investments to suit their specific circumstances and goals. This service provides flexibility and personalized support, ensuring that every customer can achieve their aspirations within their financial limits. Additionally, we are expanding our property offerings with new units available across Egypt. From the bustling streets of Cairo to the serene beaches of Alexandria, our extensive portfolio now includes a variety of residential and commercial properties. This expansion aims to provide more options and greater convenience for clients seeking their ideal property in prime locations throughout the country.</p>
	</article>
	<section class="trending">
		<article class="trending-entry">
			<time class="trending-entry-date meta">Oct 24, 2023</time>
			<h1 class="trending-entry-headline primary-headline">Started to make deals with talnted interior designers.</h1>

		</article>
<br>
		<article class="trending-entry">
			<time class="trending-entry-date meta">Nov 17, 2023</time>
			<h1 class="trending-entry-headline primary-headline">Deep sreaching for the best sources for luxury and high quality furniture that can satisfy our clintes.</h1>
		</article>
<br>
		<article class="trending-entry">
			<time class="trending-entry-date meta">Nov 30, 2023</time>
			<h1 class="trending-entry-headline primary-headline">Lunching of our website.</h1>
		</article>

	</section>
</main>




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
