<?php
    include 'admin/config.php';

    include 'include/header.php';

?>
<?php

    include 'include/contact_us.php';

?>

                <!-- Banner Upar Image -->
            <div class="row">
                <div class="col-md-12">
                    <img class="banner-upar-img"  src="img/thread-back-9001.png">
                </div>
            </div>

            <!-- Who We Are -->
            <div id="about" class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="text-align: center;">
                    <h1 class="who-are-h1">Who We Are?</h1>
                    <img src="img/Final-UI-.png" class="section-img">
                </div>
                <div class="col-md-2"></div>
            </div>

            <div  class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <h4 class="about-us-h4">About Us</h4>
                    <?php
                            $sql = "SELECT * FROM about_us ORDER BY user_id ASC LIMIT 6";

                            $result = $conn->query($sql);

                               if ($result->num_rows > 0) {

                                   // output data of each row

                                while($row = $result->fetch_assoc()) {

                                        $werbpage   = $row["werbpage"];


                        ?>
                        <p class="who-are-p">
                            <?php echo $werbpage; ?>
                        </p>
                    <?php }}?>

                </div>
                <div class="col-md-4 mt-3" style="padding: 0px 45px 1px 80px;">
                    <div class="single-item ">
                        <?php
                            $sql = "SELECT * FROM mini_slider ORDER BY user_id ASC LIMIT 3";

                            $result = $conn->query($sql);

                               if ($result->num_rows > 0) {

                                   // output data of each row

                                while($row = $result->fetch_assoc()) {

                                        $image      = $row["image"];

                        ?>
                            <div> <img src="admin/mini_slider/<?php echo $image; ?>" /> </div>

                            <!-- <div> <img src="img/aaaaa.jpg"> </div>
                            <div> <img src="img/IMAG2442-449x253.jpg"> </div> -->
                        <?php }}?>

                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
             <!-- Our History -->
            <div id="history" class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="text-align: center;">
                    <h1 class="who-are-h1">Our History?</h1>
                    <img src="img/Final-UI-.png"  class="section-img">
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="row mt-3 mb-5">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <img src="img/for-SH-Knit-Wear.png" class="our-history-section-img">

                    <div class="row" class="margin-top: 10px;">
                        <div class="col-md-3">
                            <div class="ctrl-div ctrl-div-1 ">
                                <h5 class="our-history-h5" >
                                    1983 <br><br> Another production unit was launched to increase production capacity hence meeting market demands
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 text-align-div">
                            <div class="ctrl-div ctrl-div-2">
                                <h5 class="our-history-h5">
                                    2000 <br><br> Things moved on and we shifted totally to export being an sole export oriented production setup
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ctrl-div ctrl-div-1">
                                <h5 class="our-history-h5">
                                    2010 <br><br> We introduced our in-house fabric dyeing setup henceforth becoming a 'Vertically oriented Apparel Manufacturing setup'
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 text-align-div">
                            <div class="ctrl-div ctrl-div-2">
                                <h5 class="our-history-h5">
                                    Till Date <br><br> We continue our operations and aim to excel further ensuring our customer satisfaction
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-2"></div>
            </div>

              <!-- Recent Product -->
            <div id="product" class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="text-align: center;">
                    <p class="product-p">PROUDLY DESPLAYED PROJECTS</p>
                    <div class="product-div-h1">
                        <h1 class="product-h1-1">Recent</h1><h1 class="product-h1-2">Products</h1>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 simple-bar">
                    <h1 class="product-h1-bar">__</h1>
                </div>
                <div class="col-md-2"></div>
            </div>

           <!--  Photo Gallery -->
           <br><br>
            <div class="row display-none-mbl-view">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row ">
                        <?php
                            $sql = "SELECT * FROM gallery ORDER BY user_id ASC LIMIT 6";

                            $result = $conn->query($sql);

                               if ($result->num_rows > 0) {

                                   // output data of each row

                                while($row = $result->fetch_assoc()) {

                                        $image      = $row["image"];

                        ?>
                            <div class=" col-md-4  thumb" style="margin-top: 25px;">
                                <a href="admin/gallery/<?php echo $image; ?>" class="fancybox" rel="ligthbox">
                                    <img  src="admin/gallery/<?php echo $image; ?>" class="zoom img-fluid "  alt="">
                                </a>
                            </div>
                        <?php }} ?>

                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <!-- photo gallery for responsive view only -->
            <div class="row d-sm-none d-block">
                <div class="col-md-12">
                    <div class="single-item-arrow">
                        <?php
                            $sql = "SELECT * FROM gallery ORDER BY user_id ASC LIMIT 6";

                            $result = $conn->query($sql);

                               if ($result->num_rows > 0) {

                                   // output data of each row

                                while($row = $result->fetch_assoc()) {

                                        $image      = $row["image"];

                        ?>
                            <div class="thumb">
                                <a href="admin/gallery/<?php echo $image; ?>" class="fancybox" rel="ligthbox">
                                    <img  src="admin/gallery/<?php echo $image; ?>" class="zoom img-fluid "  alt="">
                                </a>
                            </div>
                        <?php }} ?>

                    </div>

                </div>
            </div>
             <!-- Our Client -->
            <div id="client" class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="text-align: center;">
                    <h1 class="who-are-h1">Our Clients?</h1>
                    <img src="img/Final-UI-.png"class="section-img">
                </div>
                <div class="col-md-2"></div>
            </div>

            <!-- clients image links -->

            <div class="row">
                <div class="col-md-12 web-img-row-adjst">
                    <div class="autoplay ">
                        <?php
                            $sql = "SELECT * FROM clients ORDER BY user_id ASC LIMIT 6";

                            $result = $conn->query($sql);

                               if ($result->num_rows > 0) {

                                   // output data of each row

                                while($row = $result->fetch_assoc()) {

                                        $image      = $row["image"];

                            ?>
                                <div>
                                    <a href="#">
                                        <img src="admin/clients/<?php echo $image; ?>"  class="img-padding img-fluid">
                                    </a>
                                </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>

<?php
    include 'include/footer.php';
 ?>
