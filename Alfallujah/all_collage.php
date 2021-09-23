<style>
    .img-part {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 2px solid #db592a;
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
    }

    .img-part img {
        border-radius: 50%;
    }

    .cource-item {
        margin: 30px;
        padding: auto;
    }

    .rs-search i {
        line-height: 3;
    }

    .title {
        margin-top: 38px;
        text-align: center;
    }

    .rs-footer .footer-share ul li a i {
        line-height: 3;
    }
</style>
<?php
include('init.php');
include($tp . 'header.php');
?>

<div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="    background-image: url(images/newsbg.jpg);
    background-blend-mode: darken;
    background-color: rgb(0 0 0 / 62%);
    background-size: cover;
    background-position: center;">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">كليات جامعة الفلوجة</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="row">
    <div class="cource-item col-md-3">
        <div class="cource-img">
            <img src='images/law.jpg' style="height: 170px;width: 100%;">
            <a class="image-link" target='_blank' href="colagepage.php">
                <i class="fa fa-link" aria-hidden="true"></i>
            </a>
            <span class="course-value">منذ: 1951</span>
            <span class="img-part"><img src='images/law_col.jpg'></span>
        </div>
        <div class="course-body">
            <h4 class="title">
                <a target='_blank' href="colagepage.php" style="font-weight: 400;">كلية القانون</a>
            </h4>
        </div>
    </div>

    <div class="cource-item col-md-3">
        <div class="cource-img">
            <img src='images/manage.jpg' style="height: 170px;width: 100%;">
            <a class="image-link" target='_blank' href="colagepage.php" title="كلية 2">
                <i class="fab fa-link"></i>
            </a>
            <span class="course-value">منذ: 1951</span>
            <span class="img-part"><img src='images/manage_col.jpg'></span>
        </div>
        <div class="course-body">
            <h4 class="title">
                <a target='_blank' href="colagepage.php" style="font-weight: 400;">كلية الادارة والاقتصاد</a>
            </h4>
        </div>
    </div>

    <div class="cource-item col-md-3">
        <div class="cource-img">
            <img src='images/Medicine_col.jpeg' style="height: 170px;width: 100%;">
            <a class="image-link" target='_blank' href="colagepage.php" title="كلية 3">
                <i class="fab fa-link"></i>
            </a>
            <span class="course-value">منذ: 1951</span>
            <span class="img-part"><img src='images/Medicine_col_logo.jpg'></span>
        </div>
        <div class="course-body">
            <h4 class="title">
                <a target='_blank' href="colagepage.php" style="font-weight: 400;">كلية الطب</a>
            </h4>
        </div>
    </div>
    <div class="cource-item col-md-3">
        <div class="cource-img">
            <img src='images/Medicine.jpg' style="height: 170px;width: 100%;">
            <a class="image-link" target='_blank' href="colagepage.php" title="كلية 4">
                <i class="fab fa-link"></i>
            </a>
            <span class="course-value">منذ: 1951</span>
            <span class="img-part"><img src='images/Medicine_b_col.jpg'></span>
        </div>
        <div class="course-body">
            <h4 class="title">
                <a target='_blank' href="colagepage.php" style="font-weight: 400;">كلية الطب البيطري</a>
            </h4>
        </div>
    </div>


    <div class="cource-item col-md-3">
        <div class="cource-img">
            <img src='images/islam_since.jpg' style="height: 170px;width: 100%;">
            <a class="image-link" target='_blank' href="colagepage.php" title="كلية 5">
                <i class="fas fa-paperclip"></i>
            </a>
            <span class="course-value">منذ: 1951</span>
            <span class="img-part">
                <img src='images/science_islam_col.jpg'>
            </span>
        </div>
        <div class="course-body">
            <h4 class="title">
                <a target='_blank' href="colagepage.php" style="font-weight: 400;">كلية العلوم الاسلامية</a>
            </h4>
        </div>
    </div>
    <div class="cource-item col-md-3">
        <div class="cource-img">
            <img src='images/pract_sience.jpeg' style="height: 170px;width: 100%;">
            <a class="image-link" target='_blank' href="colagepage.php" title="كلية 5">
                <i class="fas fa-paperclip"></i>
            </a>
            <span class="course-value">منذ: 1951</span>
            <span class="img-part"><img src='images/science_pract_col.jpg'></span>
        </div>
        <div class="course-body">
            <h4 class="title">
                <a target='_blank' href="colagepage.php" style="font-weight: 400;">كلية العلوم التطبيقة</a>
            </h4>
        </div>
    </div>
</div>

<nav aria-label="Page navigation example" class="navigation mt-50">
    <ul class="pagination justify-content-center">


        <li class="page-item disabled"><a class="page-link" href="#"><span>&laquo;</span></a></li>






        <li class="page-item active"><a class="page-link active" href="#">1</a></li>
        </li>
        <li class="page-item"><a class="page-link" href=" ">2</a></li>
        <li class="page-item"><a class="page-link" href=" ">3</a></li>
        <li class="page-item"><a class="page-link" href=" ">4</a></li>
        <li class="page-item"><a class="page-link" href=" ">5</a></li>
        <li class="page-item"><a class="page-link" href=" ">6</a></li>
        <li class="page-item"><a class="page-link" href=" ">7</a></li>
        <li class="page-item"><a class="page-link" href=" ">8</a></li>



        <li class="page-item disabled"><span>...</span></li>


        <li class="page-item"><a class="page-link" href=" ">100</a></li>
        <li class="page-item"><a class="page-link" href=" ">101</a></li>
        <li class="page-item"><a class="page-link" href=" " rel="next">&raquo;</a></li>
    </ul>

</nav>

</div>


<?php
include($tp . 'footer_top.php');
include($tp . 'footer.php');
?>
</body>

</html>