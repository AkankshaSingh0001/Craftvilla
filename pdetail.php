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

        <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <style>
        section
        {
            overflow:hidden;
        }
    </style>

</head>

<?php  
session_start();
$srno=$_REQUEST['srno'];
mysql_connect('localhost','root','');
mysql_select_db('craftvilla');

$query="select * from uploadv where srno='$srno'";

$res=mysql_query($query);
?>


<body>
    <section>
    <?php
            if($row=mysql_fetch_array($res))
            {
            ?>
            <form action="buy.php" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="3000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="upload/<?php echo $row['image1'];?>" class="d-block w-100" alt="..." style="background-size: cover;overflow:hidden;height:85vh;">
                        </div>
                        <div class="carousel-item">
                        <img src="upload/<?php echo $row['image2'];?>" class="d-block w-100" alt="..." style="background-size: cover;overflow:hidden;height:85vh;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="row" style="margin-top:50px;">
                    <div class="col">
                    <center><input type="submit" style="height:50px;width:220px;background-color:orange;border:none;color:white;font-weight:bold;" value="BUY NOW"></center>
                    </div>
                    <div class="col">
                    <center><button style="height:50px;width:220px;background-color:red;border:none;color:white;font-weight:bold;">QUERY ABOUT</button></center>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="box-sizing:border-box;padding:40px;">
                <br><span style="color:black;font-size:25px;font-weight:bold;"><?php echo $row['shop']?></span>
                <br><span style="color:gray;font-size:18px;margin-top:18px;"><?php echo $row['description']?></span><br>
                <br><span style="color:green;font-size:18px;font-weight:bold;">Special price</span><br>
                <span style="font-weight:bold;font-size:30px"><?php echo $row['price']?></span>
                <br><br><span style="color:gray;font-weight:bold;font-size:17px;">Delivery</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <input type="number" placeholder="Enter Delivery Pincode" style="border:none;border-bottom:1px solid;outline:none;"><span><a href="checkp.php" style="text-decoration:none;">Check</a></span><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;font-weight:500;">Delivery within 10 days</span>
                <br><br><br><span style="color:gray;font-weight:bold;font-size:17px;">Heighlights</span>
                
                <ul>
                    <br><li>Catagory: <?php echo $row['catagory']?></li>
                    <li>Height: <?php echo $row['height']?></li>
                    <li>Width: <?php echo $row['width']?></li>
                    <li>Weight: <?php echo $row['weight']?></li>
                </ul>
                <br><span style="color:gray;font-weight:bold;font-size:17px;">Services</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-inr" aria-hidden="true" style="color:blue;"></i> Cash on Delivery available
                <br><br><span style="color:gray;font-weight:bold;font-size:17px;">Seller Name</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
            </div>
        </div>
        <input type="hidden" value="<?php echo $row['shop']?>" name="shop"/>
        <input type="hidden" value="<?php echo $row['email']?>" name="v_email"/>
        <input type="hidden" value="<?php echo $row['price']?>" name="price"/>
        <input type="hidden" value="<?php echo $row['description']?>" name="description"/>
        <input type="hidden" value="<?php echo $row['catagory']?>" name="catagory"/>
        <input type="hidden" value="upload/<?php echo $row['image2'];?>" name="image"/>
    </form>
        <?php
            }?>
    </section>
    
</body> 
</html>