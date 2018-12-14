<!doctype html>
<html>
    <head>
<title>Hai</title>
    </head>
    <body>
        <center>
            <form action="/loginme" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                USERNAME:<input type="text" name="username"> <br>
                Password:<input type="password" name="password"> <br>
                <input type="submit" name="login" value="login">
            </form>
            </form>
        </center>


    </body>
</html>
