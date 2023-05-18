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
    <link rel="stylesheet" href="extrastyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <img src="image/1.png" class="m">
    
            <nav class="nav-bar">
                <ul class="nav-links">
                    <li><a href="#" class="ac">Home</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">SignUp</a>
                        <ul class="s-link">
                            <li><a href="#">Customer</a></li><br>
                            <li style="margin-top: 1vh;"><a href="#">Vender</a></li>
                        </ul>
                    </li>
                    <li><a href="#">SignIn</a></li>
    
                    
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
                    <div class="col-12 mdiv1"><li><a href="#">Home</a></li></div>
                    <div class="col-12 mdiv1"><li><a href="#">Contact</a></li></div>
                    <div class="col-12 mdiv1"><li><a href="#">About</a></li></div>
                    <div class="col-12 mdiv1"><li><a href="#">SignUp</a>
                        <ul class="s-link row">
                            <div class="col-12 mdiv2"><li><a href="#">Customer</a></li><br></div>
                            <div class="col-12"><li style="margin-top: 1vh;"><a href="#">Vender</a></li></div>
                        </ul>
                    </li>
                    </div>
                    <div class="col-12 mdiv1"><li><a href="#">SignIn</a></li></div>
    
                    
                </ul>
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
                <br><br><div class="col-12 btn2"><a class="btn1">SUBMIT</a></div>
                
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