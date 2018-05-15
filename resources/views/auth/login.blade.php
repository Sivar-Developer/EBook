<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" /> 
        <title>E-BL | Login</title>
        <link rel="stylesheet" type="text/css" href="../css/basic.css" />
        <link rel="stylesheet" type="text/css" href="../css/main.css" />
        
    </head>
    <body>
        @include('layouts.nav')
        <div class="col-md-8">
            <div id="article" class="col-md-10">
                <h1 class="border-bottom">Login Page </h1>
                <form>
                    <label class="form-label">Email:</label>
                    <input class="form-input" type="email" 
                        placeholder="example@gmail.com">
                    <label class="form-label">Password:</label>
                    <input class="form-input" type="text" placeholder="********">
                    <input class="checkbox" type="checkbox">
                    <label class="form-label-checkbox">Remeber me</label>
                    <a href="#" class="forgot-password">Forgot My Password!</a>
                    <input type="submit" class="btn btn-primary btn-block" 
                        value="Login">
                </form>
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
