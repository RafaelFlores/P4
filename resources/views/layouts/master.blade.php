<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title', 'AGTEL')
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/main.css" />
</head>
<body>
    <header>

<section id="sidebar">
        @if(Auth::check())

            <div class="inner">
                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/catalog">Catalog</a></li>
                        <li><a href="/addProduct">Add Product</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/addPost">Add Post</a></li>
                        <li><a href="/customers">View Customers</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </nav>

            </div>

        @else

            <div class="inner">
                <nav>
                    <ul>
                        <li><a href="/catalog">Catalog</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/">Home</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/login">Log In</a></li>
                        <li><a href="/register">Resgister</a></li>
                    </ul>
                </nav>

            </div>

        @endif


</section>



    </header>

    <section id="intro" class="wrapper">
        @if(\Session::has('flash_message'))
            <p><h3>{{ \Session::get('flash_message') }}</h3></p>
        @endif
    @yield('content')
    </section>

</body>

<footer id="footer" class="wrapper">
				<div class="inner">
					<ul class="menu">
						<li>&copy; AGTEL. All rights reserved.</li>
                        <li><a href="/contact">Contact</a></li>
					</ul>
				</div>
			</footer>
</html>
