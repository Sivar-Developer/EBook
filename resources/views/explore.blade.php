<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" /> 
        <title>'E-BL' | {{ $catagory->name }}</title>
        <link rel="stylesheet" type="text/css" href="../css/basic.css" />
        <link rel="stylesheet" type="text/css" href="../css/main.css" />
    </head>
    <body>
        @include('layouts.nav')
        <div class="col-md-12">
            <div id="category-header">
                <h1>E-BOOKS LIBRARY</h1>
                <p>Read Free Books Online and Download Books</p>
                <div class="search-div">
                <form action="#" method="get" id="search-box">
                    <input type="text" class="search" placeholder="search...">
                    <input type="submit" class="search-button" value="search">
                </form>
            </div>
            </div>
            <div id="select" class="col-md-10">
                <div id="category">
                    <ul><li>Category
                        <ul class="drop-down">
                            @foreach($catagories as $cat)
                            <a href="{{ route('explore', $cat->name) }}"><li>{{ $cat->name }}</li></a>
                            @endforeach
                        </ul>
                    </li></ul>
                </div>
                <div id="sort">
                    <ul><li>Sort By
                        <ul class="drop-down">
                            <li>Latest</li>
                            <li>Year</li>
                            <li>Most Readed</li>
                            <li>Rating</li>
                        </ul>
                    </li></ul>
                </div>
            </div>
            <div id="diplay-books" class="col-md-10">
                <div class="display">
                    <h1>{{ $catagory->name }} eBooks</h1>
                    @foreach($catagory->books as $book)
                    <div class="display-single">
                        <a href="{{ route('book.show', $book->title) }}">
                            @if($book->cover)
                            <img src="{{asset ('cover'.$book->cover) }}">
                            @else
                            <img src="{{asset ('cover/unavailable.png') }}">
                            @endif
                        </a>
                        <p class="name">{{ $book->title }}</p>
                        <p class="type">{{ $catagory->name }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
           
            <div class="clear"></div>
        </div> 
        <footer>
            <p id="main-footer">
                E-BOOKS LIBRARY 2018 &copy; All Rights Reserved
            </p>
          
        </footer>
    </body>
</html>
