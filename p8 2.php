<?php
session_start();

if (!isset($_SESSION['names'])) {
    $_SESSION['names'] = [];
}

if (isset($_GET['uname']) && $_GET['uname'] != '') {
    $_SESSION['names'][] = $_GET['uname'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Greeting List</title>
</head>
<body>

<form method="get">
    <input type="text" name="uname">
    <input type="submit" value="Submit">
</form>

<?php
foreach ($_SESSION['names'] as $name) {
    echo "Hello, " . htmlspecialchars($name) . "<br>";
}
?>

</body>
</html>