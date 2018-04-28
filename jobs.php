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
                <h2 class="text-center" style="margin-bottom: 20px;">Presented on job</h2>
                <div class="col-md-8">
                    <h3>job title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur debitis dignissimos ea hic ipsam ipsum necessitatibus quasi, quia, repudiandae sapiente sed suscipit, voluptatibus. Accusamus autem beatae dolorem error sint.</p>

                    <div>
                        <ul class="block-vacancy__meta list-inline">
                            <li><span class="fas fa-map-marker"></span><span> Seattle</span></li>
                            <li><span class="fas fa-stopwatch"></span><span>Full Time</span></li>
                            <li><span class="fas fa-clock"></span><span>6 hours ago</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <form class="form-card" style="margin-top: 0">
                        <fieldset class="form-fieldset">
                            <div class="form-element form-input">
                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Please fill in your Full Name" type="text" required/>
                                <div class="form-element-bar"></div>
                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">*Full Name</label>
                            </div>

                            <div class="form-element form-input">
                                <input id="field-uyzeji-352rnc-4rv3g1-bvlh88-9dewuz" class="form-element-field" placeholder="Please fill in your Email Address" type="email" required/>
                                <div class="form-element-bar"></div>
                                <label class="form-element-label" for="field-uyzeji-352rnc-4rv3g1-bvlh88-9dewuz">Email Address</label>
                                <small class="form-element-hint">We will never spam you!</small>
                            </div>
                            <div class="form-element form-input">
                                <input id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" placeholder="Please fill in your Phone Number" type="number" required/>
                                <div class="form-element-bar"></div>
                                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">*Phone Number</label>
                            </div>

                            <div class="form-element form-select">
                                <select id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field">
                                    <option disabled selected value="" class="form-select-placeholder"></option>
                                    <option value="Engineer">Engineer</option>
                                    <option value="Director">Director</option>
                                    <option value="Office Manager">Office Manager</option>
                                    <option value="Chief Engineer">Chief Engineer</option>
                                </select>
                                <div class="form-element-bar"></div>
                                <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">Job title</label>
                            </div>
                            <div class="form-element form-input">
                            <span class="control-fileupload">
                            <label for="file">Upload You CV</label>
                            <input type="file" id="file">
                            </span>
                            </div>

                        </fieldset>
                        <div class="form-actions">
                            <button class="form-btn" type="submit">Apply</button>
                            <button class="form-btn-cancel -nooutline" type="reset">Cancel</button>
                        </div>
                    </form>
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
<script>document.addEventListener("change", function(event) {
        var element = event.target;
        if (element && element.matches(".form-element-field")) {
            element.classList[element.value ? "add" : "remove"]("-hasvalue");
        }
    });

    //File upload

    $(function() {
        $('input[type=file]').change(function(){
            var t = $(this).val();
            var labelText = 'File : ' + t.substr(12, t.length);
            $(this).prev('label').text(labelText);
        })
    });
</script>
<!-- Additional Functionality Scripts -->
<script src="js/script.js"></script>
<script src="js/customer.js"></script>
</body>
</html>