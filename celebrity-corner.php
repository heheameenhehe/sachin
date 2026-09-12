<?php include 'top.php';
$title = array(
"Pankaja Munde (BJP, Minister)",
"Ali (Actor)",
"Anu Malik (Musician)",
"(Actress)",
"Sanjeev Kapoor (International Chef)",
"Divya Khosla Kumar (Director & Actress)",
"Prerna Arora (Director)",
"",
"Ramesh Sippi (Director) & Kiran Juneja (Actress)",
"Lillete Dubey (Actress)",
"Kunika (Actress)",
"Jitendra & Tushar Kapoor (Actor)",
"Raveena Tandon (Actress)",
"Rohit Shetty (Director)",
"Mugdha Godsay (Actress)",
"Puja Bedi (Actress)",
"Zeenat Aman (Actress)",
"",
"Kumar Mangalam Birla & Neerja Birla (Businessman)",
"",
"Shaan (Singer)",
"",
"Karan Veer Sharma (Actor)",
"Sandeep Khosla (Designer)",
"Arjan Bajwa (Actor)",
"Gulshan Grover (Actor)",
"Sukhe (Pop Singer)",
"Kulsum Wahab (CEO,Hothur Foundation)",
"Ishq Bector (Pop Singer) Neha Sharma (Actress)",
"Sangram Singh (Indian Wrestler)",
"Sonu Sood (Actor)",
"Sajid Khan (Director)",
"Farah Khan (Director)",
"The Great Khali (International Wrestler)",
"Mohammad Azharuddin (Former International Cricketer)",
"Nari Hira (Editor, Magna Publishing)",
"",
"Guru Randhawa (Pop Singer)",
"Smriti Mandhana (Former International Cricketer)",
"Pankaj Advani (Snooker Player)",
"Prerna Arora (Director)"
);
?>

    <!-- reformation-section start-->
    <section class="reformation-section">
      <div class="container-fluid no-padding">
          <img src="images/banners/celebrity corner.jpg" alt="" style="width: 100%; height: auto; margin-bottom: 50px;">
        <!--<div class="section-intro text-center">-->
        <!--  <h2>Celebs Section</h2>-->
        <!--  <hr class="colored">-->
        <!--  <p>Mr. Sachin Chaudhary</p>-->
        <!--</div>-->

        
        <div class="row" style="margin-right: 0px;margin-left: 0px;">
          <div id="gridWrapper">

            <?php for ($i=1; $i < 42; $i++) { 
            
             ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper portfolio-padding">

              <figure class="tt-effect">
                <img src="images/celebs/<?php echo $i; ?>.jpg" alt="Celebrity Section - Sachin Chaudhary">
                <figcaption>
                  <div class="content">
                    <div class="links">
                      <a class="image-link" href="images/celebs/<?php echo $i; ?>.jpg"><i class="fa fa-search-plus"></i></a>                          
                    </div><!-- /.links -->

                    <p><?php echo $title[$i-1]; ?></p> 
                    
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