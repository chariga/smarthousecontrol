<?php
$XM2XKEY="-H X-M2X-KEY: 88dfa223d430beea460aa8915f8852be";
$Get_Set_Temperature = exec('curl -i "http://api-m2x.att.com/v2/devices/716c9baf210d74b565099d167999b875/streams/Set_Temperature?pretty -H X-M2X-KEY:88dfa223d430beea460aa8915f8852be"');
echo $Get_Set_Temperature;
?>
