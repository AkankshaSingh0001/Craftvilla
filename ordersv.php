<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<style>
    .d1
    {
        height:30vh;
        padding:20px;
        width:100%;
        display:flex;
        align-items:center;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    .d2
    {
        height:25vh;
        float:left;
    }
    .d3
    {
        height:25vh;
        float:left;
        margin-left: 20px;
    }
    .d4
    {
        height:40px;
        width:120px;
        background-color:blue;
        color:white;
        display:flex;
        justify-content:center;
        align-items:center;
    }
</style>

</head>
<?php  
session_start();
$v_email=$_SESSION['v_email'];
mysql_connect('localhost','root','');
mysql_select_db('craftvilla');

$query="select * from buy where v_email='$v_email'";

$res=mysql_query($query);

?>
<body>
    <section>
        <?php
        while($row=mysql_fetch_array($res))
        {
        ?>
        <div class="d1">
            <div class="d2"><img src="<?php echo $row['image'] ?>" class="d2"></div>
            <div class="d3">
                <span style="font-weight:500;"><?php echo $row['name']?></span><br>
                <span style="color:gray;"><?php echo $row['discription']?></span><br>
                <span style="font-size:18px;">Rs.<?php echo $row['price']?></span>
                <br><span style="color:gray;">Address:<?php echo $row['address']?></span>
                <br><span style="color:gray;">Phone no.<?php echo $row['phone']?></span><br>
                Status: <span style="color:red;"><?php echo $row['status']?></span>
                <br><div class="d4">QUERY</div>

            </div>
        </div>
        <?php
        }
        ?>
    </section>
</body>
</html>