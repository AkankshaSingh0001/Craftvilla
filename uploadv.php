<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>

        <style>
            
            body
            {
                width: 100%;
                padding-bottom: 4vh;
                background: #118a7e;
            }
            .r1
            {
                box-sizing:border-box;
                display:flex;
                justify-content:space-between;
                padding-left: 5%;
                padding-right: 5%;
                padding-top:3vh;
            }
            
            .c1
            {
                height:50vh;
                width: 48%;
                background-color:#d2d2d2;
                border:1px solid;
            }
            .c2
            {
                width: 45%;
            }
            .div1
            {
                display: flex;
                justify-content: center;
            }
            .btn
            {
                height: 46px;
                width: 180px;
                background-color:gray;

            }
            .btn:hover
            {
                background-color: gray;
                
            }
        </style>
        <?php
        error_reporting(0);
            session_start();
            $flag=$_REQUEST['flag']; 
            if($flag==1)
            {
                ?>
                <script>
                    alert("Uploded successfully");
                </script>
                <?php
            }
        ?>
    </head>
    <body>
            <h1 style="text-align:center;margin-top:3vh;font-weight:bold;">UPLOAD PRODUCT DETAIL</h1>
            <form action="uploadvcode.php" method="post" enctype="multipart/form-data">
            <div class="row r1">
            
            <div class="col-6 c1"><center><img id="output" height="100%" /></center></div>
            <div class="col-6 c1"><center><img id="output1" height="100%" /></center></div>
        </div>
        <div class="row r1">
            <div class="col-6 c2"><span style="font-family: calibri;font-weight: bold;">UPLOAD IMAGE 1:</span><br><br><input type="file" name="im1" required="" accept="image/*" onchange="loadFile(event)"></div>
            <div class="col-6 c2"><span style="font-family: calibri;font-weight: bold;">UPLOAD IMAGE 2:</span><br><br><input type="file" name="im2" accept="image/*" onchange="loadFile1(event)"></div>
        </div>
        <br><div class="row r1">
            <span class="col-6 c2" style="font-family: calibri;font-weight: bold;">PRICE:&nbsp;<input type="number" name="price" required=""></span>
            <span class="col-6 c2" style="font-family: calibri;font-weight: bold;">CATAGORY:&nbsp;<select name="catagory" required="">
                <option value="">Select</option>
                <option value="Painting">Painting</option>
                <option value="Handicraft">Handicraft</option>
                <option value="Pottery">Pottery</option>
                <option value="Sculpture">Sculpture</option>
                <option value="Card">Card</option>
                <option value="Paper Cutting">Paper Cutting</option>
                <option value="Metal work">Metal work</option>
                <option value="Embroidery">Embroidery</option>
                <option value="Photography">Photography</option>
                <option value="Decorative Art">Decorative Art</option>
                <option value="Weaving">Weaving</option>
                <option value="Knitting">Knitting</option>
                <option value="Wood carving">Wood carving</option>
                <option value="Origami">Origami</option>
                <option value="Scrapbooking">Scrapbooking</option>
            </select></span>
        </div>
        <br>
        <div class="row r1">
            <span style="font-weight: bold;">Description</span>
            <div class="col-6">
                <textarea style="height: 25vh;width: 70%;" name="description" required=""></textarea>
            </div>
            <div class="col-6">
                <div class="row r1">
                    <div class="col-12" style="margin-bottom: 20px;"><span style="font-weight: bold;">Height: </span><input type="text" name="height" required=""></div>
                    <div class="col-12" style="margin-bottom: 20px;"><span style="font-weight: bold;">Width: </span><input type="text" name="width" required=""></div>
                    <div class="col-12"><span style="font-weight: bold;">Weight: </span><input type="text" name="weight" required=""></div>
                </div>
            </div>
        </div>
        <br><br><center><input type="submit" value="UPLOAD" style="text-decoration: none;color: black;font-weight: 700;" class="btn"></center>
            <!-- Button trigger modal -->
            </form>
        
        <script>
            var loadFile=function(event)
            {
                var image=document.getElementById('output');
                image.src=URL.createObjectURL(event.target.files[0]);
                
            };
            var loadFile1=function(event)
            {
                var image1=document.getElementById('output1');
                image1.src=URL.createObjectURL(event.target.files[0]);
            };
        </script>

    </body>

</html>
