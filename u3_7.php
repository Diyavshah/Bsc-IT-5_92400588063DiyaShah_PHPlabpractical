<html lang="en">
    <body>
        <?php
            $Session_Start();
            $conn = new mysqli("localhost","root","","logindb");
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE username = 'username' AND '$Password' ";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_roos($result) > 0)
            {
                $_SESSION['username'] = $username;
                header("Loction: itu3p7_3Home.php");
                exit();
            }
        ?>
    </body>
</html>
            