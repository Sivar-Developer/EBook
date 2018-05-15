<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" /> 
        <title>E-BL | Add Book</title>
        <link rel="stylesheet" type="text/css" href="../css/basic.css" />
        <link rel="stylesheet" type="text/css" href="../css/main.css" />
    </head>
    <body>
        @include('layouts.nav')
        <div class="col-md-12">
            <div id="header">
                <h1>E-BOOKS LIBRARY</h1>
                <p>Adding Books!</p>
                <div class="search-div">
                    <form action="#" method="get" id="search-box">
                        <input type="text" class="search" placeholder="search...">
                        <input type="submit" class="search-button" value="search">
                    </form>
                </div>
            </div>
            <div class="col-md-10">
                <div id="article" class="col-md-10">
                    <h1 class="border-bottom">Add Book</h1>
                    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="form-label">Tittle Book:</label>
                        <input class="form-input" type="text" placeholder="tittle" name="title">
                        <label class="form-label">Author Name:</label>
                        <input class="form-input" type="text" placeholder="name" name="author">
                        <label class="form-label">Publishing Date:</label>
                        <input class="form-input" type="date" name="publish">
                        <label class="form-label">Category:</label>
                        <select class="form-input" name="catagory_id">
                            @foreach($catagories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                        <label class="form-label">Message:</label>
                        <textarea class="textarea-control" type="textarea"
                            placeholder="Short Description About The Book ..." name="description"></textarea>
                        <label class="form-label">Book Cover:</label>
                        <input class="form-input" type="file" name="image">
                        <div class="book-cover">
                            <img src="{{asset ('cover/5.png')}}">
                        </div>   
                        <label class="form-label">Add File Book:</label>
                        <input class="form-input" type="file" name="pdf">
                        <input type="submit" id="add" class="btn btn-success" value="Add">
                        <input type="submit" id="cancel" class="btn btn-primary" value="Cancel">
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <footer>
            <p id="main-footer">
                E-BOOKS LIBRARY 2018 &copy; All Rights Reserved
            </p>
           
        </footer>
    </body>
</html>
