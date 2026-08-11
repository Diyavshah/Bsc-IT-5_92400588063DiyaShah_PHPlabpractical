<?php
    echo"</h2>Home Page</h2>";
    if(isset($_COOKIE['username']))
    {
        echo "Welcome :".$_COOKIE['username'];
    }
    else
    {
        echo "Cookie Not Found";
    }
    echo "<br><br>";
    echo "<a href='itu3p14_1Cookie.html'> Go To Back</a>";
?>