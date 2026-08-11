<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name="VIewport" content="width=device-width, intial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <?php
        session_start();
        session_destroy();
        header("Location: itu3p7_1login.html");
        exit();
    ?>
</body>
</html>
