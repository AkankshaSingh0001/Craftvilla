<?php
$sr= $_REQUEST['sr'];
echo $sr;
mysql_connect('localhost','root','');
mysql_select_db('craftvilla');

$query="delete from uploadv where srno='$sr'";
mysql_query($query);

header('Location:uploadvdisplay.php');
?>