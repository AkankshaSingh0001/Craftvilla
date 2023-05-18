<?php
	session_start();
    $password=$_POST['password'];
    $email=$_POST['email'];
    $who=$_POST['who'];
    mysql_connect('localhost','root','');
    mysql_select_db("craftvilla");

    if($who=='Vender')
    {
        $query="select * from vender where email='$email' and password='$password'";
        $res=mysql_query($query);
        if($row=mysql_fetch_assoc($res))
        {
			$shop=$row['shop'];
			$name=$row['first_name'];
			$_SESSION['v_email']=$email;
			$_SESSION['v_shop']=$shop;
			$_SESSION['vf_name']=$name;

			if($row['status']=="Successful")
			{
				header("Location:venderpannal.php");
			}
			else if($row['status']=="Pending")
			{
				header("Location:pending.php");

				
			}

		}

		else
		{
			//email and password not matched
			header("Location:login.php?flag=1");
		}
    }
	else if($who=='Admin')
	{
		$query="select * from admin where email='$email' and password='$password'";
		$res=mysql_query($query);
		if($row=mysql_fetch_assoc($res))
		{
			$_SESSION['a_email']=$row['email'];
			header("Location:adminpannal.php");
			
		}
		else
		{
			//wrong admin email or password
			header("Location:login.php?flag=1");
		}
	}
	else if($who=="Customer")
	{
		$query="select * from customer where email='$email' and password='$password'";
		$res=mysql_query($query);
		if($row=mysql_fetch_assoc($res))
		{
			$email=$row['email'];
			$_SESSION['c_email']=$email;
			header("Location:customerpannel.php");
		
		}
		else
		{
			//wrong admin email or password
			header("Location:login.php?flag=1");
		}
	}
?> 





