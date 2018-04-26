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
        <?php include('header.php') ?>
    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="page-content">
        <!--Featured photos-->
        <section class="well-lg-var-5 bg-secondary products-details">
            <div class="container">
                <h2 class="text-left">Flocon® 260</h2>
                <div class="row   ">
                    <div class="col-md-6">
                        <div class="products-details-contant">
                            <h3>Application Use</h3>
                            <ul>
                                <li><p>Antiscalant / antifoulant for reverse osmosis systems.</p></li>
                            </ul>
                        </div>
                        <div class="products-details-contant">
                            <h3>Features</h3>
                            <ul>
                                <li><p>Controls both crystallisation fouling and particulate fouling of membrane
                                        surfaces.
                                    </p></li>
                                <li><p>Effective against inorganic scales including CaCO3, CaSO4, BaSO4, SrSO4 and CaF2.
                                    </p></li>
                                <li><p>Formulated to control soluble and insoluble iron.
                                    </p></li>
                                <li><p>Excellent dispersant activity against particulates.
                                    </p></li>
                                <li><p>Effective against silica fouling.
                                    </p></li>
                            </ul>
                        </div>
                        <div class="products-details-contant">
                            <h3>Benefits</h3>
                            <ul>
                                <li><p>Premium product for control of inorganic scaling and fouling of membrane surfaces.
                                    </p></li>
                                <li><p>Performance remains unaffected in the presence of iron.
                                    </p></li>
                                <li><p>Prevents deposition of inorganic and organic particulates and colloids.
                                    </p></li>
                                <li><p>Prevents silica fouling.
                                    </p></li>
                                <li><p>Long term trouble free operation.
                                    </p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="images/0009.jpg">
                        <br><br>
                        <a href="inquiry.php" class="btn btn-secondary btn-md offset-6">Apply</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--========================================================
                              FOOTER
    ==========================================================-->
    <?php include('footer.php') ?>
</div>

<!-- Core Scripts -->
<script src="js/core.min.js"></script>
<!-- Additional Functionality Scripts -->
<script src="js/script.js"></script>
<script src="js/customer.js"></script>
</body>
</html>