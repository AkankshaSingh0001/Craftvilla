<?php
    session_start();
    $email=$_SESSION['v_email'];
    $shop=$_SESSION['v_shop'];

    $image1=$_FILES['im1']['name'];
    echo $image1;
    $type1=$_FILES['im1']['type'];
    echo $type1;
    $size1=$_FILES['im1']['size'];
    echo $size1; 
    $tmp_name1=$_FILES['im1']['tmp_name'];
    echo $tmp_name1;

    $image2=$_FILES['im2']['name'];
    echo $image2;
    $type2=$_FILES['im2']['type'];
    echo $type2; 
    $size2=$_FILES['im2']['size'];
    echo $size2; 
    $tmp_name2=$_FILES['im2']['tmp_name'];
    echo $tmp_name2;

    $price=$_POST['price'];
    echo $price;
    $catagory=$_POST['catagory'];
    echo $catagory;
    $description=$_POST['description'];
    echo $description;
    $height=$_POST['height'];
    echo $height;
    $weight=$_POST['weight'];
    echo $weight;
    $width=$_POST['width'];
    echo $width;

    mysql_connect('localhost','root','');
    mysql_select_db("craftvilla");
    $query="insert into uploadv(email,shop,image1,image2,price,catagory,description,height,width,weight) values('$email','$shop','$image1','$image2','$price','$catagory','$description','$height','$width','$weight')";
    mysql_query($query);
    $location='upload/';
    move_uploaded_file($tmp_name1,$location.$image1);
    move_uploaded_file($tmp_name2,$location.$image2);
    header("Location:uploadv.php?flag=1");
?>