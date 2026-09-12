<?php include 'top.php';?>

    <!-- reformation-section start-->
    <section class="reformation-section">
      <div class="container-fluid no-padding">
        <img src="images/banners/jan samvad yatra.jpg" alt="" style="width: 100%; height: auto; margin-bottom: 50px;">

        
        <div class="row" style="margin-right: 0px;margin-left: 0px;">
          <div id="gridWrapper">

            <?php for ($i=1; $i < 13; $i++) { 
            
             ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper portfolio-padding" >

              <figure class="tt-effect">
                <img src="images/events/Jan Samwad Yatra/1 (<?php echo $i; ?>).jpg" alt="Jan Samwad Yatra - Sachin Chaudhary">
                <figcaption>
                  <div class="content">
                    <div class="links">
                      <a class="image-link" href="images/events/Jan Samwad Yatra/1 (<?php echo $i; ?>).jpg"><i class="fa fa-search-plus"></i></a>                          
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