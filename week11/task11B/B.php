<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $cook_arr = array();
        if(!isset($_COOKIE['basket'])){
            setcookie('basket', serialize($cook_arr), time()+10000, '/');
        }
        $arr = [1=>"Mercedes C 100", 2=>"Toyota Camry 50", 3=>"Daewoo Nexia"];
        $qqq = array();
        $arr_of_ids = array();
        if(isset($_COOKIE['basket'])){
            $qqq = unserialize($_COOKIE['basket']);
            $arr_of_ids = $qqq;
        }
        for($i = 0; count($arr_of_ids) > $i;$i++){
            $arr_of_ids[$i] = (int)$arr_of_ids[$i];
        }
        $counter = array();
        for($i = 0; count($arr) > $i;$i++){
            $counter[] = $i + 1;
        }
        for ($i = 0; count($arr) > $i;$i++){
            $q = $i + 1;
            if(in_array($q, $arr_of_ids)){
                echo $arr[$q]." Already in basket<br>";
            }
            else{
                echo $arr[$q]." <a href = 'addBasket.php?id=$q'>Add to basket</a><br>";
            }
        }
        echo "<br><br><br>In Basket: ".count($qqq)
    ?>
    
</body>
</html>