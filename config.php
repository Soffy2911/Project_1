<?php
$connection = mysqli_connect("localhost","root","root","person");

if( $connection == false )
{
    echo 'Не вдалося підключитися до бази даних';
    echo mysqli_connect_error(); //вывод ошибки почему не подключилось
    exit();
}

function isMobile() {           
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|piez|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]); 
    }