<?php include 'top.php';?>

    <!-- reformation-section start-->
    <section class="reformation-section">
      <div class="container-fluid no-padding">
        <div class="section-intro text-center">
          <h2>News Section</h2>
          <hr class="colored">
          <p>Mr. Sachin Chaudhary</p>
        </div>

        
        <div class="row" style="margin-right: 0px;margin-left: 0px;">
          <div id="gridWrapper">

            <?php for ($i=1; $i < 77; $i++) { 
            
             ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper portfolio-padding">

              <figure class="tt-effect">
                <img src="images/news/1 (<?php echo $i; ?>).jpg" alt="News Section - Sachin Chaudhary">
                <figcaption>
                  <div class="content">
                    <div class="links">
                      <a class="image-link" href="images/news/1 (<?php echo $i; ?>).jpg"><i class="fa fa-search-plus"></i></a>                          
                    </div><!-- /.links -->

                    
                  </div>
                </figcaption>     
              </figure>

            <!-- <p><?php echo $title[$i-1]; ?></p> -->
            </div><!-- /.portfolio-wrapper -->
          <?php } ?>
          </div><!-- /#grid -->
        </div><!-- /.row -->

        

      </div><!-- /.container-fluid -->
    </section>
    <!-- reformation-section start-->


<?php include 'foot.php'; ?>