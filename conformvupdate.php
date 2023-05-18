<?php
    $status=$_POST['status'];
    $email=$_POST['email'];
    echo $email;
    mysql_connect('localhost','root','');
    mysql_select_db('craftvilla');
    
    $query="update vender set status='$status' where email='$email'";
    
    mysql_query($query);
    header("Location:venderdisplay.php");
?>