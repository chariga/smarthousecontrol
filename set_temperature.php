<html>
<head>
<meta http-equiv="refresh" content="20;url=index.php">
<title>Set temperature</title>
</head>
<body>
Temperature set to <?php echo $_POST["SetTemperature"]; ?>
<?php exec('curl -i -X PUT http://api-m2x.att.com/v2/devices/716c9baf210d74b565099d167999b875/streams/Set_Temperature/value -H "X-M2X-KEY: 88dfa223d430beea460aa8915f8852be" -H "Content-Type: application/json" -d "{ \"value\": \"' .$_POST["SetTemperature"]. '\" }"'); ?> 
</body>
</html>
