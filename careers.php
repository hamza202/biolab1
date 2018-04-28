<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">
<?php include ('style.php')?>
<body>
<section class="loading ">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</section>
<!-- The Main Wrapper -->
<div class="page">

    <!--For older internet explorer-->
    <div class="old-ie"
         style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <!--END block for older internet explorer-->

    <!--========================================================
                              HEADER
    =========================================================-->
    <header class="page-header" id="">
        <!-- RD Navbar -->
        <?php include('header.php') ?>
        <!-- END RD Navbar -->
    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="page-content careers-page">
        <!--About us-->

      <section class="well-lg-var-3 bg-gray-4">
        <div class="container">
        
        <h2 class="text-center" id="History">Careers</h2>
        <br>
        <br>
          <div class="range range-sm-center range-md-left range-md-reverse range-md-middle range-50">
          
            <div class="col-sm-10 col-md-6"> 
              <figure class="block-wrap-1"><img src="images/careers.jpg" alt="" width="598" height="384">
              </figure>
            </div>
            <div class="col-sm-10 col-md-6 padding-top-50px">
              <div class="box-spacer-1">
                <h4>Your career starts here!</h4>
                <p>We seek individuals who share our values as a means of reinforcing and furthering the company's successful philosophy. We are looking for motivated, positive people specializing in:</p>
                <a href="job.php" class="btn btn-secondary-var-1 btn-md blue-btn">Join Now to Our Team</a>
              </div>
            </div>
          </div>
        </div>
      </section>


<section class="section section-md  text-center">
        <div class="container">
          <h2>Available Vacancies</h2>
          <p>Here’s a list of recently opened positions at Creator.</p>
          <div class="range range2">
            <div class="col-sm-10 col-md-6 padding-y-15px">
              <!-- Block vacancy--><a class="block-vacancy bg-gray-4" href="jobs.php">
                <h4 class="block-vacancy__title">Engineer</h4>
                <ul class="block-vacancy__meta">
                  <li><span class="fas fa-map-marker"></span><span>Seattle</span></li>
                  <li><span class="fas fa-stopwatch"></span><span>Full Time</span></li>
                  <li><span class="fas fa-clock"></span><span>6 hours ago</span></li>
                </ul></a>
            </div>
            <div class="col-sm-10 col-md-6 padding-y-15px">
              <!-- Block vacancy--><a class="block-vacancy bg-gray-4" href="jobs.php">
                <h4 class="block-vacancy__title">Office Manager</h4>
                <ul class="block-vacancy__meta">
                  <li><span class="fas fa-map-marker"></span><span>New York</span></li>
                  <li><span class="fas fa-stopwatch"></span><span>Part Time</span></li>
                  <li><span class="fas fa-clock"></span><span>6 hours ago</span></li>
                </ul></a>
            </div>
            <div class="col-sm-10 col-md-6 padding-y-15px">
              <!-- Block vacancy--><a class="block-vacancy bg-gray-4" href="jobs.php">
                <h4 class="block-vacancy__title">Director</h4>
                <ul class="block-vacancy__meta">
                  <li><span class="fas fa-map-marker"></span><span>Chicago</span></li>
                  <li><span class="fas fa-stopwatch"></span><span>Full Time</span></li>
                  <li><span class="fas fa-clock"></span><span>6 hours ago</span></li>
                </ul></a>
            </div>
            <div class="col-sm-10 col-md-6 padding-y-15px">
              <!-- Block vacancy--><a class="block-vacancy bg-gray-4" href="jobs.php">
                <h4 class="block-vacancy__title">Chief Engineer</h4>
                <ul class="block-vacancy__meta">
                  <li><span class="fas fa-map-marker"></span><span>Alexandria</span></li>
                  <li><span class="fas fa-stopwatch"></span><span>Full Time</span></li>
                  <li><span class="fas fa-clock"></span><span>6 hours ago</span></li>
                </ul></a>
            </div>
          </div>
        </div>
      </section>




    </main>
    <!--========================================================
                              FOOTER
    ==========================================================-->
<?php include ('footer.php')?>
</div>

<!-- Core Scripts -->
<script src="js/core.min.js"></script>
<script src="js/lightslider.min.js"></script>
<script>

    $(document).ready(function () {
        $("#customers-slider").lightSlider({
            loop: true,
            keyPress: true,
            auto:true,
            speed:1000,
            pause:2500,
            slideMove: 1,
            item: 4,
            prevHtml: '<i class="fa fa-angle-left"></i>',
            nextHtml: '<i class="fa fa-angle-right"></i>',
            pager:false,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        item: 3,
                        slideMove: 1,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        item: 2,
                        slideMove: 1,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        item: 1,
                        slideMove: 1
                    }
                }
            ]
        });
    });
</script>
<!-- Additional Functionality Scripts -->
<script src="js/script.js"></script>
<script src="js/customer.js"></script>
</body>
</html>