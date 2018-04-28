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
    <main class="page-content content">
        <!-- RD Google Map -->
        <!-- <div class="rd-google-map">
            <div id="google-map" class="rd-google-map__model" data-zoom="14" data-x="-73.9874068"
                 data-y="40.643180"></div>
            <ul class="rd-google-map__locations">
                <li data-x="-73.9874068" data-y="40.643180">
                    <p>SAUDI ARABIA - RIYADH.</p>
                </li>
            </ul>
        </div> -->

        <section class="bg-gray-4 well-lg-var-3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2>Office</h2>
                        <br>
                        <br>
                    </div>
                    <div class="col-md-4">

                        <address>
                            Corporate Office
                        </address>
                        <div class="contact-info">
                            <dl>
                                <dt> Address</dt>
                                <dd>Biolab Arabia Ltd. PO Box 9175 Riyadh, 11413 Kingdom of Saudi Arabia</dd>
                            </dl>
                            <dl>
                                <dt> Telephone</dt>
                                <dd><a href="callto:+966114761414">(+966)11 476 1414</a></dd>
                            </dl>
                            <dl>
                                <dt>FAX</dt>
                                <dd><a href="callto:+966114729008">+966 11 472 9008</a></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <address>
                            Head Office
                        </address>
                        <div class="contact-info">
                            <dl>
                                <dt> Address</dt>
                                <dd>Biolab Arabia Ltd.
                                    PO Box 76126
                                    Al Khobar, 31952
                                    Kingdom of Saudi Arabia
                                </dd>
                            </dl>
                            <dl>
                                <dt> Telephone</dt>
                                <dd><a href="callto:+96613 894 5662">(+966)13 894 5662</a></dd>
                            </dl>
                            <dl>
                                <dt>FAX</dt>
                                <dd><a href="callto:+966138945226">+966 13 894 5226</a></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <address>
                            Factory
                        </address>
                        <div class="contact-info">
                            <dl>
                                <dt> Address</dt>
                                <dd>Biolab Arabia Ltd.
                                    Jubail Industrial City
                                    PO Box 10918
                                    Jubail, 31961
                                    Kingdom of Saudi Arabia
                                </dd>
                            </dl>
                            <dl>
                                <dt> Telephone</dt>
                                <dd><a href="callto:+966133403180">(+966)133403180</a></dd>
                            </dl>
                            <dl>
                                <dt>FAX</dt>
                                <dd><a href="callto:+966133403188">+966 13 340 3188</a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END RD Google Map -->
        <!-- Why exterior design is important-->
        <section class="bottom">
            <div id="map" style="width: 100%; height: calc(100vh - 105px);"></div>
        </section>
    </main>
    <!--========================================================
                              FOOTER
    ==========================================================-->
    <?php include('footer.php') ?>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL_JWaOHAaCzfhkMz7boUM9ox5MQU7df4&callback=initMap"
        type="text/javascript"></script>
<script type="text/javascript">
    var locations = [
        [' Al-Dmmam' + '<br>' + 'Head Office' + '<br>' + 'Fax : +123456', 26.3544482, 50.2728949, 7],
        [' Jaddah' + '<br>' + 'Fax : +123456', 21.4491898, 39.7716495, 9],
        [' Riyadh' + '<br>' + 'Fax : +123456', 24.7241503, 47.3830233, 11],
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5.25,
        center: new google.maps.LatLng(24.807725, 44.3727667, 5.25),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map

        });

        google.maps.event.addListener(marker, 'mouseover , cilck', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
                icon: 'images/marker.png';
            }
        })(marker, i));
    }
</script>
<script type="text/javascript">
    var locations = [
        ['<div  class="text-left"><h3 class="h3 colorRed text-left">Head Office</h3>Head Office & Factory<br>1st Industrial City<br>P.O.Box 5785, Dammam 31432<br>Tel: +966 123456789, Fax: +966 123456789<br>Email:<a class="colorRed">info@info.com</a><br><a class="colorRed">info@info.com</a><br><hr><br></div>', 26.3544482, 50.2728949, 7],
        ['<div  class="text-left"><h3 class="h3 colorRed text-left"> Jeddah </h3>Jeddah Office<br>Tel: +966 123456789,<br>Fax: +966 123456789<br>Fax: +966 123456789<br>Email :<a class="colorRed">info@info.com</a><br><hr><br></div>', 21.4491898, 39.7716495, 9],
        ['<div  class="text-left"><h3 class="h3 colorRed text-left"> al-Riyadh</h3>Riyadh Office<br>P.O.Box 968, Riyadh 11421<br>Tel: +966 123456789,<br>Fax: +966 123456789<br>Email :<a class="colorRed"> info@info.com </a><br><hr><br></div>', 24.7241503, 47.3830233, 11],

    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 5.25,
        center: new google.maps.LatLng(24.807725, 44.3727667, 5.25),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        google.maps.event.addListener(marker, 'mouseover', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
    ;
</script>
<!-- Core Scripts -->
<script src="js/core.min.js"></script>
<!-- Additional Functionality Scripts -->
<script src="js/script.js"></script>
<script src="js/customer.js"></script>
</body><!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>