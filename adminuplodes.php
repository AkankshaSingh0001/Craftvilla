<?php

mysql_connect('localhost','root','');
mysql_select_db("craftvilla");
$query="select * from uploadv";
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
            <th>EMAIL</th>
            <th>SHOP NAME</th>
            <th>IMAGE 1</th>
            <th>IMAGE2</th>
            <th>PRICE</th>
            <th>CATAGORY</th>
            <th>DESCRIPTION</th>
            <th>HEIGHT</th>
            <th>WIDTH</th>
            <th>WEIGHT</th>
            <th>MESSAGE</th>
        </tr>
        <?php
        while($row=mysql_fetch_array($res))
        {
        ?>
        <tr>
            <td><?php echo $row['srno']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['shop']?></td>
            <td><img src='upload/<?php echo $row['image1'];?>' height="100px" width="100px"></td>
            <td><img src='upload/<?php echo $row['image2'];?>' height="100px" width="100px"></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['catagory']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['height']?></td>
            <td><?php echo $row['width']?></td>
            <td><?php echo $row['weight']?></td>
            <td><button class="b1"><a>MESSAGE</a></button></td>
        </tr>
   
        <?php
             
        }
        ?>
    </table>


</body>   
    </html>