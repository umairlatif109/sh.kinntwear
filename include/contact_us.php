     <?php


  // if (isset($_POST["submit"])) {
  //   $to_email = "marketing@shknitwear.com";
  //   $subject  = "Contact us form";
  //   $headers  = "From: info@shkintwear.com";

  //   $name     = $_POST['name'];
  //   $email    = $_POST['email'];
  //   $website  = $_POST['website'];
  //   $company_name = $_POST['company_name'];

  //   $body = $name.'<br>'.$email.'<br>'.$website.'<br>'.$company_name;

  //   if ( mail($to_email, $subject, $body, $headers)) {
  //     echo("Email successfully sent to $to_email...");
  //   } else {
  //     echo("Email sending failed...");
  //   }
  // }

?>



      <!-- Banner with Contact Us Form -->
            <div class="row">
                <div class="col-md-12" style=" padding: 0px !important;">
                    <img src="img/ShopA-reduced.jpg" class="banner-img">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="banner-h1">30 Year of Experience</h1>
                                <p class="banner-p">Choose from one of our stock designs or have something designed specific for you, we can help.</p>
                                <button class="banner-btn"><img src="img/new_offe.png" class="banner-btn-img"> Our Profile</button>
                                <button class="banner-btn"><img src="img/phone.png" class="banner-btn-img"> Contact Us</button>

                            </div>
                            <div class="col-md-4" style="padding:0px 60px 0px 35px;">
                                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" class="form-bg">
                                    <h1 class="form-h1">Contact us</h1>
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-input-field form-control" required="name" placeholder="jhon F.candy">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-input-field form-control "required="name" placeholder="yourname@yourcompany.com">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Website</label>
                                        <input type="text" name="website" class="form-input-field form-control" required="name" placeholder="http://">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" name="company_name" class="form-input-field form-control" required="name" placeholder="Your organization">
                                    </div>
                                    <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <small class="form-text chekout-label">Subscribe Newsletter?</small>
                                    </div>
                                    <button type="submit" name="submit" class="form-btn">Send it now</button>
                                    <button type="submit" class="form-btn form-cancel-btn">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
