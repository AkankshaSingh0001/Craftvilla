<!DOCTYPE html>
<html lang="en">
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        section
        {
            overflow:hidden;
            min-height:100vh;
        }
        .r1
        {
            padding:20px;
        }
        .c1
        {
            padding: 10px;
            box-sizing:border-box;
            
        }
        .c2
        {
            height:100%;
            width:100%;
            padding: 15px;
            box-sizing:border-box;
            background-color: white;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }
        .div1
        {
            height:150px;
            width:150px;
            border-radius:150px;
            margin:auto;
        }
        .div2
        {
            height:40px;
            width:120px;
            background-color:rgb(2, 2, 62);
            margin:auto;
            border-top:1px solid transparent;
        }
        .div3
        {
            height:40px;
            width:120px;
            background-color:#005792;
            margin:auto;
            border-top:1px solid transparent;
        }
        .a
        {
            color:white;
            font-size:16px;
            font-weight:bold;
            text-decoration:none;
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:4px;
        }
    </style>
</head>

<?php  
mysql_connect('localhost','root','');
mysql_select_db('craftvilla');

$query="select * from vender where status='Successful'";

$res=mysql_query($query);

?>




<body>
    <section>
        <div class="row r1">
            <?php
            while($row=mysql_fetch_array($res))
            {
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 c1">
                    <div class="c2">
                    <div class="div1"><img src='upload/<?php echo $row['photo'];?>' class="div1"></div>
                    <br><br><span style="font-size:25px;font-weight:bold;justify-content: center;display:flex;"><?php echo $row['shop'];?></span><br>
                    <span style="justify-content: center;display:flex;diaplay:none;">by <?php echo $row['first_name'];?> <?php echo $row['last_name'];?></span><br>
                    <div class="row">
                        <div class="col">
                            <div class="div2"><a href="productv.php?email=<?php echo $row['email'];?>" class="a">EXPLORE</a></div>
                    
                        </div>
                        <div class="col">
                            <div class="div3"><a href="productv.php?email=<?php echo $row['email'];?>" class="a">CHAT</a></div>
                        </div>
                    </div>
                    </div>
                </div>
            
            <?php
            }
            ?>
        </div>
    </section>
</body>

</html>