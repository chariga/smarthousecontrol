<?php
session_start();
include_once("session_variables.php");
$SetTemperature = "";
?>
<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
Set Temperature:<br>
<form action="set_temperature.php" method="POST">
    <p class="range-field">
      <input type="range" name="SetTemperature" id="SetTemperature" min="50" max="90" value="<?php $Temperature=exec('php get_set_temperature.php'); echo $Temperature; ?>" step="0.05" />
      <input type="submit" value="submit">
    </p>
</form>
<!-- Bottom Menu -->
<div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red" href="logout.php?logout=true"><i class="material-icons">power_settings_new</i></a>Logout</li>
      <li><a class="btn-floating red"><i class="material-icons">contact_phone</i></a>Contacts</li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">equalizer</i></a>Reports</li>
      <li><a class="btn-floating blue" href="settings.php"><i class="material-icons">settings</i></a>Settings</li>
    </ul>
</div>
</body>
</html>
