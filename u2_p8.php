<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// SQL Query
$sql = "SELECT
        DAYOFWEEK(CURDATE()) AS DayOfWeek,
        WEEKDAY(CURDATE()) AS WeekDay,
        DAYOFMONTH(CURDATE()) AS DayOfMonth,
        DAYOFYEAR(CURDATE()) AS DayOfYear,
        DAYNAME(CURDATE()) AS DayName,
        MONTH(CURDATE()) AS MonthNumber,
        MONTHNAME(CURDATE()) AS MonthName,
        WEEK(CURDATE()) AS WeekNumber,
        NOW() AS CurrentDateTime,
        SYSDATE() AS SystemDateTime,
        CURRENT_TIMESTAMP() AS CurrentTimestamp";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>MySQL Date and Time Functions</h2>";

    echo "1. DAYOFWEEK(): " . $row['DayOfWeek'] . "<br><br>";
    echo "2. WEEKDAY(): " . $row['WeekDay'] . "<br><br>";
    echo "3. DAYOFMONTH(): " . $row['DayOfMonth'] . "<br><br>";
    echo "4. DAYOFYEAR(): " . $row['DayOfYear'] . "<br><br>";
    echo "5. DAYNAME(): " . $row['DayName'] . "<br><br>";
    echo "6. MONTH(): " . $row['MonthNumber'] . "<br>";
    echo "   MONTHNAME(): " . $row['MonthName'] . "<br><br>";
    echo "7. WEEK(): " . $row['WeekNumber'] . "<br>";
    echo "   NOW(): " . $row['CurrentDateTime'] . "<br><br>";
    echo "8. SYSDATE(): " . $row['SystemDateTime'] . "<br>";
    echo "   CURRENT_TIMESTAMP(): " . $row['CurrentTimestamp'] . "<br>";
}

mysqli_close($conn);
?>