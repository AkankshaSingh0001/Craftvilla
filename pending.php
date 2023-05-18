<?php
	session_start();
   
?>


<html>
    				<head>
						<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
						<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
						<script>
						AOS.init();
						</script>
						<style>
            				.h
            				{
                				height: 100vh;
                				width: 100%;
                				background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url("image/2.jpg");
                				box-sizing: border-box;
                				display: flex;
                				margin:0px;
                				padding:0px;
            				}
            				.h1
            				{
                				margin: auto auto;
                				height: 80vh;
                				width: 50%;
                				justify-content: center;
                				background-color: black;
                				opacity: 0.8;
            				}           
        				</style>
    				</head>

    				<body>
        				<div class="h">
            				<div class="h1 ">
									<br><br><span style="color:rgb(214, 200, 15);font-size:4vmin;justify-content:center;font-weight:bold;display:flex;">WELCOMR TO CRAFTERVILLA</span>
                        			<br><br><span style="color:#ffff;font-size:7vmin;justify-content:center;font-weight:bold;display:flex;"><?php echo $_SESSION['v_shop']; ?></span><br>
									<span style="color:blue;display:flex;justify-content:center;"><?php  echo $_SESSION['v_email']; ?></span>
									<br><br><br><br><span style="font-size:2.5vmin;color:#ffff;display:flex;justify-content:center;">Hellow <?php echo $_SESSION['vf_name']; ?>! we are glad that you want to join with us.Thankyou for your efforts.</span>

									<br><span style="font-size:2.5vmin;color:#ffff;display:flex;justify-content:center;">Your request is in process and will be accepted as soon as possible.</span><br>
									<span style="font-size:2.5vmin;color:#ffff;display:flex;justify-content:center;">Please try after some time!</span>
									

									<br><br><span style="font-size:2.5vmin;color:#ffff;display:flex;justify-content:center;font-weight:bold;">I HOPE THAT WE WILL MAKE IT BEST TOGETHER</span>
									<br><br><span style="color:red;display:flex;justify-content:center;font-size:3vmin;font-weight:bold;">STATUS:PENDING</span>
            				</div>
        				</div>
    				</body>
				</html>