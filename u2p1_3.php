<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $laptops = [
        "Apple" => [
            [
                "model" => "MacBook Air M3",
                "price" => 113000
            ],
            [
                "model" => "MacBook Pro 16-inch",
                "price" => 124990
            ]
        ],
        "Dell" => [
            [
                "model" => "XPS 13",
                "price" => 98999
            ],
            [
                "model" => "Alienware m16",
                "price" => 88999
            ]
        ]
    ];
    
 
    
    echo "\n Multidimensional Array (Laptops) \n</br>";
    print_r($laptops);
    ?>
</body>
</html>