<?php
session_start();
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
    $keywords=implode(',',$_POST['keywords']);
    echo $keywords;
    $sr=$_SESSION['sr'];
    echo $sr;

    mysql_connect('localhost','root','');
    mysql_select_db('craftvilla');
    
    $query="update uploadv set image1='$image1',image2='$image2',price='$price',catagory='$catagory',description='$description',height='$height',width='$width',weight='$weight' where srno='$sr'";
    mysql_query($query);
    $location='upload/';
    move_uploaded_file($tmp_name1,$location.$image1);
    move_uploaded_file($tmp_name2,$location.$image2);
    header("Location:uploadvdisplay.php");
?>
