<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="venderstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 


<script>
    
    function cap()
    {
        alert("hellow4");
        var cap=parseInt(document.getElementById("cao").value);
        var secure;
        alert(secure);
        if(scrure!=cap)
        {
            document.getElementById("message3").innerHTML = "**Captcha does not matched";
            return false;
        }
    }
    function validate()
     {
        alert("hellow1");
        var result = true;
        var e = document.getElementsByName("email")[0].value;
        var s = document.getElementById("sp");
        var atindex = e.indexOf('@');
        var dotindex = e.lastIndexOf('.');
        if (atindex < 1 || dotindex >= e.length - 2 || dotindex - atindex < 3) {
            result = false;
            alert("Invalid Email Id");

        }
        else {

            return (result);

        }
    }

    function verifyPassword() {
        var pw = document.getElementById("pswd").value;
        //check empty password field  
        if (pw == "") {
            document.getElementById("message").innerHTML = "**Fill the password please!";
            return false;
        }

        //minimum password length validation  
        if (pw.length < 8) {
            document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";
            return false;
        }

        //maximum length of password validation  
        if (pw.length > 15) {
            document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";
            return false;
        } 
    }  
    function phoneno()
        {
            alert("hellow3");
            var p=document.getElementById("phone").value;
            if(p.length!=10)
            {
                document.getElementById("message1").innerHTML = "**Phone no should be of 10 digit";
                return false;
               
            }
            
        }
    
</script>


<body>
    <section>
        <img src="image/1.png" class="m">
    
            <nav class="nav-bar">
                <ul class="nav-links">
                    <li><a href="index1.php" >Home</a></li>
                    <li><a href="contactus.php">Contact</a></li>
                    <li><a href="aboutus.php">About</a></li>
                    <li><a href="#" class="ac">SignUp</a>
                        <ul class="s-link">
                            <li><a href="customer.php">Customer</a></li><br>
                            <li style="margin-top: 1vh;"><a href="vender.php">Vender</a></li>
                        </ul>
                    </li>
                    <li><a href="login.php">SignIn</a></li>
    
                    
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
                <div class="col-12 mdiv1">
                    <li><a href="index1.php">Home</a></li>
                </div>
                <div class="col-12 mdiv1">
                    <li><a href="contactus.php">Contact</a></li>
                </div>
                <div class="col-12 mdiv1">
                    <li><a href="aboutus.php">About</a></li>
                </div>
                <div class="col-12 mdiv1">
                    <li><a href="#">SignUp</a>
                        <ul class="s-link row">
                            <div class="col-12 mdiv2">
                                <li><a href="customer.php">Customer</a></li><br>
                            </div>
                            <div class="col-12">
                                <li style="margin-top: php"><a href="vender.php">Vender</a></li>
                            </div>
                        </ul>
                    </li>
                </div>
                <div class="col-12 mdiv1">
                    <li><a href="login.php">SignIn</a></li>
                </div>


            </ul>
        </div>

            <?php
                error_reporting(0);
                session_start();
                $_SESSION['secure']=rand(100,9999);
                $flag=$_REQUEST['flag']; 
            ?>
            

            <form action="vendercode.php" method="post" onsubmit="return verifyPassword();return validate();return phone();" enctype="multipart/form-data">

                <div class="container-fluid cos1">
                    <span style="margin-left: 35%;font-size: 30px;font-weight: bold;color: rgb(214, 200, 15);margin: auto;">VENDER REGISTRATION</span><br>
                    <div class="cos2">

                    <?php               
                        if($flag==1)
                        
                        {
                    ?>
                            <span style="color:red;font-size:18px;font-weight:bold;">This email id already exist!Please enter another.</span><br><br>
                    <?php
                    }
                    ?>
                    <?php
                        if($flag==2)
                        {
                        ?>
                            <span style="color:red;font-size:18px;font-weight:bold;">Password conform password does not matched.Try again!</span><br><br>
                        <?php
                        }
                    ?>
                    <?php
                        if($flag==4)
                        {
                        ?>
                            <span style="color:red;font-size:18px;font-weight:bold;">Shop name already registered!</span><br><br>
                        <?php
                        }
                    ?>

                        <span style="font-weight: bold; color: aliceblue;">1.Shop Name</span><br><input type="text" placeholder="Shop Name" class="i3" required="" name="shop"><br><br>
                        <span style="font-weight: bold;color: aliceblue;">2.Full Name</span><br><input type="text" placeholder="First Name" class="i1" required="" name="first_name">
                        <input type="text" placeholder="Last Name" name="last_name" class="i2"><br><br><br>
                        <span style="font-weight: bold;color: aliceblue;">3.Email Address</span><br><input type="email" placeholder="Email" class="i3" required="" name="email"><br><br>
                        <span style="font-weight: bold;color: aliceblue;">4.Phone number</span><br><input type="number" placeholder="Number" class="i3" required="" name="phone" id="phone"><br>
                        <span id="message1" style="color:red"> </span> <br><br>
                        
                        <span style="font-weight: bold;color: aliceblue;">5.Date of Birth</span><br><input type="date" placeholder="DOB" class="i3" required="" name="dob"><br><br>
                        <span style="font-weight: bold;color: aliceblue;">6.Gender</span><br><br><input type="radio" name="gender" class="i4" value="M"><span style="margin-left: 10px; font-size: 25px;color: aliceblue;">Male</span><input type="radio" name="gender" class="i5" value="F"><span style="margin-left: 10px; font-size: 25px;color: aliceblue;">Female</span><br><br>
                        <span style="font-weight: bold;color: aliceblue;">7.Shop Address</span><br><textarea class="i6" required="" name="address"></textarea><br><br><br>
                        <span style="font-weight: bold;color: aliceblue;">8.Uplode Profile Pic</span><br><input type="file" required="" name="file" accept="image/*" onchange="loadFile(event)">
                        <img height="100" id="output"><br><br>
                        <span style="font-weight: bold;color: aliceblue;">9.Password</span><br><input type="password" placeholder="Length should be grater then 8 and less then 15 characters." class="i3" name="password" id="pswd" required=""><br>
                        <span id="message" style="color:red;"> </span> <br><br>
                        <span style="font-weight: bold;color: aliceblue;">10.Conform Password</span><br><input type="password" placeholder="Conform Password" class="i3" required="" name="c_password"><br><br>
                        <br><span style="font-weight: bold;color: aliceblue;">11.Captcha</span><br>
                        <img src="generate.php"><br><br><span style="color:aliceblue;margin-left:%">Type the value what u see</span> <input type="text" name="cap" id="cap"><br>
                        <span id="message3" style="color:red"> </span> <br><br>
                        

                        <div class="divider">&nbsp;New User&nbsp;?&nbsp;<a href="customer.php">Register as Customer&nbsp;</a>
    
                        
                    </div>
                    <input type="submit" value="REGISTER" class="btn2"/>
                </div> 

            </form>
    </section>




    <div class="container-fluid m2">
        <div class="row r1">
            <div class="col-12 c1"></div>
            <div class="col-12 c2"></div>
            <div class="c3">
                <p style="font-size: 3vmin;color: aliceblue;font-weight: bold;">FROM OUR USER</p><br>
                <p style="color: aliceblue;font-size: 2vmin;">It is a varst platform for both artist as they can earn from there creativity with no investment at any assignment
                     and the costomer to get there dream creation from there desired artist.You can directly connect to the artist and can make you preferences.you can also see there sample creation 
                     to match with you desire.
                </p>
            </div>
            <div class="row c4">
                <span class="col-12" style="color: aliceblue;font-size: 2.5vmin;text-align: center;font-family: calibri;font-weight: bold;">SUGGESTIONS ARE WELCOMED</span><br><br>
                <textarea class="col-12" style="height: 20vh; width: 100%;outline: none;color: gray;background-color: whitesmoke;"></textarea>
                <br><br><div class="col-12"><input type="submit" value="SUMBIT" class="btn2"/></div>
                
            </div>
        </div>
    </div>

    <script>
        const menuBtn = document.querySelector('.menu')
        const navlinks = document.querySelector('.mdiv')

        menuBtn.addEventListener('click', () => {
            navlinks.classList.toggle('m_menu')
        })


        var loadFile=function(event)
            {
                var image=document.getElementById('output');
                image.src=URL.createObjectURL(event.target.files[0]);
                
            };
    </script>
</body>
</html>