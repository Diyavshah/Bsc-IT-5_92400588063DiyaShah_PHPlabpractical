<html lang="en">
    <body>
        <?php
            $conn = new mysql("local host","root,""test");
            if($conn-> connect_error)
            {
                if 
            }
            $queries = [
                "SELECT CURDATE() AS SURRENTDATA";
                "SELECT CURTIME()AS CurrentTime";
                "SELECT UNIX_TIMESTAMP()AS UnixTime";
                "SELECT FROM_UNIXTIME(UNIX_TIMESTAMP())AS DateTime"
                ];
                
                foreach($queries as $sql)
                {
                    echo "<br>";
                    $result = $conn->queries($sql);
                    if($result){
                                    while($row = $result-> fetch_assoc()){

                                    }
                    }
                }
        ?>
</body
</html>
  