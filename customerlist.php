<?php

mysql_connect('localhost','root','');
mysql_select_db("craftvilla");
$query="select * from customer";
$res=mysql_query($query);
?>

<html>
<head>
    <style>
        table {
            border: 1px solid;
            width:100%;
        }
        table {
            border-collapse: collapse;
        }
        th
        {
            border:3px solid black;
            padding:5px 10px;
            box-sizing:border-box;
        }
        td{
            border: 1px solid;
            padding:5px 10px;
            margin:auto;
        }
        .b1
        {
            height:40px;
            width:100px;
            background-color:blue;
            font-weight:bold;
        }

        a
        {
            color:black;
            text-decoration:none;
        }
    </style>
</head>
 <body>
    <table>
        <tr>
            
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>ID</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>DOB</th>
            <th>GENDER</th>
            <th>ADDRESS</th>
            <th>PASSWORD</th>
            <th>MESSAGE</th>
        </tr>
        <?php
        while($row=mysql_fetch_array($res))
        {
        ?>
        <tr>
            
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['password']?></td>
            <td><button class="b1" id="b1" onclick="update()"><a>MESSAGE</a></button></td>
        </tr>
   
        <?php
             
        }
        ?>
    </table>
    <!--?php $status=$row['status'];
             echo $status;?-->
    <script>
            function update()
            {
                
                alert($status);
               /*
                if(=='Successful')
                {
                    alert("hellow");
                    document.getElementById("b1").style.background="gray";
                }*/
            }
    </script>


</body>   
    </html>