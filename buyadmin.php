<?php

mysql_connect('localhost','root','');
mysql_select_db("craftvilla");
$query="select * from buy";
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
            <th>SR NO.</th>
            <th>CUSTOMER NAME</th>
            <th>IMAGE</th>
            <th>ADDRESS</th>
            <th>PHONE</th>
            <th>CUSTOMER EMAIL</th>
            <th>VENDER EMAIL</th>
            <th>DISCRIPTION</th>
            <th>CATAGORY</th>
            <th>PRICE</th>
            <th>STATUS</th>
            <th>SHOP</th>
            <th>MESSAGE</th>
        </tr>
        <?php
        while($row=mysql_fetch_array($res))
        {
        ?>
        <tr>
            <td><?php echo $row['srno']?></td>
            <td><?php echo $row['name']?></td>
            <td><img src='<?php echo $row['image'];?>' height="100px" width="100px"></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['phone']?></td>
            <td><?php echo $row['c_email']?></td>
            <td><?php echo $row['v_email']?></td>
            <td><?php echo $row['discription']?></td>
            <td><?php echo $row['catagory']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['status']?></td>
            <td><?php echo $row['shop']?></td>
            <td><button class="b1"><a>QUERY</a></button></td>
        </tr>
   
        <?php
             
        }
        ?>
    </table>


</body>   
    </html>