<html lang="en">
    <body>
        <?php
            $queries = [
                "SELECT HOUR(NOW()) AS hour",
                "SELECT MINUTE(NOW()) AS Minute",
                "SELECT SECOND(NOW()) AS Second",
                "SELECT DATE_FORMATE(NOW()", "%d-%n-%Y %H:%I:%S') AS Formatted_Date",
                "SELECT DATE_SUB(CURDATE()", INTERVAL 10 DAY)" AS Date_Subtract"
                "SELECT DATE_ADD(CURDATE()", INTERVAL 10 DAY)" AS Date_Add"       
            ];
        ?>
</body>
</html>