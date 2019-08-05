<!DOCTYPE html>
<html>
<head>
    <title>D.H.KNITWEAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- this script link use for menu function-->
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- custom css files -->
<link rel="stylesheet" type="text/css" href="custom/style.css">
<link rel="stylesheet" type="text/css" href="custom/gallery2.css">

        <!-- This link use for  gallery plugin -->


        <!-- Bootstrap online links-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Font Awesome  online links-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

        <!-- for slick  slider -->
<link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>

</head>
<body>
        <div class="container-fluid">

            <!-- top nave with social media -->
            <div class="row" style="background-color: #343434;" >
                <div class="col-md-1 "></div>
                <div class="col-md-8 top-link top-col-padding line-brk">
                    <a href="#" class="hide-mbl-view">
                        <i class="fas fa-home"></i>
                        Central Mills Jhang Road, Fasisalabad, Punjab, Pakistan
                    </a>


                    <a href="#">
                        <i class="fas fa-phone"></i>
                         +92-41-2653926
                    </a>

                    <a href="#" class="mail-resposive">
                        <i class="fas fa-envelope"></i>
                        info@shknitwear.com
                    </a>

                </div>
                <div class="col-md-2 top-social-media top-col-padding hide-mbl-view">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-invision"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-skype"></i></a>
                    <a href="#"><i class="fas fa-compact-disc"></i></a>
                </div>
                <div class="col-md-1"></div>
            </div>
                    <!-- Navebar Main -->
            <div id="home" class="row" style="background-color: #ebebeb;">
                <div class="col-md-1"></div>
                <div class="col-md-4 logo-adjust-mbl-view">
                    <?php

                        $sql= "SELECT * FROM logo";
                        $result = $conn->query($sql);
                        if($result->num_rows > 0){
                            while($row=$result->fetch_assoc()){
                                $imagepath = $row["imgpath"];


                        ?>
                            <!-- <img src="img/Untitled-1.png" class="logo"> -->
                            <a href="index.php"><img src="admin/logo/<?php echo $imagepath; ?>"  class="logo"  /> </a>
                        <?php }} ?>
                </div>
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-md  navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse color-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto mt-5 mt-lg-0">
                                <?php
                                    $sql = "SELECT * FROM menu limit 7";

                                       $result = $conn->query($sql);

                                       if ($result->num_rows > 0) {

                                        // output data of each row

                                        while($row = $result->fetch_assoc()) {

                                        $menu_name      = $row["menu_name"];
                                        $menu_link      = $row['menu_link'];

                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $menu_link; ?>">
                                            <?php echo $menu_name; ?>
                                        </a>
                                    </li>
                                <?php }} ?>

                            </ul>
                            <div class="search-box">
                                <input type="text" class="search-txt" placeholder="search">
                                <a class="search-btn" style="font-size: 23px;">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-1"></div>
            </div>
