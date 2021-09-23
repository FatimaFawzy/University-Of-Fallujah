<?php include('init.php'); ?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Alfallojah| الرئيسية</title>
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--Start: customize -->
    <meta name="description" content="Alfallojah university -جامعة الفلوجة" />
    <meta name="author" content="Alfallojah University" />
    <meta name="keywords" content="Alfallojah university - جامعة الفلوجة" />
    <meta name="date" content="2021-08-18">

    <!--Start: Facebook -->
    <meta property="og:image" content="images/Fallujah-Logo.png" />
    <meta property="og:image:secure_url" content="images/Fallujah-Logo.png" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="article">
    <meta property="fb:app_id" content="1003343913099550">
    <meta property="og:title" content="الرئيسية" />
    <!--End: Facebook -->

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/Fallujah-Logo.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/Fallujah-Logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/Fallujah-Logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/Fallujah-Logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/Fallujah-Logo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/Fallujah-Logo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/Fallujah-Logo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/Fallujah-Logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/Fallujah-Logo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/Fallujah-Logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/Fallujah-Logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/Fallujah-Logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/Fallujah-Logo.png">
    <link rel="manifest" href="js/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/Fallujah-Logo.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo $css; ?>main.css">
    <link rel="stylesheet" href="<?php echo $css; ?>styles.css">
    <style>
        .rs-countdown-part {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        .rs-gallery {
            padding-bottom: .1rem;
        }

        #rs-slider .slide-content p {
            font-weight: 500;
            margin-bottom: 30px;
            font-size: 20px;
        }

        @media (max-width: 1024px) {
            .rs-countdown-part {
                padding-top: 3.5rem;
                padding-bottom: 0 !important;
            }

            .rs-gallery {
                padding-bottom: 5rem !important;
            }

            #rs-slider .slide-content .slider-title {
                margin-bottom: 0px !important;
            }

            #rs-slider .slide-content .slider-desc,
            #rs-slider .slide-content p {
                display: none !important;
            }

            #rs-slider .slide-content:first-of-type p:nth-of-type(3) {
                display: block !important;
                margin-top: 15px;
            }

        }
    </style>
    <style>
        .rs-branches .w-full:last-of-type .branches-item::after {
            display: none;
        }

        @media (max-width: 1024px) {
            .rs-branches .w-full:last-of-type .branches-item::after {
                display: block;
            }

            .rs-branches .w-full:first-of-type .branches-item::after {
                display: none;
            }
        }

        body {
            font-family: 'Cairo', sans-serif !important;
            ;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo $css; ?>main.css?id=5aa7c9c08803ff191e0c">
    <style>
        img {
            display: unset !important;
        }
    </style>


    <!-- bootstrap v4 css -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>bootstrap.min.css'>
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>all.min.css'>
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>animate.css'>
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>owl.carousel.css'>
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>slick.css'>
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>magnific-popup.css'>
    <!-- Offcanvas CSS -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>off-canvas.css'>
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>flaticon.css'>
    <!-- flaticon2 css  -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>flaticon2.css'>
    <!-- rsmenu CSS -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>rsmenu-main.css'>
    <!-- rsmenu transitions CSS -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>rsmenu-transitions.css'>
    <!-- timeline css -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>timeline.css'>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>style.css'>
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>responsive.css'>
    <link rel="stylesheet" type="text/css" href='<?php echo $css; ?>index.css'>

    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <style>
        .v-center {
            width: 50%;
            height: 50%;
            overflow: auto;
            margin: auto;
        }


        .modal-backdrop {
            background-color: rgb(0, 0, 0, 0.2);
        }

        .bottom-menu {
            background-color: #013a63;
        }

        .menu-sticky.sticky .rs-search {
            background-color: #DB592A !important;
        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KQMSQNH5QG"></script>
    <!-- <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-KQMSQNH5QG');
    </script> -->
</head>

<body class="home1">
    <div id="app">
        <!--Full width header Start-->
        <div class="full-width-header">

            <!-- Toolbar Start -->
            <div class="rs-toolbar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="rs-toolbar-left">
                                <div class="welcome-message">
                                    <i class="fas fa-bank"></i><span>أهلا بك في جامعة الفلوجة</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rs-toolbar-right align_left">
                                <div class="toolbar-share-icon">
                                    <ul>
                                        <li>
                                            <a target='_blank' href="https://www.facebook.com/media.alfallujah.page">
                                                <i class="fab fa-facebook"></i></a>
                                        </li>
                                        <li class="mr-2">
                                            <a target="_blank" href="https://uofallujah.edu.iq/www.twitter.com/media_alfallujah_page"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li><a target="_blank" href="https://www.youtube.com/channel/UCriR1lpp0XKfVAgulhMkmCA"><i class="fab fa-youtube"></i></a></li>



                                        <li><a target="_blank" href="https://www.linkedin.com/company/university-of-fallujah"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a target="_blank" href="https://t.me/media_alfallujah_page"><i class="fab fa-telegram"></i></a></li>
                                        <li><a id="language-url" title="ar" href="">English</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <a href="#" class="apply-btn">Apply Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Toolbar End -->

            <!--Header Start-->
            <header id="rs-header" class="rs-header">

                <!-- Header Top Start -->
                <div class="rs-header-top">
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col-md-4 col-sm-12">
                                <div class="logo-area text-center">
                                    <a href="#"><img style="height: 100px;" src='images/Fallujah-Logo.png' alt="logo"></a>
                                </div>
                            </div> -->
                            <div class="col-md-7 col-sm-12 custom_vertically_centered">
                                <div class="logo-area text-center">
                                    <a href="#"><img style="height: 100px;float: right;" src='images/Fallujah-Logo.png' alt="logo"></a>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 custom_vertically_centered">
                                <div class="header-contact  pull-left ">
                                    <div id="phone-details" class="widget-text">
                                        <div class="info-text">
                                            <span>جامعة الفلوجة</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Top End -->



                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="main-menu">
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="rs-menu-toggle"><i class="fab fa-bars"></i>القائمة</a>
                                    <nav class="rs-menu rs-menu-close">
                                        <ul class="nav-menu">

                                            <li> <a target="_self" href="">
                                                    الرئيسيـة</a>
                                            </li>


                                            <li class="menu-item-has-children">
                                                <a href="#">رئاسة الجامعة</a>
                                                <ul class="sub-menu">
                                                    <li> <a target="_self" href="navpage.php">
                                                            نبذة عن الجامعة </a>
                                                    </li>
                                                    <li> <a target="_self" href="navpage.php">
                                                            رؤية الجامعة</a>
                                                    </li>
                                                    <li> <a target="_self" href="navpage.php">
                                                            رسالة الجامعة</a>
                                                    </li>
                                                    <li> <a target="_blank" href="navpage.php">
                                                            اهداف الجامعة</a>
                                                    </li>
                                                    <li> <a target="_blank" href="navpage.php">
                                                            بعض شخصيات الجامعة ورموزها</a>
                                                    </li>
                                                    <li> <a target="_self" href="navpage.php">
                                                            كلمة مجلس الادارة</a>
                                                    </li>
                                                    <li> <a target="_self" href="navpage.php">
                                                            رئيس الجامعة</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="#">هيئة رئاسة الجامعة</a>
                                                <ul class="sub-menu">
                                                    <li> <a target="_self" href="navpage.php">
                                                            قسم الرقابة والتدقيق الداخلي</a>
                                                    </li>
                                                    <li> <a target="_self" href="navpage.php">
                                                            قسم الاعلام والعلاقات العامة </a>
                                                    </li>
                                                    <li> <a target="_self" href="navpage.php">
                                                            قسم ضمان الجودة والاعتماد الاكاديمي</a>
                                                    </li>
                                                    <li>
                                                        <a target="_self" href="navpage.php">
                                                            قسم شؤون الاقسام الداخلية
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_self" href="navpage.php">
                                                            قسم المتابعة
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_self" href="navpage.php">
                                                            قسم الدراسات والتخطيط
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_self" href="navpage.php">
                                                            قسم البعثات والعلاقات الثقافية

                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">تشكيلات الجامعة</a>
                                                <ul class="sub-menu">
                                                    <!-- sub menu -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            كلية او قسم الجامعة 1
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="navpage.php">عن القسم</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">كلمة رئيس القسم</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">الرسالة والاهداف</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">اعضاء الهيئة التدريسية</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">المواد الدراسية</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">الجدول الاسبوعي للمحاضرات</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- end sub menu -->
                                                    <!-- sub menu -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            كلية او قسم الجامعة 2
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="navpage.php">عن القسم</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">كلمة رئيس القسم</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">الرسالة والاهداف</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">اعضاء الهيئة التدريسية</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">المواد الدراسية</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">الجدول الاسبوعي للمحاضرات</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- end sub menu -->
                                                    <!-- sub menu -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            كلية او قسم الجامعة3
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="navpage.php">عن القسم</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">كلمة رئيس القسم</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">الرسالة والاهداف</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">اعضاء الهيئة التدريسية</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">المواد الدراسية</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">الجدول الاسبوعي للمحاضرات</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- end sub menu -->
                                                    <!-- sub menu -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            كلية او قسم الجامعة 4
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="navpage.php">عن القسم</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">كلمة رئيس القسم</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">الرسالة والاهداف</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">اعضاء الهيئة التدريسية</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">المواد الدراسية</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">الجدول الاسبوعي للمحاضرات</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- end sub menu -->
                                                </ul>
                                            </li>
                                            <li> <a target="_self" href="teachers_staf.php">
                                                    التعليم الالكتروني </a>
                                            </li>


                                            <li class="menu-item-has-children">
                                                <a href="#">البوابة البحثية</a>
                                                <ul class="sub-menu">
                                                    <!-- sub menu -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            مجلة 1 </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="navpage.php">هيئة المجلة</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">دليل المؤلف</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">شروط وقواعد النشر</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">العدد الحالي</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">عن المجلة</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">اتصل بنا</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- end sub menu -->
                                                    <!-- sub menu -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            مجلة2 </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="navpage.php">هيئة المجلة</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">دليل المؤلف</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">شروط وقواعد النشر</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">العدد الحالي</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">عن المجلة</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">اتصل بنا</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- end sub menu -->
                                                    <!-- sub menu -->
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            مجلة 3 </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="navpage.php">هيئة المجلة</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">دليل المؤلف</a></li>

                                                            <li><a class="dropdown-item" href="navpage.php">شروط وقواعد النشر</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">العدد الحالي</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">عن المجلة</a></li>
                                                            <li><a class="dropdown-item" href="navpage.php">اتصل بنا</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- end sub menu -->

                                                </ul>
                                            </li>
                                            <!-- <li class="rs-mega-menu mega-rs">
                                                <a href="#">عن الجامعة</a>
                                                <ul class="mega-menu">
                                                    <li class="mega-menu-container">
                                                        <div class="mega-menu-innner">
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a target="_self" href="">
                                                                            تاريخ الجامعة</a>
                                                                    </li>
                                                                    <li> <a target="_self" href="">
                                                                            الرؤية والرسالة</a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a target="_self" href="">
                                                                            رئاسة الجامعة</a>
                                                                    </li>
                                                                    <li> <a target="_self" href="">
                                                                            مجلس الجامعة</a>
                                                                    </li>
                                                                    <li> <a target="_self" href="">
                                                                            امانة الجامعة</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a target="_self" href="">
                                                                            الخطة الاستراتيجية</a>
                                                                    </li>
                                                                    <li> <a target="_self" href="">
                                                                            الاتفاقيات الدولية</a>
                                                                    </li>
                                                                    <li> <a target="_self" href="">
                                                                            المجلس البحثي للجامعة</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="single-magemenu">
                                                                <ul class="sub-menu">
                                                                    <li> <a target="_self" href="http://www.asu.edu.eg/ar/317/page">
                                                                            المكرمون والجوائز العلمية</a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </li>
                                                </ul>
                                            </li> -->


                                            <!-- <li class="menu-item-has-children">
                                                <a href="#">تواصل معنا</a>
                                                <ul class="sub-menu">
                                                    <li> <a target="_self" href="">التواصل مع قيادات الجامعة</a></li>
                                                    <li> <a target="_self" href="">الأسئلة الشائعة</a></li>
                                                    <li> <a target="_self" href="">وظائف شاغرة</a></li>
                                                    <li> <a target="_self" href="">دليل المستخدم</a> </li>
                                                </ul>
                                            </li> -->

                                            <!-- <li class="lg:!hidden">
                                                <a href="" class="text-white">
                                                    الطلاب </a>
                                            </li>
                                            <li class="lg:!hidden">
                                                <a href="" class="text-white">
                                                    هيئة التدريس </a>
                                            </li>
                                            <li class="lg:!hidden">
                                                <a href="" class="text-white">
                                                    الدراسات العليا </a>
                                            </li>
                                            <li class="lg:!hidden">
                                                <a href="" class="text-white">
                                                    الخريجييــن </a>
                                            </li> -->

                                        </ul>
                                    </nav>
                                    <div class="right-bar-icon rs-offcanvas-link text-right">
                                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fas fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-menu w-full py-2 tw-hidden lg:block">
                        <div class="container flex justify-between en:flex-row ar:flex-row-reverse">
                            <ul class="flex en:flex-row ar:flex-row-reverse en:ml-14 ar:mr-20">
                                <li class="en:px-2 ar:px-2 capitalize">
                                    <a href="teachers_staf.php" class="text-white">
                                        الطلاب <i class="fas fa-book-reader  rounded-md p-1 ml-2"></i></a>
                                </li>
                                <li class="en:px-2 ar:px-2 capitalize">
                                    <a href="teachers_staf.php" class="text-white">
                                        هيئة التدريس <i class="fas fa-users  rounded-md p-1 ml-2"></i>
                                    </a>
                                </li>
                                <li class="en:px-2 ar:px-2 capitalize">
                                    <a href="teachers_staf.php" class="text-white">
                                        الدراسات العليا <i class="fas fa-user-graduate  rounded-md p-1 ml-2"></i></a>
                                </li>
                                <li class="en:px-2 ar:px-2 capitalize">
                                    <a href="#keep_in_touch" class="text-white">

                                        تواصل معنا <i class="fas fa-phone-volume rounded-md p-1 ml-2"></i></a>
                                </li>

                            </ul>
                            <ul>
                                <li class="en:px-2 ar:px-2 capitalize sub_lang hidden">
                                    <a class="text-white capitalize" title="ar" href="">English</a>
                                    <i class="fas fa-globe-africa text-white rounded-md p-1 ar:ml-1"></i>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Menu End -->

            </header>
            <!--Header End-->

        </div>

        <!--Full width header End-->
        <!--Full width header End-->