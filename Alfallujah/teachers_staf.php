</style>
<?php
include('init.php');
include($tp . 'header.php');
?>

<!--Full width header End-->


<div class="rs-banner-section">


    <img src="images/library-banner.jpg" alt="slide">

    <div class="banner-inner">
        <div class="container">
            <div class="banner-text">
                <h3 class="banner-title" style="font-size: -webkit-xxx-large;">
                البوابة الالكترونية 
                </h3>
           
                <!-- <div class="btn-area pt-20">
                    <a href="http://staff.asu.edu.eg//login.php" class="readon" style="margin: 0px 320px 0px 0px;">تسجيل
                        الدخول</a>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!--Services-->

<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="images/Fallujah-Logo.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="" class="form-control input_user"   placeholder="اسم المستخدم">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="" class="form-control input_pass"  placeholder="كلمة السر">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="button" name="button" class="btn login_btn">تسجيل دخول</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php
include($tp . 'footer_top.php');
include($tp . 'footer.php');

?>
<script src="https://www.asu.edu.eg/frontend/js/main.js"></script>
</body>

</html>