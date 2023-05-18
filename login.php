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
  <link rel="stylesheet" href="loginstyle.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <title>Document</title>
</head>

<body>
  <section>

    <img src="image/1.png" class="m">

        <nav class="nav-bar">
            <ul class="nav-links">
                <li><a href="index1.php" >Home</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="#">SignUp</a>
                    <ul class="s-link">
                        <li><a href="customer.php">Customer</a></li><br>
                        <li style="margin-top: 1vh;"><a href="vender.php">Vender</a></li>
                    </ul>
                </li>
                <li><a href="login.php" class="ac">SignIn</a></li>

                
            </ul>
            <div class="icon">
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <img src="image/menu.png" alt="" class="menu">
            </div>

            
        </nav>
        

        <div class="mdiv">
            <ul class=" row nav-links1">
                <div class="col-12 mdiv1"><li><a href="index1.php">Home</a></li></div>
                <div class="col-12 mdiv1"><li><a href="contactus.php">Contact</a></li></div>
                <div class="col-12 mdiv1"><li><a href="aboutus.php">About</a></li></div>
                <div class="col-12 mdiv1"><li><a href="#">SignUp</a>
                    <ul class="s-link row">
                        <div class="col-12 mdiv2"><li><a href="customer.php">Customer</a></li></div>
                        <div class="col-12"><li style="margin-top: 1vh;"><a href="vender.php">Vender</a></li></div>
                    </ul>
                </li>
                </div>
                <div class="col-12 mdiv1"><li><a href="login.php">SignIn</a></li></div>

                
            </ul>
        </div>



    <div class="row" style="box-sizing:border-box;padding: 0px 7%;">
      <div class="col-md-12 col-lg-6 col-sm-12 n1">
        
        
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="3000">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/14.webp" class="d-block w-100" alt="..." style="background-size: cover;">
            </div>
            <div class="carousel-item">
              <img src="image/18.webp" class="d-block w-100" alt="..." style="background-size: cover;">
            </div>
            <div class="carousel-item">
              <img src="image/4.jpeg" class="d-block w-100" alt="..." style="background-size: cover;">
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

        
      </div>

      <div class="col-md-12 col-lg-6 col-sm-12 n1 ">

          <?php
            error_reporting(0);
            session_start();
            $flag=$_REQUEST['flag']; 
          ?>

        <form action="logincode.php" method="post">

          <div class="row n2">
            <p class="p1">CraftersVilla</p>
            <p class="p2">Welcome to CraftersVilla</p>
            <span class="p3">logIn As?</span><br>
            <select required="" style="height:40px;margin-left:10px;width:40%;outline:none;color:gray;font-size:18px;" name="who">
              <option>Customer</option>
              <option>Vender</option>
              <option>Admin</option>
            </select>
            <span class="p3">User Email Id</span><br>
            <div class="col-12"><input type="email" placeholder="" name="email" style="height:45px;width:100%;outline:none;color:gray;font-size:18px;"></div>
            <span class="p3">password</span><br>
            <div class="col-12"><input type="password" placeholder="" name="password" style="height:45px;width:100%;outline:none;color:gray;font-size:18px;"></div><br><br>
            <input type="submit" value="LOGIN" class="btn2"/>
            <a href="#" style="text-align: center;margin-bottom: 40px;">Forgot Password?</a>
            <div class="divider">&nbsp;New User&nbsp;?&nbsp;<a href="register.html">Create Account&nbsp;</a></div>
          </div>

        </form>
      </div>

    </div>
  </section>

  <div class="container-fluid m2">
    <div class="row r1">
        <div class="col-12 c1">

        </div>
        <div class="col-12 c2"></div>
        <div class="c3">
            <p style="font-size: 3vmin; color: aliceblue;font-weight: bold;">FROM OUR USER</p><br>
            <p style="color: aliceblue;font-size: 2vmin;">It is a varst platform for both artist as they can earn from there creativity with no investment at any assignment
                 and the costomer to get there dream creation from there desired artist.You can directly connect to the artist and can make you preferences.you can also see there sample creation 
                 to match with you desire.
            </p>
        </div>
        <div class="row c4"> 
            <span class="col-12" style="color: aliceblue;font-size: 2.5vmin;text-align: center;font-family: calibri;font-weight: bold;">SUGGESTIONS ARE WELCOMED</span><br><br>
            <textarea class="col-12" style="height: 20vh; width: 100%;outline: none;color: gray;background-color: whitesmoke;"></textarea>
            <br><br><div class="col-12"><input type="submit" value="SUMBIT" class="btn3"/></div>
            
        </div>
    </div>
</div>

<script>
    const menuBtn = document.querySelector('.menu')
    const navlinks = document.querySelector('.mdiv')

    menuBtn.addEventListener('click', () => {
        navlinks.classList.toggle('m_menu')
    })

</script>

</body>

</html>