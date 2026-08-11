html lang="en">
    <body>
        <?php
            if(isset($_POST['Create']))
            {
                $username = $_POST['username'];
                setcookie("username",$username,time()+(24*60*60),"");
                echo"<h3>Cookie Created Successfully,</h3>";
            }
            if(isset($_POST['read']))
            {
                echo "<h3>Cookie value : ".$_COOKIE['username'] 
                "</h3>"
            }
                else
                {
                    echo"<h3>COOKIE Not Found.</h3>".
                }
                  if(isset($_POST['delete']))
                {
                  setcookie("username","",time()-3600,"/");
                  echo"<h3>Cookie Deleted Successfully,</h3>"
                }
                if(isset($_POST['header']))
                {
                    $username = $_POST['username'];
                    setcookie("username",$username,time()+(24*60*60),"/");
                    header("Location: itu3p14_3Home.php");
                    exit() 
                }
                echi"<br> <a href='itu3p14_1Cookie.html'> Go TO Back</a>":
        ?>
    </body>
</html>