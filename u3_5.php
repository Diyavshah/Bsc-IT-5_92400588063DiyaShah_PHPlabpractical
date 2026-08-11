<?php
    if (isset($_POST['create']))
    {
        $_SESSION['username'] = $_POST['username'];
        echo "</h1>Session Created..! <br> Username: " . $_SESSION['username']."</h1>";
    }

    if (isset($_POST['destroy']))
    {
        session_unit();
        session_destroy();

        echo"<h1> SEssion destroyed</h1>";
    }
        echo"<br> <ahref='itu3p56_15session.html',> Go To Back</a>"
?>
