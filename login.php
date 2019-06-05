<?php
	require 'test.php';
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = "select * from users where username=? and password=?";
	$stmnt = $conn->prepare($sql);
	if ($stmnt->execute(array($username, $password))) {
		$data = $stmnt->fetchAll();
		if(count($data)>0)
		{
			header("Location:/show_complains.php");
		else
		{
			echo "failed to login";
		}
	}
	else{
		echo "Error executng query!";
	}
?>