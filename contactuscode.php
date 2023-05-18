<?php
    $name=$_POST['name'];
    echo $name;
    $email=$_POST['email'];
    echo $email;
    $text=$_POST['text'];
    echo $text;
    $as=$_POST['as'];
    echo $as;

    mysql_connect('localhost','root','');
    mysql_select_db("craftvilla");
    $query="insert into contact(utype,name,email,msg) values('$as','$name','$email','$text')";
    mysql_query($query);
    header("Location:contactus.php");
?>
