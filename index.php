<?php
session_start();
require_once("session_variables.php");
?>
<html>
<head>
<title>Iasi Smart Home</title>
<!-- CSS  -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}
function checkTime(i)
{
if (i<10)
{
i="0" + i;
}
return i;
}
</script>
</head>
<body onload="startTime()">
<!--  Scripts-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="https://m2x.att.com/widgets.js" async></script>
<!-- Start Front Page -->
<p align="left">
<table>
  <thead>
    <tr>
      <th data-field="logo"><img src="images/CHLogo.png" height="50" width="75"></th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th data-field="Welcome"><div class="right-align"><div id="txt"></div></div></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <span class="card-title">Inside Temperature</span>
      <div class="card small card-content att-m2x-widget" style="width:360px" data-widget-url="http://api-m2x.att.com:443/v2/widgets/672ab5e2" data-m2x-key="e233452511308bd55b413b07fbb5dadd"></div>
      </td>
      <td>
      <span class="card-title">Outside Temperature</span>
      <div class="card small card-content att-m2x-widget" style="width:360px" data-widget-url="http://api-m2x.att.com:443/v2/widgets/0ec630f2" data-m2x-key="9cd9c5474e1b7260e2b6834c6b6fcaf9"></div>
      </td>
      <td>
      <span class="card-title">Inside Pressure</span>
      <div class="card small card-content att-m2x-widget" style="width:360px" data-widget-url="http://api-m2x.att.com:443/v2/widgets/61d399fe" data-m2x-key="bff0271bd82489452ebb6f22a38ad4dd"></div>
      </td>
      <td>
      <span class="card-title">Inside Light</span>
      <div class="card small card-content att-m2x-widget" style="width:360px" data-widget-url="http://api-m2x.att.com:443/v2/widgets/c87bbd1a" data-m2x-key="c20874a86a814a40bcc599a4d061d1e6"></div>
      </td>
      <td>
      <span class="card-title">Geographical Location</span>
      <div class="card small card-content att-m2x-widget" style="width:360px" data-widget-url="http://api-m2x.att.com:443/v2/widgets/b274a455" data-m2x-key="340f566481c85ab0be4bc7c9156acdf3"></div>
      </td>
    </tr>
  </tbody>
</table>
</p>
<!-- End First Row -->
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
