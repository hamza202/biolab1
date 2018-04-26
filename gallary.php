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
        <!-- Gallery -->
        <section class="well-lg-var-4 bg-secondary-var-4">
            <div class="container text-center">
                <h2>Collage</h2>
                <div class="isotope-filters text-center">
                    <button data-isotope-filter="type-1" data-isotope-group="gallery">
                        Products
                    </button>
                    <button data-isotope-filter="type-2" data-isotope-group="gallery" class="preffix-1">
                        Man power
                    </button>
                    <button data-isotope-filter="type-3" data-isotope-group="gallery" class="preffix-1">
                        Manufacturing
                    </button>
                    <button data-isotope-filter="type-4" data-isotope-group="gallery" class="preffix-1">
                        Projects
                    </button>
                    <button data-isotope-filter="*" data-isotope-group="gallery" class="preffix-1 active">
                        All
                    </button>
                </div>

                <div class="row isotope"
                     data-isotope-group="gallery"
                     data-isotope-layout="fitRows"
                     data-lightbox="gallery"
                     >

                    <div class="col-md-8 col-sm-8" data-filter="type-3">
                        <div class="thumb-video"><img class="thumb-video__image"
                                                      src="images/video-preview-962x465.jpg"
                                                      alt="" width="962" height="465">
                            <div class="thumb-video__caption">
                                <a class="section-video-link html5lightbox bg-overlay "
                                   href="images/2018-03-06-VIDEO-00000059.mp4" data-width="750" data-height="350" target="_blank"></a>

                                <div class="section-content">
                                    <a class="section-content-play html5lightbox thumb-video__button"
                                       href="images/2018-03-06-VIDEO-00000059.mp4" data-width="700" data-height="400"  target="_blank">
                                        <!--                                    <img src="images/video-preview-962x465.jpg" alt="play video">-->
                                    </a>
                                    <p class="section-content-text">See our video!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4" data-filter="type-3">
                        <!-- Magnific Popup Image -->
                        <a class="thumb" data-lightbox="image" href="images/gallery-06_original.jpg">
                            <img src="images/gallery-06.jpg" width="570" height="510" alt=""/>
                            <span class="thumb__overlay fa fa-search"></span>
                        </a>
                        <!-- END Magnific Popup Image -->
                    </div>
                    <div class="col-md-4 col-sm-4" data-filter="type-2">
                        <!-- Magnific Popup Image -->
                        <a class="thumb" data-lightbox="image" href="images/gallery-07_original.jpg">
                            <img src="images/gallery-07.jpg" alt=""/>
                            <span class="thumb__overlay fa fa-search"></span>
                        </a>
                        <!-- END Magnific Popup Image -->
                    </div>
                    <div class="col-md-8 col-sm-8" data-filter="type-2">
                        <!-- Magnific Popup Image -->
                        <a class="thumb" data-lightbox="image" href="images/gallery-08_original.jpg">
                            <img src="images/gallery-08.jpg" alt=""/>
                            <span class="thumb__overlay fa fa-search"></span>
                        </a>
                        <!-- END Magnific Popup Image -->
                    </div>
                    <div class="col-md-4 col-sm-4" data-filter="type-1">
                        <!-- Magnific Popup Image -->
                        <a class="thumb" data-lightbox="image" href="images/gallery-09_original.jpg">
                            <img src="images/gallery-09.jpg" alt=""/>
                            <span class="thumb__overlay fa fa-search"></span>
                        </a>
                        <!-- END Magnific Popup Image -->
                    </div>
                    <div class="col-md-4 col-sm-4" data-filter="type-1">
                        <!-- Magnific Popup Image -->
                        <a class="thumb" data-lightbox="image" href="images/gallery-10_original.jpg">
                            <img src="images/gallery-10.jpg" alt=""/>
                            <span class="thumb__overlay fa fa-search"></span>
                        </a>
                        <!-- END Magnific Popup Image -->
                    </div>
                    <div class="col-md-4 col-sm-4" data-filter="type-4">
                        <!-- Magnific Popup Image -->
                        <a class="thumb" data-lightbox="image" href="images/gallery-11_original.jpg">
                            <img src="images/gallery-11.jpg" alt=""/>
                            <span class="thumb__overlay fa fa-search"></span>
                        </a>
                        <!-- END Magnific Popup Image -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END Gallery-->
    </main>
    <!--========================================================
                              FOOTER
    ==========================================================-->
<?php include ('footer.php')?>
</div>

<!-- Core Scripts -->
<script src="js/core.min.js"></script>
<script src="js/froogaloop2.min.js"></script>
<script src="js/html5lightbox.js"></script>
<!-- Additional Functionality Scripts -->
<script src="js/script.js"></script>


</body>
</html>