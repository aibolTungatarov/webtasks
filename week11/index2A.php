<?php  
    session_start();
    if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    array_push($_SESSION['cart'],$_GET['id']);
?>
<a href="index2.php">Back</a>