<html lang="en">
    <body>
        <center>
            <?php
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    if($_COOKIE['username']==$name){
                        echo "<h3>Welcome," .$name . "!<h3>";
                        echo "<h3> You are a Repeated User. </h3>";
                    }
                }
                else
                {
                    setcookie("username," $name, time() + (30 * 24 * 60 * 60),"/");
                    echo "<h3>Welcome," .$name . "!<h3>";
                        echo "<h3> You are a new User.</h3>";
                }
            ?>
        </center>
    </body>
</html>