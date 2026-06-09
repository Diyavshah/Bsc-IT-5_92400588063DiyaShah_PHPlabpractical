<?php
session_start();

if (!isset($_SESSION['names'])) {
    $_SESSION['names'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Clear previous names
    $_SESSION['names'] = [];

    // Store current submission only
    foreach ($_POST['names'] as $name) {
        if (!empty(trim($name))) {
            $_SESSION['names'][] = trim($name);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Greeting List</title>
</head>
<body>

<h2>Enter 5 Names</h2>

<form method="post">
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <input type="text" name="names[]" placeholder="Enter Name <?php echo $i + 1; ?>">
        <br><br>
    <?php } ?>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
if (!empty($_SESSION['names'])) {
    foreach ($_SESSION['names'] as $name) {
        echo "Hello, " . htmlspecialchars($name) . "<br>";
    }
}
?>

</body>
</html>