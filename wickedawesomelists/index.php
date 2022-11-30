<?php
echo "
    <h1>WickedAwesomeLists</h1>
    Welcome to the Wicked Awesome Lists POC website.  Please note this is for testing only at this time.
    <br><br>

    <table border=1>
    <tr>
    <th>
    Login
    <th>
    Register
    </tr>
    <tr>
    <form method=POST action=modules/login2.php>
    Username/Email <input type=text name=user>
    <br>
    Password <input type=password name=pass>
    <br>
    <input type=submit value='Login'>
    </form>

    <th>
    <form method=POST action=modules/register2.php>
    Username/Email <input type=text name=user>
    <br>
    Password <input type=password name=pass>
    <br>
    Verify <input type=password name=verify_pass>
    <br>
    <input type=submit value='Register'>
    </form>

    ";

?>