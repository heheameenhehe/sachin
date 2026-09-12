<?php include 'top.php';
$title = array(
"Sushmita Sen (Miss Universe & Actress) felicitating Mr. Sachin Chaudhary with Hope Foundation Awards Delhi.",
"Chief Minister of Uttar Pradesh Sh. Yogi Adityanath Ji felicitating Mr. Sachin Chaudhary with Shaurya Sammaan Award Lucknow.",
"Bollywood Actor Sonu Sood & Singer Guru Randhawa felicitating Mr. Sachin Chaudhary with Stardust Award Dubai.",
"UP's Deputy CM Sh. Keshav Prasad Maurya felicitating Mr. Sachin Chaudhary with India Voice Award Lucknow.",
"Uttrakhand Cebinate Minister Sh. Madan Kashik & Rajya Sabha MP Sh. Amar Singh felicitating Mr. Sachin Chaudhary with India Voice Award again Dehradoon.",
"Bollywood Actress Rekha & Director Karan Johar felicitating Mr. Sachin Chaudhary with Society Acheivers Award Mumbai.",
"Commissioner Meerut zone UP Mr. Alok Sinha felicitating Mr. Sachin Chaudhary with Times of India Award Meerut.",
"BJP Minister of Haryana Birender Singh felicitating Mr. Sachin Chaudhary with TV 100 Recognition Award Delhi.",
);
 ?>

    <!-- reformation-section start-->
    <section class="reformation-section">
      <div class="container-fluid no-padding">
        <img src="images/banners/awards.jpg" alt="" style="width: 100%; height: auto; margin-bottom: 50px;">

        
        <div class="row" style="margin-right: 0px;margin-left: 0px;">
          <div id="gridWrapper">

            <?php for ($i=1; $i < 9; $i++) { 
            
             ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper portfolio-padding" >

              <figure class="tt-effect">
                <img src="images/awards/1 (<?php echo $i; ?>).jpg" alt="Awards - Sachin Chaudhary">
                <figcaption>
                  <div class="content">
                    <div class="links">
                      <a class="image-link" href="images/awards/1 (<?php echo $i; ?>).jpg"><i class="fa fa-search-plus"></i></a>                          
                    </div><!-- /.links -->

                    
                    <!--<p><?php echo $title[$i-1]; ?></p>-->
                  </div>
                </figcaption>     
              </figure>

            <p><?php echo $title[$i-1]; ?></p>
            </div><!-- /.portfolio-wrapper -->
          <?php } ?>
          </div><!-- /#grid -->
        </div><!-- /.row -->

        

      </div><!-- /.container-fluid -->
    </section>
    <!-- reformation-section start-->


<?php include 'foot.php'; ?>