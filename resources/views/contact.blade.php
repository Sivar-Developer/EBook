<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8" /> 
        <title>E-BL | Contact</title>
        <link rel="stylesheet" type="text/css" href="../css/basic.css" />
        <link rel="stylesheet" type="text/css" href="../css/main.css" />
    </head>
    <body>
        @include('layouts.nav')
        <div class="col-md-10">
            <div id="article" class="col-md-10">
                <h1 class="border-bottom">Contact Us</h1>
                <form>
                    <label class="form-label">Email:</label>
                    <input class="form-input" type="email" name="email" 
                        placeholder="example@gmail.com">
                    <label class="form-label">Subject:</label>
                    <input class="form-input" type="text" name="subject" placeholder="Subject">
                    <label class="form-label">Message:</label>
                    <textarea class="textarea-control" type="textarea" name="message" 
                        placeholder="Write Your Message ..."></textarea>
                    <input type="submit" class="btn btn-success" 
                        value="Send Message">
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
