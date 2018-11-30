<?php
    session_start();
?>
<p> Toyota Camry </p> <?php if(in_array('1',$_SESSION['cart'])){ echo '<a href="index2A.php?id=1">Add to Basket</a>';} else{ echo "<p>Already in basket</p>";} ?>
<p>Mercedes C 100</p> <?php if(in_array('1',$_SESSION['cart'])){ echo '<a href="index2A.php?id=2">Add to Basket</a>';} else{ echo "<p>Already in basket</p>";} ?>
<p>Daewoo Nexia</p> <?php if(in_array('1',$_SESSION['cart'])){ echo '<a href="index2A.php?id=3">Add to Basket</a>';} else{ echo "<p>Already in basket</p>";} ?>
<p>Mercedes s 500</p> <?php if(in_array('1',$_SESSION['cart'])){ echo '<a href="index2A.php?id=4">Add to Basket</a>';} else{ echo "<p>Already in basket</p>";} ?>

<h1>In Basket</h1>
<?php
    if(empty($_SESSION['cart'])){
        echo "There is no item";
    }
    else{
        echo "id : " . implode(',', $_SESSION['cart']);
    }
?>