<?php
include "config.php";

if($_POST["add_person"]){

	$str = "INSERT INTO `person` (`id`, `Name`, `Weight`, `Orbit_altitude`, `Launching_means`, `First_launch_date`, `Cosmodrome`) VALUES (NULL,
	'" . $_POST["Name"] . "' , '" . $_POST["Weight"] . "', '" . $_POST["Orbit_altitude"] . "', '" . $_POST["Launching_means"] . "', '" . $_POST["First_launch_date"] . "', '" . $_POST["Cosmodrome"] . "')";
		 echo $str;
	 mysqli_query($connection,$str);
	echo '<script>location.replace("spisok.php");</script>'; exit;

}
// if($_POST["delete_club"]){
// 	$str="DELETE FROM club WHERE club.id =" . $_POST["id"];
// 	  mysqli_query($connection,$str);
// 	 echo '<script>location.replace("spisok.php");</script>'; exit;
//   }

if ($_POST["delete_person"]) {
	
	$str = "DELETE FROM person WHERE person.id =  " . $_POST["id"];
	echo $str;
	mysqli_query($connection,$str);

	echo '<script>location.replace("spisok.php");</script>'; exit;

	}
?>