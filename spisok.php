<?php include "config.php";
 session_start(); 
 if(!($_GET["page"])){ //esli net page - get parametr
 	$str= 'Location: spisok.php&page=1';

 if($_GET["name"])

 	$str .= '&name=' . $GET['name'];

 	// header();
 }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Document</title>
	<link rel="stylesheet" href="style1.css">
	<?php include "header.php" ?>

</head>
<body>
	<?php include "menu.php" ?>
	<div class="sort">
		<form action="" method="get">
			<div type="text" placeholder="Искать здесь..."></div>
			<input type="text" name="name">
			<input type="submit" value="Поиск">
		</form>
	<!--<form action="" method="get">
        <input type="text" placeholder="Искать здесь...">
         <button type="submit"></button>
    </form>-->
	<style>
	   table{ margin: 0 auto; }
	   * {box-sizing: border-box;}
form {
  position: relative;
  width: 300px;
  margin: 0 auto;
  padding:20px;
}
input, button {
  border: none;
  outline: none;
  border-radius: 3px;
}
input {
  width: 100%;
  height: 42px;
  background: #F9F0DA;
  padding-left: 15px;
}
button {
  height: 26px;
  width: 26px;
  position: absolute;
  top: 8px;
  right: 8px;
  background: #F15B42;
  cursor: pointer;
}
button:before {
  content: "\f105";
  font-family: FontAwesome;
  color: #F9F0DA;
  font-size: 20px;
  font-weight: bold;
}


	</style>

	</div>
	<table>

		 <tr>
		 	<th colspan="<?php if(isMobile())	echo "4"; else echo "8";	?>" style="text-align: center;">Аппараты</th>
		 </tr>

		<tr>
		 	<th>Имя</th>
		 	<th>Масса</th>
		 	<th>Тип орбиты</th>
		 	<th>Средства выведения</th>
		 	<?php if(isMobile())	echo "</tr><tr>";	?>
		 	<th>Космодром</th>
		 	<th>Дата первого запуска</th>
		 	<th> </th>
		 	<th> </th>
		 </tr>

		      <?php
		      $str="SELECT * FROM `kosmodrom`, person WHERE person.Cosmodrome = kosmodrom.id";
		      if($_GET["name"]){
		      	$str=$str . " and Name like '%" . $_GET["name"] ."%'";
			}

			
				// pagination start 
				//1 - limit 0 (0,2)
				// ... 
				$limit_kol = 2; // кол-во записей выводимы на экран
				$limit_start = ((int)$_GET["page"] - 1) * $limit_kol;
				$str .= " limit " . $limit_start . "," . $limit_kol;
				
				//pagination end
			//echo $str;
	         $person_arr = mysqli_query($connection,$str);
		      
         while($person = mysqli_fetch_assoc($person_arr))

        {

        		$today = new DateTime();
        		$birthdate = new DateTime($person["First_launch_date"]);
        		$interval = $today->diff($birthdate);

        	echo "<tr class='first_tr'><form action='setting.php' method='post'>";

        	echo "<td><a href='kosmodrome_card.php?person=" . $person["id"] ."'>" . $person["Name"] . "</a></td>";
        	echo "<td>" . $person["Weight"] . "</td>";
        	echo "<td>" . $person["Orbit_altitude"] . "</td>";

        	echo "<td>" . $person["Launching_means"] . "</td>";

		 	 if(isMobile())	echo "</tr><tr>";	

        	echo "<td>" . $person["k_nazv"] . "</td>";
        	echo "<td>" . $interval->format('%y years') . "</td>";
			// echo "<input type = 'hidden' name = 'id'  value='" . $club["id"] . " '>";
            // echo "<td><input type = 'submit' name='delete_club' value='delete'>" . "</td>";
			   echo "<td><input type = 'hidden' name='id' value = '" . $person["id"] ."'>";

			   if(isset($_SESSION['id']) and $_SESSION['id']== '1')
        	   echo "<td><input type = 'submit' name='delete_person' value = 'delete'></td>";

        	echo "</form>";
			echo "</tr>";
        } ?>

	</table>
 

	<?php

	/* pagination start */

	$pagination_kol = mysqli_fetch_assoc(mysqli_query($connection,"SELECT CEILING(COUNT(*)/" . $limit_kol . ") as kol FROM `person`"))['kol'];

		for($i = 1; $i <= $pagination_kol; $i++) {
			echo "<a href='/spisok.php?page=" . $i . "'>" . $i . "</a>"; 
		}

	/* pagination end */

	 include"footer.php" ?>
</body>
</html>