<?php  
$email=$_REQUEST['email'];
mysql_connect('localhost','root','');
mysql_select_db('craftvilla');

$query="select * from vender where email='$email'";

$res=mysql_query($query);



if($row=mysql_fetch_assoc($res))
{
    
?>

    <html>
        <head>
            <style>
                body
                {
                  display:flex;
                  justify-content:center;
                  align-items:center;   
                }
                .d1
                {
                    width:500px;
                    height:auto;
                    padding:30px;
                    border:5px solid;
                }
                .btn
                {
                    height:40px;
                    width:100px;
                    background-color:green;
                    font-weight:bold;
                    display:flex;
                    justify-content:center;
                    align-items:center;
                    float:left;
                    margin-right:20px
                }
            </style>
        </head>
        <body>
            <div class="d1">
            <form action="conformvupdate.php" method="post">
                <h1 align=center>REQUEST</h1>
                <img src='upload/<?php echo $row['photo'];?>' height="100px" width="100px"><br><br>
                <span>Shop name: </span><?php echo $row['shop']?><br><br>
                <span>Name: </span><?php echo $row['first_name']?><?php echo $row['last_name']?><br><br>
                <span>Id: </span><?php echo $row['id']?><br><br>
                <span>Email Address: </span><?php echo $row['email']?><br><br>
                <input type="hidden" value="<?php echo $row['email'];?>" name="email">
                <span>Phone number: </span><?php echo $row['phone']?><br><br>
                <span>Date Of Birth: </span><?php echo $row['dob']?><br><br>
                <span>Gender: </span><?php echo $row['gender']?><br><br>
                <span>Address: </span><?php echo $row['address']?><br><br>
                <span>Password: </span><?php echo $row['password']?><br><br>
                <span>STATUS: </span>
                    <?php
                        if($row['status']=='Pending')
                        {
                            ?><span style="color:red;"><?php echo $row['status']?></span><?php
                        }
                        else
                        {
                            ?><span style="color:green;"><?php echo $row['status']?></span><?php
                        }
                    ?>
                <br><br>
                <input type="submit" value="Successful" class="btn" name="status">
                <input type="submit" value="Pending" class="btn" name="status" style="background-color:red;">

            </form>
            </div>
        </body>
    </html>

<?php
        }       
    ?>