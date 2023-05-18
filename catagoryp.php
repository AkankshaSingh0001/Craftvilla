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
            box-sizing:border-box;
            padding:20px;
        }
        .c1
        {
            position:relative;
            padding: 25px 10px;
            box-sizing:border-box;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }
        .h
        {
            position:absolute;
            z-index:5;
            width:94.5%;
            height:30%;
            padding: 25px 15px;
            box-sizing:border-box;
            background-color:black;
            margin-top: -150px;
            opacity: 0.7;
        }
    </style>

</head>

<?php  
mysql_connect('localhost','root','');
mysql_select_db('craftvilla');

$query="select count(*) from uploadv where catagory='Card'";

$res=mysql_query($query);
?>

<body>
    <section>
        <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="metalwork.php"><img src="image/47.webp" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">METAL WORK</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="scrapbook.php"><img src="image/53.jpeg" alt="" style="height:450px;width:100%">
            <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">SCRAPBOOK</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="painting.php"><img src="image/41.jpeg" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">PAINTING</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="decorativeart.php"><img src="image/50.webp" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">DECORATIVE ART</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="knitting.php"><img src="image/51.jpeg" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">KNITTING</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="handicrafy.php"><img src="image/42.jpeg" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">HANDICRAFY</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="photogrophy.php"><img src="image/49.jpeg" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">PHOTOGRAPHY</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="embroidery.php"><img src="image/48.jpeg" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">EMBROIDERY</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="greeting.php"><img src="image/45.webp" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">CARD</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="pottery.php"><img src="image/43.webp" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">POTTERY</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="woodcraving.php"><img src="image/52.jpeg" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">WOOD CRAVING</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="origami.php"><img src="image/46.webp" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">ORIGAMI</span></div></div></a>
            <div class="col-lg-3 col-md-4 col-sm-6 c1"><a href="sculpture.php"><img src="image/44.webp" alt="" style="height:450px;width:100%">
        <div class="h"><span style="color:white;font-size:30px;font-style:calibri;font-weight:bold;">SCULPTURE</span></div></div></a>
            

</div>
        </div>
    </section>
</body>
</html>