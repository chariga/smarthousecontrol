<?php
$Get_Set_Temperature = exec('/usr/bin/python /var/www/html/get_set_temperature.py');
preg_match("/\"value\":\d\d.\d*/", $Get_Set_Temperature, $Get_Temperature);
$Temperature = substr($Get_Temperature[0], 8);
echo $Temperature;
?>
