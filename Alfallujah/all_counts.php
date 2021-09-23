<style>
    .rs-search i {
        line-height: 3;
    }

    .body .courses-item {
        text-align: center;
    }

    .body .courses-item img {
        max-height: 146px;
        margin-bottom: 22px;
    }
</style>
<?php
include('init.php');
include($tp . 'header.php');
?>


<!-- Breadcrumbs Start -->

<!--  -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="    background-image: url(images/newsbg.jpg);
    background-blend-mode: darken;
    background-color: rgb(0 0 0 / 62%);
    background-size: cover;
    background-position: center;">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">احصائيات جامعة الفلوجة</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<div class="mt-30 mb-30" style="min-height: 500px;">
    <div class="container">
        <div class="abt-title mb-30" id='page_title_id'>
            <h2 class="capitalize">احصائيات جامعة الفلوجة</h2>
        </div>
        <div id="content" class="flex justify-between flex-col lg:flex-row" style="direction:rtl">
            <div class="side-menu bg-white shadow-custom w-full lg:w-1/4" style="align-self: baseline">
                <ul>
                    <li data-index="96" class="en:pl-4 ar:pr-4 py-2 capitalize cursor-pointer active" @click="showActiveTab">
                        احصائيات عامة
                    </li>
                    <li data-index="93" class="en:pl-4 ar:pr-4 py-2 capitalize cursor-pointer " @click="showActiveTab">
                        احصائيات موضوع 2
                    </li>
                    <li data-index="94" class="en:pl-4 ar:pr-4 py-2 capitalize cursor-pointer " @click="showActiveTab">
                        احصائيات موضوع 3
                    </li>
                    <li data-index="95" class="en:pl-4 ar:pr-4 py-2 capitalize cursor-pointer " @click="showActiveTab">
                        احصائيات موضوع 4
                    </li>
                    <li data-index="99" class="en:pl-4 ar:pr-4 py-2 capitalize cursor-pointer " @click="showActiveTab">
                        احصائيات موضوع 5
                    </li>


                </ul>
            </div>
            <div class="details w-full lg:w-3/4 lg:en:pl-5 lg:ar:pr-5 pb-24">
                <div class="tap animate__animated animate__fadeInLeft active " data-index="96">
                    <div class="body row">

                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_col.png' class="rounded-circle" alt="كلية">
                                <h4 class="courses-title counter-number plus">18</h4>
                                <p style="font-size: 17px;font-weight:bold">كلية</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_emp.png' class="rounded-circle" >
                                <h4 class="courses-title counter-number plus">9938</h4>
                                <p style="font-size: 17px;font-weight:bold">عضو هيئة تدريس</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_stud.png' class="rounded-circle" >
                                <h4 class="courses-title counter-number plus">1</h4>
                                <p style="font-size: 17px;font-weight:bold"> طلبة الدراسة الأولية</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_crag.png' class="rounded-circle" >
                                <h4 class="courses-title counter-number plus">220614</h4>
                                <p style="font-size: 17px;font-weight:bold">الخريجين للدراسة الاولية </p>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_col.png' class="rounded-circle" >
                                <h4 class="courses-title counter-number plus">1890</h4>
                                <p style="font-size: 17px;font-weight:bold">مركز </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_crag.png' class="rounded-circle" >
                                <h4 class="courses-title counter-number plus">5890</h4>
                                <p style="font-size: 17px;font-weight:bold"> الخريجين للدراسات العليا </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_stud.png' class="rounded-circle" >
                                <h4 class="courses-title counter-number plus">20540</h4>
                                <p style="font-size: 17px;font-weight:bold">طالب دراسات عليا</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_search.png' class="rounded-circle">
                                <h4 class="courses-title counter-number plus">1890</h4>
                                <p style="font-size: 17px;font-weight:bold">البحوث المنشورة </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_book.png' class="rounded-circle" >
                                <h4 class="courses-title counter-number plus">4890</h4>
                                <p style="font-size: 17px;font-weight:bold"> الكتب المؤلفة </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_emp.png' class="rounded-circle" >
                                <h4 class="courses-title counter-number plus">4890</h4>
                                <p style="font-size: 17px;font-weight:bold"> موظف </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="courses-item" style='border: none;'>
                                <img src='images/count_office.png' class="rounded-circle" >
                                <h4 class="courses-title counter-number plus">4890</h4>
                                <p style="font-size: 17px;font-weight:bold"> المكاتب الاستشارية </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tap animate__animated animate__fadeInLeft  " data-index="93">
                    <div class="body ">
                        <h2 style="text-align: center;">محتوي احصائيات موضوع 2</h2>
                    </div>
                </div>
                <div class="tap animate__animated animate__fadeInLeft  " data-index="94">
                    <div class="body ">
                        <h2 style="text-align: center;">محتوي احصائيات موضوع 3</h2>

                    </div>
                </div>
                <div class="tap animate__animated animate__fadeInLeft  " data-index="95">
                    <div class="body ">
                        <h2 style="text-align: center;">محتوي احصائيات موضوع 4</h2>

                    </div>
                </div>
                <div class="tap animate__animated animate__fadeInLeft  " data-index="99">
                    <div class="body ">
                        <h2 style="text-align: center;">محتوي احصائيات موضوع 5</h2>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<!-- For internal pages content end -->


<!-- Footer Start -->

<?php
include($tp . 'footer_top.php');

?>
<script src="<?php echo $js; ?>count_main.js"></script>


</body>

</html>