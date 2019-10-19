<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-4">
             <div class="style-4 ">
                 <h3 class="title ">
                     Best Selling
                    </h3>
                    <hr class="hr3">

                </div>
               
                <div class="swiper-container">
               
   <!-- Swiper -->
  <div class="container">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img width="270px" height="270px" src="./images/1.jpg" alt=""><h4 class="title-picture"><a href="#">Plant bots</a></h4>
      <span class="price">£ 5$</span>
      </div>
      <div class="swiper-slide"><img width="270px" height="270px" src="./images/3.jpg" alt=""><h4 class="title-picture"><a href="#">Light room</a></h4>
      <span class="price">£ 20$</span></div>
      <div class="swiper-slide"><img width="270px" height="270px" src="./images/1.jpg" alt=""><h4 class="title-picture"><a href="#">Plant bots</a></h4>
      <span class="price">£ 5$</span></div>
      <div class="swiper-slide"><img width="270px" height="270px" src="./images/3.jpg" alt=""><h4 class="title-picture"><a href="#">Light room</a></h4>
      <span class="price">£ 20$</span></div>
      <div class="swiper-slide"><img width="270px" height="270px" src="./images/4.jpg" alt=""><h4 class="title-picture"><a href="#">Tea pot</a></h4>
      <span class="price">£ 90$</span></div>
      <div class="swiper-slide"><img width="270px" height="270px" src="./images/5.jpg" alt=""><h4 class="title-picture"><a href="#">Teapot</a></h4>
      <span class="price">£ 40$</span></div>
      <div class="swiper-slide"><img width="270px" height="270px" src="./images/hinh1.jpg" alt=""><h4 class="title-picture"><a href="#">Wooden</a></h4>
      <span class="price">£ 40$</span></div>
    
 
    </div>
    
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Add Pagination -->
    
  </div>
  </div>
   

  <!-- Swiper JS -->
  <script src="../package/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
  var mySwiper = new Swiper('.swiper-container', {
  autoplay: {
    delay: 4000,
  },
});

    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    
  </script>

   
        </div>