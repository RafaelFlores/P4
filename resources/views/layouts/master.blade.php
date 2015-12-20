<!DOCTYPE html>
<html>
    <head>
        <title>
		@yield('title', 'AGTEL')
	</title>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        @if(\Session::has('flash_message'))
    <div class='flash_message'>
        {{ \Session::get('flash_message') }}
    </div>
@endif
        <header>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/catalog">Catalog</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Log In</a></li>
                <li><a href="/register">Resgister</a></li>
            </ul>
        </header>

        <section>
            @yield('content')
        </section>

    </body>

    <footer>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/catalog">Catalog</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/login">Log In</a></li>
            <li><a href="/register">Resgister</a></li>
        </ul>
    </footer>
</html>
