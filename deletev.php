<?php
$email=$_REQUEST['email'];
mysql_connect('localhost','root','');
mysql_select_db('craftvilla');

$query="delete from vender where email='$email'";
mysql_query($query);

header('Location:venderdisplay.php');
?>