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

                 <!-- Our History years & Description-->
                <div class="row">
                    <div class="col-md-2">
                        
                    </div>
                    <div class="col-md-8 Year_description">
                        <div class="autoplay1 row">
                            <?php
                            $sql = "SELECT * FROM our_history ORDER BY user_id ASC LIMIT 12";
                            $result = $conn->query($sql);
                               if ($result->num_rows > 0) {
                                   // output data of each row
                                while($row = $result->fetch_assoc()) {

                                    $year= $row['year'];
                                    $description= $row['description'];
                            ?>

                                
                                    <div class="col-md-3" style="">
                                        <div class="row">
                                                <div class="col-md-12 img_o" style="
                                                background-image: url('img/for-SH-Knit-Wear.png');
                                                width:100%;
                                                height: 23px;
                                                object-fit:center;
                                                background-repeat:
                                                no-repeat;
                                                background-position: center;">
                                                </div>
                                        </div>
                                         <div class="ctrl-div ctrl-div-1 text-center" style="
                                            width: 80%;margin: 0px 10%;padding: 0px;margin-top: 5px;">
                                            <h5 class="our-history-h5 " >
                                                <?php echo "$year <br><br>"; ?>
                                                <?php echo "$description"; ?>
                                            </h5>
                                        </div>
                                        <!-- <?php echo "$year <br><br>"; ?>
                                    <?php echo "$description"; ?> -->
                                    </div>
                                
                            <?php }} ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        
                    </div>
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

