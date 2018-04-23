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
    <?php include ('header.php') ?>
    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="page-content">
        <!--Featured photos-->
        <section class="well-lg-var-5 bg-secondary">
            <div class="container">
                <h2 class="text-center">BioLab photos</h2>

                <div class="row text-center text-md-left offset-4 row-xs-center">
                    <div class="col-md-4 col-sm-6">
                        <img src="images/gallery-01.jpg" width="370" height="384" alt="">
                        <h6 class="text-secondary text-sbold">Our tools are clean</h6>
                        <p>We strive to provide healthy and clean water to irrigate the thirsty and looking for water that benefits the body lightly on the stomach is useful for muscles, especially for athletes.</p>
                          <a href="#" class="btn btn-secondary btn-md offset-6">More</a>
                    </div>
                    <div class="col-md-4 col-sm-6 offset-8">
                        <img src="images/gallery-02.jpg" width="370" height="384" alt="">
                        <h6 class="text-secondary text-sbold">Our modern machines</h6>
                        <p>BLA is exclusively devoted to manufacture the antiscalants for the water treatment sector in Kingdom of Saudi Arabia and all over GCC with the essential elements required to meet today's water management challenges. </p>
                          <a href="#" class="btn btn-secondary btn-md offset-6">More</a>
                    </div>
                    <div class="col-md-4 col-sm-6 offset-7">
                        <img src="images/gallery-03.jpg" width="370" height="384" alt="">
                        <h6 class="text-secondary text-sbold">The accuracy of our machines</h6>
                        <p>Our brands; Belgard® and Floconآ® are comprehensive solutions for thermal and RO operations and recognized worldwide for the highest possible quality and are comprehensive solutions for thermal and superior technical performance. </p>
                          <a href="#" class="btn btn-secondary btn-md offset-6">More</a>

                    </div>
                </div>
            </div>
        </section>
        <!-- END  Featured photos-->

        <section class="bottom-1 bottom">
            <div class="container">
                <div class="row row-md-reverse">
                    <div class="col-md-5 bg-secondary-var-1">
                        <h2 class="letter-spasing">Biolab <br class="hidden visible-lg-block">
                            Our machine
                        </h2>

                        <p>Provide what the customer wants<br>
Providing the necessary services to the customer<br>
Providing 100% pure water<br>
Provide comprehensive staff and monitoring on all systems</p></p>
                        <a href="#" class="btn btn-secondary-var-1 btn-md">More</a>
                        <div class="triangel-var-1"></div>
                    </div>
                    <div class="col-md-7 offset-2 bg-images-8">

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
<!-- Additional Functionality Scripts -->
<script src="js/script.js"></script>
<script src="js/customer.js"></script>
</body>
</html>