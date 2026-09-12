<?php include 'top.php'; ?>
<!-- contact-section start -->
    <section id="contact" class="contact-section">
      <div class="container">
        <div class="section-intro text-center">
          <h2>Get in touch</h2>
          <hr class="colored">
          <p>Connect with us to make a better India!</p>
        </div>

        <form class="text-center" name="contact-form" id="contactForm" action="sendemail.php" method="POST">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label class="sr-only" for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                      <label class="sr-only" for="subject">Subject</label>
                      <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                    </div>
                </div>
            </div>

            <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <textarea name="message" class="form-control" id="message" placeholder="Leave me a message"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary btn-lg">send message</button>
        </form>

      </div>
    </section>
    <!-- contact-section end -->


    <!-- location-section start -->
    <section class="location-section">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-md-6 no-padding">
                  <div id="myMap"></div>
                </div> -->

                <!-- /.col-md-8 -->
                <div class="col-md-12 no-padding">
                    <div class="location-info">
                        <address>
                          <div class="address">
                            <strong>Head Office</strong><br>
                            Moradabad-244001, India<br>
                          </div>


                          <div class="phone">
                            <strong>Helpline</strong><br>
                            +91 999999999<br>
                            
                          </div>


                          <div class="mail">
                            <strong>Email</strong><br>
                            <a href="mailto:#">info@sachinchaudhary.com</a><br>
                            <a href="mailto:#">connect@sachinchaudhary.com</a>
                          </div>
                        </address>

                    </div><!-- /.location-info -->
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- location-section end -->

<?php include 'foot.php'; ?>