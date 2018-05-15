<nav id="top-menu">
    <a href="{{ route('home') }}" class="logo"><img src="{{asset ('icon/logo-icon.png')}}"></a>
    <a href="{{ route('home') }}" class="logo">E-BL</a>
    <label for="toggle" id="l1">&#9776;</label>
    <input type="checkbox" id="toggle">
    <ul class="main-menu">
        <li id="search-li-mob">
            <form action="#" method="get" id="search-box">
                <input type="text" class="search" placeholder="search...">
                <input type="submit" class="search-button" value="search">
            </form>
            <div class="border-bottom"><p></p></div>
        </li>
        <li id="main-nav"> <a href="{{ route('home') }}">Home</a> </li>
        <li id="main-nav"> <a href="{{ route('about') }}">About</a> </li>
        <li id="main-nav"> <a href="{{ route('contact') }}">Contact</a> </li>
        <li id="main-nav"> <a href="{{ route('addbook') }}">Add Books</a> </li>
        <li id="search-li-pc">
            <form action="#" method="get" id="search-box">
                <input type="text" class="search" placeholder="search...">
                <input type="submit" class="search-button" value="Search">
            </form>
        </li>
    </ul>
    <div class="clear"></div>
</nav>