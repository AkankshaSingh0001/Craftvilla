<?php

    session_start();

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
    $c_password=$_POST['c_password'];
    $id=mt_rand(1000,9999);
    echo $id;

    mysql_connect('localhost','root','');
    mysql_select_db("craftvilla");
if($password==$c_password)
{

    
    $query1="select email from customer where email='$email'";
    $res=mysql_query($query1);

        if($row=mysql_fetch_assoc($res))
        {
            /*?>

                <script>
                //alert("This email id already exist.");
                //window.location="customer.php";
                </script>
            <?php */
            header("Location:customer.php?flag=1");
        }
        else
        {

            $query="insert into customer(first_name,last_name,id,phone,dob,gender,address,email,password) values
            ('$first_name','$last_name','$id','$phone','$dob','$gender','$address','$email','$password')";
            echo(mysql_query($query));

    
            /*?>

                <script>
                    alert("Registration Successful");
                    window.location="customer.php";
                </script>

            <?php   */
            header("Location:login.php");
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
    header("Location:customer.php?flag=2");
}
?>