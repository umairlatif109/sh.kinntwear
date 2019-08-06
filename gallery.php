<?php
    include 'admin/config.php';

    include 'include/header.php';

?>

            <div class="row" style="text-align: -webkit-center; margin: 10px 0px;">
                <div class="col-md-12">
                    <h4 class="border-bottom p-2">GALLERY</h4>
                </div>
            </div>

            <br><br>
            <div class="row display-none-mbl-view">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row ">
                        <?php
                            $sql = "SELECT * FROM gallery ORDER BY user_id ASC LIMIT 15";

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

<?php include 'include/footer.php' ?>

<script type="text/javascript">
$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $(".zoom").hover(function(){

        $(this).addClass('transition');
    }, function(){

        $(this).removeClass('transition');
    });
});

</script>
