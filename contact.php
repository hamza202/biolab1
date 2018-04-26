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
    <?php include ('header.php')?>
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
        <div id="map" style="width:100%;height:calc(100vh - 72px);"></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(24.7000000,46.7000000);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  // Zoom to 9 when clicking on marker
  google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjr6yYjHOEV04xWmnF9rKzzupyfDxylTc&callback=myMap"></script>

        <!-- END RD Google Map -->
        <!-- Why exterior design is important-->
        <section class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 bg-secondary-var-3 inset-3">
                        <h2>contact form</h2>
                        <!-- RD Mailform -->
                        <form class='rd-mailform' method="post" action="bat/rd-mailform.php">
                            <!-- RD Mailform Type -->
                            <input type="hidden" name="form-type" value="contact"/>
                            <!-- END RD Mailform Type -->
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label data-add-placeholder>
                                            <input type="text"
                                                   name="name"
                                                   placeholder="Name:"
                                                   data-constraints="@NotEmpty @LettersOnly"/>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label data-add-placeholder>
                                            <input type="text"
                                                   name="email"
                                                   placeholder="Email:"
                                                   data-constraints="@NotEmpty @Email"/>
                                        </label>
                                    </div>
                                    <div class="col-sm-12">
                                        <div>
                                        <label for="sel1">Management:</label>
                                        <select class=""  id="sel1">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 offset-11">
                                        <label data-add-placeholder>
                                   <textarea name="message" placeholder="Message:"
                                             data-constraints="@NotEmpty"></textarea>
                                        </label>

                                        <div class="mfControls">
                                            <button class="btn btn-md btn-secondary btn-no-arrow" type="submit">send message</button>
                                        </div>
                                        <div class="mfInfo"></div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <!-- END RD Mailform -->
                        <div class="triangel"></div>
                    </div>
                    <div class="col-md-4  col-md-preffix-2 well-sm">
                        <h2>Address</h2>

                        <p>Email us with any questions or inquiries or use our contact data. We would be happy to answer
                            your questions.</p>
                        <address>SAUDI ARABIA - RIYADH
                        </address>
                        <div class="contact-info">
                            <dl>
                                <dt> phone </dt><dd><a href="callto:#">(+966)13 894 5662</a></dd>
                            </dl>
                            <dl>
                                <dt> Telephone </dt><dd><a href="callto:#">+1 800 603 6035</a></dd>
                            </dl>
                            <dl>
                                <dt>FAX </dt><dd><a href="callto:#">+1 800 889 9898</a></dd>
                            </dl>
                            E-mail: <a href="mailto:#" class="mail">info@biolabarabia.com</a>
                        </div>
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
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>