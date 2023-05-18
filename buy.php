<?php
session_start();
$shop=$_POST['shop'];
echo $shop;
$catagory=$_POST['catagory'];
echo $catagory;
$price=$_POST['price'];
echo $price;
$description=$_POST['description'];
echo $description;
$image=$_POST['image'];
echo $image;

$c_email=$_SESSION['c_email'];
echo $c_email;
$v_email=$_POST['v_email'];
echo $c_email;

mysql_connect('localhost','root','');
mysql_select_db("craftvilla");
$query1="select * from customer where email='$c_email'";
$res=mysql_query($query1);
if($row=mysql_fetch_assoc($res))
{
    $name=$row['first_name'];
    $address=$row['address'];
    $phone=$row['phone'];
    $query="insert into buy(name,image,address,phone,c_email,v_email,discription,catagory,price,status,shop,seller) values('$name','$image','$address','$phone','$c_email','$v_email','$description','$catagory','$price','Ordered','$shop','none')";
    echo(mysql_query($query));
    header("Location:orders.php");   
}

?>