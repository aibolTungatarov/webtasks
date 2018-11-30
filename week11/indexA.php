<?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        setcookie('name',$name);
    }
    if(isset($_COOKIE['name'])) {
        echo "Hello " . $_COOKIE['name'] . " !!!";
    }
?>
<br>
<a href="index.php">Back</a>