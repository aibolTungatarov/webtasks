<?php
$usernames = ["billgates","johndoe","stevejobs"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btn'])) {
        $username = $_POST['username'];
		$password1 = ($_POST['password1']);
		$password2 = ($_POST['password2']);
		$errors = [];
		if(in_array($username,$usernames)){
			array_push($errors,'Username already has reserved');
		}
		if($password1 != $password2){
			array_push($errors,'Passwords needs to be same');
		}
		if(empty($password1) or empty($password1)){
			array_push($errors,'Passwords shouldnt be empty');
		}
		for($i = 0;$i < sizeof($errors);$i++){
			echo '<p class = "error">'.($errors[$i]).'</p>';
			echo '</br>';
		}
    }
}
?>
<html>
<head><style>
.error{
	border:1px solid red;
	font-weight:bold;
	padding:5px;
	width:400px;
	margin:4px;
}
</style></head>
<body>
<form action="task9_1.php" method="post">
	<input type="text" name="username">
	<input type="password" name="password1">
	<input type="password" name="password2">
	<input type="submit" name="btn"/>
</form>
</body>
</html>
