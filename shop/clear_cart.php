<?php
session_start();
$_SESSION=array();
if(isset($_COOKIE[session_name()])==true)
{
	setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF_8">
    <title>ロクマル農園</title>
  </head>
  <body>

	カートを空にしました。<br />

  </body>
</html>
