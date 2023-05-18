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
    <link rel="stylesheet" href="contactuscstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Document</title>
</head>


<script>
    function validate()
    {
        var result=true;
        var e=document.getElementsByName("email")[0].value;
        var s=document.getElementById("sp");
        var atindex=e.indexOf('@');
        var dotindex=e.lastIndexOf('.');
    if(atindex<1 || dotindex>=e.length-2 || dotindex-atindex<3)
    {
        result=false;
        alert("Invalid Email Id");
    
    }
    else
    {
    
    return(result);
    
    }
    }
    
</script>

<body>
    <section>

        <img src="image/1.png" class="m">

        <nav class="nav-bar">
            <ul class="nav-links">
                <li><a href="index1.php" >Home</a></li>
                <li><a href="contactus.php" class="ac">Contact</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="#">SignUp</a>
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







        <div class="container n2">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex">
                    <img src="image/3.jpg" class="img1">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 n1">
                    <p class="p1">Get in Touch</p>
                    <p class="p2">Have an inquiry or sone feedback for us?Fill out the form below to contact our team.
                    </p>
                    <form onsubmit="return validate()" action="contactuscode.php" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="row n3">
                                    <div class="col-lg-12 col-md-12 p3">Contact as?</div>
                                    <div class="col-lg-12 col-md-12">
                                        <select name="as" required="">
                                            <option>Customer</option>
                                            <option>Vender</optikon>
                                        </select>
                                    </div>
                                </div>
                            </div>  

                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="row n3">
                                    <div class="col-lg-12 col-md-12 p3">Name</div>
                                    <div class="col-lg-12 col-md-12">
                                        <input type="text" placeholder="&nbsp;&nbsp;&nbsp;Enter your Name" required="" class="t1" name="name">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="row n3">
                                    <div class="col-lg-12 col-md-12 p3">Email</div>
                                    <div class="col-lg-12 col-md-12">
                                        <input type="email" placeholder="&nbsp;&nbsp;&nbsp;Enter email Address" name="email" required="" class="t1">
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="row n3">
                                    <div class="col-lg-12 col-md-12 p3">How can we help?</div>
                                    <div class="col-lg-12 col-md-12">
                                        <textarea name="text" class="t2" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6">
                                <div class="row n3">
                                    <div class="col-lg-12 col-md-12 d-flex"><input type="submit" value="SUMBIT" class="btn2"/></div>
                                </div>
                            </div>
                            
                        </div>
                    </form>

                </div>
            </div>
        </div>
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