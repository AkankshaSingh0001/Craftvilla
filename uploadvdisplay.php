<?php
session_start();
    mysql_connect('localhost','root','');
    mysql_select_db("craftvilla");
    $query="select * from uploadv";
    $res=mysql_query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
        a
        {
            text-decoration:none;
            color:black;
        }
        button
        {
            height:40px;
            width:100px;
            border:1px solid black;
        }
    </style>

</head>
    <table>
        <tr>
            <th>SR NO.</th>
            <th>EMAIL</th>
            <th>SHOP</th>
            <th>IMAGE1</th>
            <th>IMAGE2</th>
            <th>PRICE</th>
            <th>CATAGORY</th>
            <th>DESCRIPTION</th>
            <th>HEIGHT</th>
            <th>WIDTH</th>
            <th>WEIGHT</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
        <?php
        while($row=mysql_fetch_array($res))
        {
            
        ?>
        <tr>
            <td><?php echo $row['srno']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['shop']?></td>
            <td><img src='upload/<?php echo $row['image1'];?>' height=100 width=100></td>
            <td><img src='upload/<?php echo $row['image2'];?>' height=100 width=100></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['catagory']?></td>
            <td><?php echo $row['description']?></td>
            <td><?php echo $row['height']?></td>
            <td><?php echo $row['width']?></td>
            <td><?php echo $row['weight']?></td>
            <td><button><a href="uploadvedit.php?sr=<?php echo $row['srno'];?>">UPDATE</a></button></td>
            <td><button><a href="uplodevdelete.php?sr=<?php echo $row['srno'];?>">DELETE</a></button></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>