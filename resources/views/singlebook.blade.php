<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" /> 
        <title>E-BL | Single View</title>
        <link rel="stylesheet" type="text/css" href="../css/basic.css" />
        <link rel="stylesheet" type="text/css" href="../css/main.css" />
    </head>
    <body>
        @include('layouts.nav')
        <div class="col-md-12">
            <div id="header">
                <h1>E-BOOKS LIBRARY</h1>
                <p>See The Book in More Detail</p>
                <div class="search-div">
                    <form action="#" method="get" id="search-box">
                        <input type="text" class="search" placeholder="search...">
                        <input type="submit" class="search-button" value="search">
                    </form>
                </div>
            </div>
            <div id="article" class="col-md-10">
                <h1 class="border-bottom">The Detail Of The E-Books!</h1>
            </div>
            <div id="single-cover" class="col-md-4">
                <h3 id="tittle-mob">{{ $book->title }}</h3>
                <h5 id="name-mob">{{ $book->author }}</h5>
                @if($book->cover)
                <img src="{{asset ('cover/'.$book->cover) }}">
                @else
                <img src="{{asset ('cover/unavailable.png') }}">
                @endif
            </div>
            <div id="book-info" class="col-md-6">
                <h3 id="tittle">{{ $book->title }}</h3>
                <h5 id="name">{{ $book->author }}</h5>
                <p>Publishing Date: {{ $book->publish }}</p>
                <p>Category: {{ $book->catagory->name }}</p>
                <p>Rating: 4/5</p>
                <p>Read: 1543</p>
                <p>Like: 958</p>
                <a href="{{asset ('pdf/'.$book->pdf) }}" role="button"><button id="download">Read</button></a>
                <a href="{{asset ('pdf/'.$book->pdf) }}" role="button"><button id="download">Download</button></a>
            </div>
            <div id="description" class="col-md-10">
                <p> 
                    {{ $book->description }}
                </p>
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
