<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
      <div class="type-5 ">
            <div class="container">
                <div class="row">
                    <div class="con-xs-12 col-sm-6">
                       
                        <img class="picture"  src="./images/module" alt="">
                      
                    </div>
                    <div class="col-xs-12 col-sm-6  ">   
                        <div class="info-wrapter">
                        <div class="line-spacing" style="height: 80px;">
                        </div>
                        <div class="sub-title">featured product</div>
                        <h3 class="title1" title=""><a href="#">Art Deco Home</a></h3>
                        <hr class="hrcss">
                        <div class="description">
                        <p>Many desktop publishing packages and web page editors now use<br> Lorem Ipsum as their default model text, and a search for</p>
                        </div><a href="#" class="price">Only $30 <i class="icon-arrow-right"></i></a></div>
                    </div>
                    

                </div>
            </div>


</div>
