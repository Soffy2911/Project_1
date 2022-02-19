<?php include "config.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<link rel="stylesheet" href="style_form.css">
	<!--<link rel="stylesheet" href="style.css">-->
   <link rel="stylesheet" href="style1.css">
      <?php include "header.php" ?>

<body>
      <?php include "menu.php" ?>
<form class="decor" method="post" action="setting.php">
	<div class="form-left-decoration"></div>
	<div class="form-right-decoration"></div>
	<div class="circle"></div>
	<div class="form-inner">

	<h3>Добавить</h3>

	<input type="text" name="Name" maxlength="40" placeholder="Name" required>

	<input type="number" name="Weight" maxlength="40" placeholder="Weight" required>

   <input type="text" name="Orbit_altitude" placeholder="Orbit altitude" required>

   <input type="text" name="Launching_means" placeholder="Launching means" required>

<!--   <input type="text" name="Cosmodrome" placeholder="Cosmodrome" required>  -->

	<input type="date" name="First_launch_date" placeholder="First launch date" rows="3"></input>

         <!-- Выпадающий список начало -->
<!--  <input type="reset" class="reset" value="Clear it!" />
  <div class="__select" data-state="">
    <div class="__select__title" data-default="Option 0">Option 0</div>
    <div class="__select__content">
      <input id="singleSelect0" class="__select__input" type="radio" name="singleSelect" checked />
      <label for="singleSelect0" class="__select__label">Option 0</label>
      <input id="singleSelect1" class="__select__input" type="radio" name="singleSelect" />
      <label for="singleSelect1" class="__select__label">Option 1</label>
      <input id="singleSelect2" class="__select__input" type="radio" name="singleSelect" disabled />
      <label for="singleSelect2" class="__select__label">Option 2 (disabled)</label>
      <input id="singleSelect3" class="__select__input" type="radio" name="singleSelect" />
      <label for="singleSelect3" class="__select__label">Option 3</label>
      <input id="singleSelect4" class="__select__input" type="radio" name="singleSelect" />
      <label for="singleSelect4" class="__select__label">Option 4</label>
    </div>
  </div> -->
   <select name="Cosmodrome" id="" required>
      <?php 

         $str='SELECT * FROM `kosmodrom`';
            $person_arr = mysqli_query($connection,$str);
               while($kosmodrome = mysqli_fetch_assoc($person_arr))
               {
                  echo" <option value='" . $kosmodrome['id'] . "'>" . $kosmodrome['k_nazv'] . "</option>";
               }
            ?>
       <!-- Выпадающий список конец -->


   </select>

	<input type="submit" name="add_person" value="Отправить">


      
	</div>
</form>

<style>
   
</style>
<?php include"footer.php" ?>
</body>
</html>