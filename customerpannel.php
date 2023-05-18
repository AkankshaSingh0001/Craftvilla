<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="customerpannelstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<?php
session_start();
$email=$_SESSION['c_email'];
?>
<body>
    <section>
        <nav>
            <div class="nav-bar row">
                <div class="im1 col-3 "><img src="image/1.png" height="15%" alt="" style="height: 15vw;"></div>
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-3 l1"><a href="profilec.php" class="m1">Profile</a></div>
                        <div class="col-3 l1"><a href="ordersc.php" class="m1">Orders</a></div>
                        <div class="col-3 l1"><a href="" class="m1">Messages</a></div>
                        
                    </div>
                </div>
                <div class="col-3 l2"><a href="index1.php"><i class="fa fa-power-off" aria-hidden="true" style="color: red"></i>&nbsp;LOGOUT</a></div>
                
            </div>
            <div class="icon">
                <div class="im1 col-3 "><img src="image/1.png" height="15%" alt="" style="height: 15vw;"></div>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <img src="image/menu.png" alt="" class="menu">
            </div>
        </nav>

        <navm>
            <div class="row m3">
                <div class="col-12 m2"><a href="#">profile</a></div>
                <div class="col-12 m2"><a href="">message</a></div>
                <div class="col-12 m2"><a href="">orders</a></div>
                
            </div>
        </navm>

        <div class="row r3"> 
            <div class="col-sm-12 col-md-12 col-lg-8 d2" >
                <div class="div1"></div>
            </div>
            <div class="col-md-12 col-lg-4 col-sm-12 d2">
                <div class="row">
                    <div class="col-lg-12 col-md-4 col-sm-12 d0"><div class="d1"><span><div style="height:50px;width:150px;background-color: black;display: flex;justify-content: center;align-items: center;margin: auto;margin-top: 20px;"><a href="listv.php" style="text-decoration: none;color: aliceblue;font-weight: bold;font-size: 16px;">VENDERS</a></div>
                    <br>Meet our venders and explore there profile and intract with them for customize creation.</div></div>
                    <div class="col-lg-12 col-md-4 col-sm-12 d0"><div class="d1"><span><div style="height:50px;width:150px;background-color: black;display: flex;justify-content: center;align-items: center;margin: auto;margin-top: 20px;"><a href="catagoryp.php" style="text-decoration: none;color: aliceblue;font-weight: bold;font-size: 16px;">CATAGORIES</a></div>
                    <br>Find you intrest according preference.</div></div>
                    <div class="col-lg-12 col-md-4 col-sm-12 d0"><div class="d1"><div style="height:50px;width:150px;background-color: black;display: flex;justify-content: center;align-items: center;margin: auto;margin-top: 20px;"><a href="login.php" style="text-decoration: none;color: aliceblue;font-weight: bold;font-size: 14px;">LOGIN AS VENDER</a></div>
                    <br>Uplode you creation and get one step closer to us.</div></div>
                </div>
            </div>
        </div>
    </section>


    <script>
        const menuBtn = document.querySelector('.menu')
        const navlinks = document.querySelector('.m1')

        menuBtn.addEventListener('click', () => {
            navlinks.classList.toggle('m_menu')
        })

    </script>

</body>
</html>