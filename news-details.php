<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">
<?php include('style.php') ?>

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
    <main class="page-content">
        <!-- Start shop section-->
        <section class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="block_content">
                            <h4 class="widget-title"><span><span class="fa fa-twitter"></span>Last Twitter</span></h4>
                            <div class="twittert-container">
                                <a class="twitter-timeline" href="#"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <img src="images/home-03.jpg">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="shop-title ">
                                    <p>Title of news</p>
                                </div>
                            </div>
                            <div class="col-xs-12 text-justify mt-40px">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi repellat
                                    tenetur! Neque quasi sequi totam veritatis voluptate. Animi consequatur cumque
                                    dignissimos eveniet impedit laudantium nisi odit, quae qui temporibus.

                                    <br><br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime non sit velit? Ab
                                    culpa expedita, illo ipsum nisi nostrum provident quasi tenetur voluptatum. Dicta
                                    exercitationem nulla officiis sint temporibus, voluptas.
                                    <br><br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus hic minus
                                    possimus quisquam, rerum soluta unde? Consectetur cumque expedita explicabo hic
                                    labore minus mollitia nihil, quod ratione reiciendis repudiandae vitae.
                                </p>
                            </div>
                            <div class="col-xs-12">
                                <div class="shop-under-category">
                                    <div class="list-social">
                                        <button class=" btn btn-default btn-tw"><i class="fa fa-twitter"></i>
                                            Twitter
                                        </button>
                                        <button class=" btn btn-default btn-fb"><i class="fa fa-linkedin-square"></i>
                                            Share
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 mt-40px">
                                <div id="imageGallery-wrap">
                                    <ul id="imageGallery">
                                        <li data-thumb="images/09.jpg" data-src="images/09.jpg">
                                            <img src="images/09.jpg" />
                                        </li>
                                        <li data-thumb="images/009.jpg" data-src="images/009.jpg">
                                            <img src="images/009.jpg" />
                                        </li>
                                        <li data-thumb="images/0009.jpg" data-src="images/0009.jpg">
                                            <img src="images/0009.jpg" />
                                        </li>
                                        <li data-thumb="images/009.jpg" data-src="images/009.jpg">
                                            <img src="images/009.jpg" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 mt-40px mb-30px">
                                <iframe width="100%" height="400" src="https://www.youtube.com/embed/avP5d16wEp0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shop section-->

    </main>
    <!--========================================================
                              FOOTER
    ==========================================================-->
    <?php include('footer.php') ?>
</div>

<!-- Core Scripts -->
<script src="js/core.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lightslider.min.js"></script>
<script type="text/javascript" src="js/lightgallery-all.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#imageGallery').lightSlider({
            gallery: false,
            item: 2,
            loop: true,
            enableDrag: false,
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }
        });
    });

</script>
<!-- Additional Functionality Scripts -->
<script src="js/script.js"></script>
<script src="js/customer.js"></script>
</body>
</html>