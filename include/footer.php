            <!-- Footer -->
            <div id="contact" class="row" style="height: 100%;">
                <div class="col-md-4 top-social-media bottom-col-padding footer-logo-col">
                    <img src="img/Untitledaa-1.png" class="footer-logo"> <br>
                    <div style="margin-right: 23px">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-invision"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                        <a href="#"><i class="fab fa-pinterest-square"></i></a>
                        <a href="#"><i class="fab fa-apple"></i></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row footer-link-row">
                        <div class="col-md-3">
                            <h6 class="footer-h6">Contact</h6>
                            <?php
                            $sql = "SELECT * FROM contact_us_info ORDER BY user_id ASC LIMIT 6";
                            $result = $conn->query($sql);
                               if ($result->num_rows > 0) {
                                   // output data of each row
                                while($row = $result->fetch_assoc()) {

                                    $address= $row['address'];
                                    $phon_no= $row['phon_no'];
                                    $info_mail= $row['info_mail'];
                                    $marketing_mail= $row['marketing_mail'];
                            ?>
                            <p class="footer-p">
                                <?php echo "$address <br>"; ?>
                                <?php echo "$phon_no <br>"; ?>
                                <?php echo "$info_mail <br>"; ?>
                                <?php echo"Email :$marketing_mail <br>" ; ?>
                                <SPAN style="font-size: 9px; margin-left: 37px;">(Marketing & Merchandize Dept.)</SPAN>
                            </p>
                           <?php }}?>

                        </div>
                        <div class="col-md-3">
                            <h6 class="footer-h6">Latest Tweest</h6>
                            <p class="footer-p">
                                <i class="fab fa-twitter"></i>
                                &nbsp We can not wait to show you <br>
                                &nbsp &nbsp &nbsp what we're working on! <br>
                                &nbsp &nbsp &nbsp
                                <span style="font-size: 8px;"> March 16, 20</span>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6 class="footer-h6">Newsletter</h6>
                            <p class="footer-p">
                                Subscribe to our newsletter for <br>
                                latest updates about our <br>
                                compan
                            </p>
                            <input type="text" class="footer-input-field form-control" placeholder="Email address" >
                            <!-- <i class="fab fa-telegram-plane"></i> -->

                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>

            <div class="row footer-rights-bar" style="background-color: #000000;">
                <div class="col-md-12">
                    <p>
                        ©2018 All Rights Reserved by S.H Knitwear . Theme Design by
                        <span style="color: #842d2d;">Maxenius Solution</span>
                    </p>
                </div>
            </div>


            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    </div><!--  main container end -->

<!--  slick slider script -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="slick/slick/slick.min.js"></script>

<!--  Mini slider of about us -->
<script type="text/javascript">
$('.single-item').slick({
     slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 800,
        dots: true,
        arrows: true,
        variableWidth: true
});

</script>

<!--  client logo images -->
<script type="text/javascript">
    $('.autoplay').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 800,
        dots: false,
        arrows: false,
          responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
    });
   
</script>

<script type="text/javascript">
    $('.autoplay1').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1800,
        dots: false,
        arrows: false,
          responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
    });
   
</script>
<!--  for gallery poopup -->
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

<!--  for gallery only responsive view -->
<script type="text/javascript">

    $('.single-item-arrow').slick({
     slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 800,
        dots: true,
        arrows: false,
        variableWidth: true
});

</script>
<!--  for top button -->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
