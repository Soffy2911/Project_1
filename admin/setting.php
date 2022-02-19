<?php
include "../config.php";
if($_POST["delete_person"]){

	$str="DELETE FROM `person` WHERE `id` = " . $_POST["id"];

	mysqli_query($connection,$str);

	echo '<script>location.replace("index.php#person");</script>'; exit;
}

if($_POST["save_person"]){

	$str="UPDATE `person` set name='" . $_POST["name"] . "', info='" . $_POST["info"] . "', p_date='" . $_POST["p_date"] . "', info1='" . $_POST["info1"] . "', earnings='" . $_POST["earnings"] . "'"	;
	//var_dump($str); die();
	mysqli_query($connection,$str);

	echo '<script>location.replace("index.php#person");</script>'; exit;
}

if($_POST["add_person"]){

	
	
	// $str="UPDATE `person` set name='" . $_POST["name"] . "', info='" . $_POST["info"] . "', p_date='" . $_POST["p_date"] . "', info1='" . $_POST["info1"] . "', earnings='" . $_POST["earnings"] . "'"	;
	// //var_dump($str); die();
	// mysqli_query($connection,$str);

	// echo '<script>location.replace("index.php#person");</script>'; exit;
}
?>