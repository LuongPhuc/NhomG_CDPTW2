<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module7">
     <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="footer-address">
                            <h3>Address</h3>
                            <ul>
                                <li><i class="fa fa-map-marker"></i>Helendo, Chicago, USA 2018</li>
                                <li><i class="fa fa-phone"></i>+846677028028</li>
                                <ul class="icon">
                                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                     <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div class="footer-social">
                            <h3>Help & Information</h3>
                            <ul>
                                <li><a href="#">Help & Contact Us</a></li>
                                <li><a href="#">Returns & Refunds</a></li>
                                <li><a href="#">Online Stores</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <div class="footer-social">
                            <h3>About Us</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">What We Do</a></li>
                                <li><a href="#">FAQ Page</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="footer-recent">
                            <h3>Newsletter</h3>

                           <input type="email" name="EMAIL" placeholder="Your email address" >
                           <button>
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                           </button>
                           <ul class="icon">
                                     <li><a href="#">Term & Condition</a></li>
                                     <li><a href="#">Policy</a></li>
                                     <li><a href="#">Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bot">
            <div class="container">
                 <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                         <ul class="icon">
                                     <li><a href="#">Term & Condition</a></li>
                                     <li><a href="#">Policy</a></li>
                                     <li><a href="#">Map</a></li>
                        </ul>
                    </div>
                    
                     <div class="col-md-4 col-sm-4 col-xs-4">
                         <ul class="iconkhac">
                                     <li><a href="#"><h2>Helendo</h2></a></li>
                                     <li><a href="#">© 2019 Helendo. All Rights Reserved</a></li>
                                     
                        </ul>
                    </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                         <ul class="icon">
                                     <li><a href="#">Follow Us On Social</a></li>
                                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                     <li><a href="#"><i class="fa fa-wifi"></i></a></li>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>
</div>