<?php session_start();
include "../config.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
        <?php include "../header.php" ?>
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if($_SESSION['id']){
        echo "Вы авторизированны <span>" . $_SESSION['name'] . "</span>";
?>

<div class="col-md-3 col-sm-3 col-xs-6"> <a href="logout.php" class="btn">Logout</a> </div>

<div class="container">
        <div class="nav">
                <ul>
                        <li class="nav_li"><a href="#person">Персоны</a></li>
                        <li class="nav_li"></li>
                        <li class="nav_li"></li>
                        <li class="nav_li"></li>
                        <li class="nav_li"></li>
                        <li class="nav_li"></li>
                </ul>
        </div>

        <div class="section" id="person">
                <div class="header_text">Настройки персоны</div>
                <table>
                        <tr>
                                <th>Имя</th>
                                <th>Вес</th>
                                <th>Высота орбиты</th>
                                <th>Ракета Носитель</th>
                                <th>Космодром</th>
                                <th>Дата запуска</th>
                    <th></th>
                        </tr>

                        <tr><form action='setting.php' method='post'>

                         <td><input name="Name" value=""></td>
                         <td><input name="Weight" value=""></td>
                         <td><input name="Orbit_altitude" type="date" value=""></td>
                            <td><textarea name="Launchig_means">></textarea></td>
                         <td><input name="Cosmodrome" value=""></td>
                         <td><input name="First_launch_date" value=""></td>

                    <input type='hidden' name='id' value='<?php echo $person["id"] ?>'>

                    <td>
                            <input type='submit' name='delete_person' value='delete'>
                    </td>
                    <td>
                            <input type='submit' name='save_person' value='save'>
                    </td>
                         </form>
                 </tr>

                        <?php
                //$str="SELECT * FROM `groups`, person where person.status = groups.id";  //$str="SELECT * FROM `kosmodrom`, person WHERE person.Cosmodrome = kosmodrom.id";
                $str="SELECT * FROM `kosmodrom`, person WHERE person.Cosmodrome = kosmodrom.id";
                $person_arr = mysqli_query($connection,$str);        
                 while($person = mysqli_fetch_assoc($person_arr))
                 {
                         ?>
                         <tr class='first_tr'><form action='setting.php' method='post'>

                         <td><input name="name" value="<?php echo $person["Name"] ?>"></td>
                         <td><input name="info" value="<?php echo $person["Weight"] ?>"></td>
                         <td><input name="p_date" type="date" value="<?php echo $person["Orbit_altitude"] ?>"></td>
                            <td><textarea name="info1"><?php echo $person["Launchig_means"] ?></textarea></td>
                         <td><input name="earnings" value="<?php echo $person["Cosmodrome"] ?>"></td>
                         <td><input name="g_name" value="<?php echo $person["First_launch_date"] ?>"></td>

                    <input type='hidden' name='id' value='<?php echo $person["id"] ?>'>

                    <td>
                            <input type='submit' name='delete_person' value='delete'>
                    </td>
                    <td>
                            <input type='submit' name='save_person' value='save'>
                    </td>
                         </form>
                 </tr>
                                 <?php
                 } ?>

                </table>
        </div>
</div>

<?php

}else{
        ?>
                <form action="login.php" method="post">
                        <input type="text" name='login'>
                        <input type="password" name='password'>
                        <input type="submit" name="login_button">
                </form>

        <?php
}
?>

<div class="col-md-3 col-sm-3 col-xs-6"> <a href="/spisok.php" class="btn btn-sm animated-button gibson-two">Перейти к списку</a> </div>

</body>
</html>