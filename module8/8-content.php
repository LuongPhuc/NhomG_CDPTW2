<?php
// include '../config.php';
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1215">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-5 col-xs-5 col-lg-5">
                <h3 class="kth3">Our Newsletter</h3>
                <hr>
            </div>
            <div class="col-sm-8 col-md-7 col-xs-7 col-lg-7">

                <input type="email" name="EMAIL" placeholder="Your email address" required="" class="cssemail">
                <input type="submit" value="Subscribe" class="csssub">

            </div>
        </div>
    </div>
    <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 50px"></div>
    <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 50px"></div>
    <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 49px"></div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide ">
                <img src="./images/module8_h1.PNG" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/module8_h2.PNG" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/module8_h3.PNG" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/module8_h4.PNG" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/module8_h5.PNG" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/module8_h6.PNG" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/module8_h7.PNG" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/module8_h8.PNG" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/module8_h9.PNG" alt="">
            </div>
            <div class="swiper-slide">
                <img src="./images/module8_h10.PNG" alt="">
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
 
</div>