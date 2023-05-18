<?php

    session_start();
    $shop=$_POST['shop'];
    echo $shop;
    $first_name=$_POST['first_name'];
    echo $first_name;
    $last_name=$_POST['last_name'];
    echo $last_name;
    $email=$_POST['email'];
    echo $email;
    $phone=$_POST['phone'];
    echo $phone;
    $dob=$_POST['dob'];
    echo $dob;
    $gender=$_POST['gender'];
    echo $gender;
    $address=$_POST['address'];
    echo $address;
    $password=$_POST['password'];
    echo $password;
    $id=mt_rand(1000,9999);
    echo $id;
    $c_password=$_POST['c_password'];
    echo $c_password;


    $file_name=$_FILES['file']['name'];
    echo $file_name;
    $type=$_FILES['file']['type'];
    echo $type;
    $size=$_FILES['file']['size'];
    echo $size; 
    $tmp_name=$_FILES['file']['tmp_name'];
    echo $tmp_name;


    mysql_connect('localhost','root','');
    mysql_select_db("craftvilla");

    if($password==$c_password)
    {

    
    $query1="select email from vender where email='$email'";
    $res=mysql_query($query1);

        if($row=mysql_fetch_assoc($res))
        {
            /*?>

                <script>
                //alert("This email id already exist.");
                //window.location="customer.php";
                </script>
            <?php */
            header("Location:vender.php?flag=1");
            
        }
        else
        {
            $query2="select shop from vender where shop='$shop'";
            $res=mysql_query($query2);
            if($row=mysql_fetch_assoc($res))
            {
                header("Location:vender.php?flag=4");
            }
            else
            {
                $query="insert into vender(shop,first_name,last_name,id,email,phone,dob,gender,address,photo,password) values
                ('$shop','$first_name','$last_name','$id','$email','$phone','$dob','$gender','$address','$file_name','$password')";
                echo(mysql_query($query));
                $location='upload/';
                move_uploaded_file($tmp_name,$location.$file_name);
        
                /*?>
    
                    <script>
                        alert("Registration Successful");
                        window.location="login.php";
                    </script>
    
                <?php   */
                header("Location:login.php");
            }
            
        }
}
else
{
    /*?>
        <script>
        alert("password conform password does not matched.Try again!");
        window.location="customer.php";
        </script>

    <?php*/
    header("Location:vender.php?flag=2");
}