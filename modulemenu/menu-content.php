<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="modulemenu">
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="col-md-4">
                                 <input type="text" name="s" class="search-field" value="" placeholder="Search anything..." autocomplete="off">
                                 <a href="#"><i class="fa fa-search"></i></a>

                            </div>
                            <div class="col-md-4">
                                <h1>Helendo</h1>
                            </div>
                            <div class="col-md-4 icons1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i></button>
                                        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          
          <div class="row">
              <div class="col-md-6"><button type="button" class="btn btn-default">Login</button></div>
              <div class="col-md-6"><button type="button" class="btn btn-default">Register</button></div>
          </div>
        </div>
        <div class="modal-body">
          <h3>Login your account</h3>
          <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Username" name="username" id="username" autocomplete="username" value=""><br>
          <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" placeholder="Password" name="password" id="password" autocomplete="current-password"><br>
          <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever">Remember me
        </div>
          <button type="button" class="btn btn-default btn-login" data-dismiss="modal">Login</button>
        
      </div>
      
          </div>
  </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button  class="dropbtn"><i class="fa fa-heart-o"></i></button>
                                    </div>
                                    <div class="col-md-3">
                                        <button  class="dropbtn"><i class="fa fa-shopping-bag"></i></button>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars"></i></button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <ul class="menu">
                                                <li><a href="#">Language ▾</a>
                                                <ul class="sub">             
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">Việt Nam</a></li>
                                                </ul>
                                                </li>
                                            </ul>

                                            <ul class="menu">
                                                <li><a href="#">Currencies ▾</a>
                                                <ul class="sub">             
                                                <li><a href="#">USD - US Dollar</a></li>
                                                <li><a href="#">Euro</a></li>
                                                <li><a href="#">VNĐ</a></li>
                                                </ul>
                                                </li>
                                            </ul>
                                            
                                            <ul class="menu">
                                                <li><a href="#">HOME ▾</a>
                                                <ul class="sub">             
                                                <li><a href="#">Home V1 - Default</a></li>
                                                <li><a href="#">Home V2 - Boxed</a></li>
                                                <li><a href="#">Home V3 - Carousel</a></li>
                                                <li><a href="#">Home V4 - Categories</a></li>
                                                <li><a href="#">Home V5 - Collection</a></li>
                                                <li><a href="#">Home V6 - Full Width</a></li>
                                                <li><a href="#">Home V7 - Left Sidebar</a></li>
                                                <li><a href="#">Home V8 - Metro</a></li>
                                                <li><a href="#">Home V9 - Minimal</a></li>
                                                <li><a href="#">Home V10 - Parallax</a></li>
                                                <li><a href="#">Home V11 - Video Feature</a></li>
                                                <li><a href="#">Home V12 - Instagram</a></li>
                                                </ul>
                                                </li>
                                            </ul>

                                            <ul class="menu">
                                                <li><a href="#">SHOP ▾</a>
                                                <ul class="sub">             
                                                <li><a href="#">Shop Pages</a></li>
                                                <li><a href="#">Product Pages</a></li>
                                                <li><a href="#">Other Pages</a></li>
                                                </ul>
                                                </li>
                                            </ul>

                                            <ul class="menu">
                                                <li><a href="#">PAGES ▾</a>
                                                <ul class="sub">             
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Contact</a></li>
                                                <li><a href="#">Coming Soon</a></li>
                                                <li><a href="#">404 Pages</a></li>
                                                </ul>
                                                </li>
                                            </ul>

                                            <ul class="menu">
                                                <li><a href="#">BLOG ▾</a>
                                                <ul class="sub">             
                                                <li><a href="#">Blog Grid</a></li>
                                                <li><a href="#">Blog List</a></li>
                                                <li><a href="#">Blog Masonry</a></li>
                                                <li><a href="#">Blog Sidebar</a></li>
                                                <li><a href="#">Single Post V1</a></li>
                                                <li><a href="#">Single Post V2</a></li>
                                                </ul>
                                                </li>
                                            </ul>

                                            <ul class="menu">
                                                <li><a href="#">Contact Us </a>
                                                    <p>53 Võ Văn Ngân, Phường Linh Chiểu, Quận Thủ Đức, Thành Phố Hồ Chí Minh
                                                TeamG@gmail.com
                                                0123456789
                                                </p>
                                                </li>
                                            </ul>

                                            <ul class="menu">
                                                <li><a class="menuicon" href="#">Follow Us On Socials </a>
                                                    <a class="menuicon" href="#"><i class="fa fa-facebook"></i></a>

                                                    <a class="menuicon" href="#"><i class="fa fa-twitter"></i></a>

                                                    <a class="menuicon" class="menuicon" class="menuicon" href="#"><i class="fa fa-google-plus"></i></a>

                                                    <a class="menuicon" class="menuicon" href="#"><i class="fa fa-linkedin"></i></a>
                                                    
                                                    <a class="menuicon" href="#"><i class="fa fa-pinterest-p"></i></a>       
                                                
                                                </li>
                                            </ul>

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
    </div>
</div>








<script>

    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }

                }
        }
    }

</script>
