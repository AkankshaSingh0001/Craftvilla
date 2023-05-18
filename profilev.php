<html>
    <head>
    <meta charset="UTF-8">
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
        .r1
        {
            height:100vh;
            width:100%;
        }
        .c1
        {
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .c11
        {
            height:350px;
            width:350px;
            border-radius:350px 350px 350px 350px;
            background-image:url("image/OIP.jpg");
            background-repeat:no-repeat;
            background-size:cover;
        }
        .c2
        {
            box-sizing:border-box;
            padding:30px;
        }
        .s1
        {
            color:black;
            font-style:calibri;
            font-size:20px;
            font-weight:bold;
            margin-right:20px;
        }
        .s2
        {
            color:gray;
            font-style:calibri;
            font-size:20px;
            font-weight:bold;
        }
        .b1
        {
            background-color:darkblue;
            color:#fff;
            font-weight:bold;
            width:140px;
            height:50px;
        }
    </style>
</head>


<?php  
session_start();
$email=$_SESSION['v_email'];
mysql_connect('localhost','root','');
mysql_select_db('craftvilla');

$query="select * from vender where email='$email'";

$res=mysql_query($query);
?>
<body>
    <section>
    <?php
        if($row=mysql_fetch_array($res))
        {
        ?>
        <div class="row r1">
            <div class="col-sm-12 col-lg-6 col-md-6 c1" style="background-color:gray">
                <div class="c11"></div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6 c2">
                <span style="font-size:30px;font-weight:bold;color:darkblue;">PROFILE</span><br><br>
                <span style="color:gray;font-size:22px;font-weight:bold;">Hi,<?php echo $row['first_name']?> Thankyou for been part of Craftersvilla</span><br><br><br>
                <span class="s1">First name :</span><span class="s2"><?php echo $row['first_name']?></span><br><hr><br>
                <span class="s1">Last name:</span><span class="s2"><?php echo $row['last_name']?></span><br><hr><br>
                <span class="s1">Date Of Birth :</span><span class="s2"><?php echo $row['dob']?></span><br><hr><br>
                <span class="s1">Gender :</span><span class="s2"><?php echo $row['gender']?></span><br><hr><br>
                <span class="s1">Phone no. :</span><span class="s2"><?php echo $row['phone']?></span><br><hr><br>
                <span class="s1">Address :</span><span class="s2"><?php echo $row['address']?></span><br><br><br>
                <span class="s1">Email :</span><span class="s2"><?php echo $row['email']?></span><br><hr><br>
                <span class="s1">Password :</span><span class="s2"><?php echo $row['password']?></span><br><br>
                <center><button class="b1">EDIT</button></center>
            </div>

        </div>
        <?php
        }
        ?>
    </section>
</body>
</html>