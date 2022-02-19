<?php include "config.php";

if($_GET['person']){
	$str="SELECT * FROM `kosmodrom`, person WHERE person.Cosmodrome = kosmodrom.id and person.id=" . $_GET['person']; 

	$person_card = mysqli_fetch_assoc(mysqli_query($connection, $str));

	$str="SELECT * FROM `message` where m_out_id=" . $person_card['id'];

	$person_message = mysqli_query($connection, $str);
	//var_dump($str); die();

}


else{
	$error=1;
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>

	<title>
		<?php
			if($error){
				echo "404 Персона не найдена";
			}

			else{
				echo $person_card['id'] . "-" . $person_card['Name'];
			}
		 ?>
	</title>
	<link rel="stylesheet" href="style1.css">
	<?php include "header.php" ?>

</head>
<body>
<?php include "menu.php" ?>

<?php
	if($error){
		echo "<h1>404 Персона не найдена</h1>";
	}

	else{
		?>

	<div class="container">
		<div class="my_container">


			<div class="line">

				<div class="line_img">
			
					<img src="/image/<?php if($person_card['img']) 
										echo $person_card['img']; 
										else 
										echo "anonymous-640x423.jpg"?>">
				</div>
			
				<div class="line_text">
					<h2><?php echo $person_card['Name']; ?></h2>
					<div class="Weight"> Вес: <span><?php echo $person_card['Weight']; ?> </span></div>
					<div class="Orbit_altitude"> Высота орбиты: <span><?php echo $person_card['Orbit_altitude']; ?> </span></div>
					<div class="Launching_means"> Средства выведения: <span><?php echo $person_card['Launching_means']; ?> </span></div>
					<div class="k_nazv">Космодром: <span><?php echo $person_card['k_nazv']; ?> </span></div>

				</div>
			</div>

				<line class="line message"></line>
					<h2>Последние сообщения</h2> 
					<?php while($message = mysqli_fetch_assoc($person_message)) {
						?>
					<div class="article">
						<div class="art_date"></div> <?php echo $message['m_date']; ?>
						<div class="art_description"></div>
						<?php echo $message['m_message']; ?>
					</div>
				<?php } ?>
		</div>	<!-- конец my_container --> 
		

	</div>

	<?php
	}
 ?>
<?php include"footer.php" ?>
</body>
</html>