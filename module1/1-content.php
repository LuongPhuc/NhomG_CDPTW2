<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module1">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="module1-1">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="col-md-6">
                        <div class="content">
                          <h3>
                            CHAIR COLLECTION 2018
                          </h3>
                        </div>
                        <div class="row">
                          <h1>
                            <a class="linktitle" href="#">Welcome To Helendo Store</a>         
                          </h1>
                          <hr class="hr-h3">
                        </div>
                        <div class="row">
                          <p class="content2">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                        </div>
                        <div class="row">
                          <a class="price" href="#">
                            Shop now →
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6">
                          <img src="/module1/images/module1-1.png" alt="module1-1">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="module1-2">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="col-md-6">
                        <div class="content">
                          <h3>
                            CHAIR COLLECTION 2018
                          </h3>
                        </div>
                        <div class="row">
                          <h1>
                            <a class="linktitle" href="#">Hagley Wooden Chair</a>         
                          </h1>
                            <hr class="hr-h3">
                        </div>
                        <div class="row">
                          <p class="content2">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                        </div>
                        <div class="row">
                          <a class="price" href="#">
                            Shop now →
                          </a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <img src="/module1/images/module1-2.png" alt="module1-2">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-slide">
        <div class="module3">
          <div class="vc_row wpb_row vc_row-fluid">
            <div class="container">
              <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="col-md-6">
                        <div class="content">
                          <h3>
                            CHAIR COLLECTION 2018
                          </h3>
                          </div>
                          <div class="row">
                            <h1>
                                <a class="linktitle" href="#">Kitchen Decorations</a>         
                            </h1>
                            <hr class="hr-h3">
                          </div>
                          <div class="row">
                            <p class="content2">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                          </div>
                          <div class="row">
                            <a class="price" href="#">
                              Shop now →
                            </a>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <img src="/module1/images/module1-3.png" alt="module1-3">   
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  

  
   <script>
   var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
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