<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module7">
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="helendo-empty-space " style="">
                                <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 50px"></div>
                                <div class="helendo_empty_space_md hidden-lg hidden-sm hidden-xs" style="height: 30px"></div>
                                <div class="helendo_empty_space_sm hidden-lg hidden-md hidden-xs" style="height: 10px"></div>
                                <div class="helendo_empty_space_xs hidden-lg hidden-md hidden-sm" style="height: 0px"></div>
                            </div>
                            <div class="helendo-section-title text-center style-4 ">
                                <h3 class="title">Our Blog</h3>
                                <hr class="hr-h3">
                            </div>
                            <div class="helendo-empty-space " style="">
                                <div class="helendo_empty_space_lg hidden-md hidden-sm hidden-xs" style="height: 49px"></div>
                            </div>
                            <div class="helendo-latest-post blog-grid blog-grid-style-1 ">
                                <div class="row">
                                    <div class="col-md-4 col-xs-4>">
                                        
                                        <div class="entry-thumbnail">
                                            
                                            <img  src="public/image/module7-sp1.jpg" alt="sp1">
                                            
                                            <a href="#" class="btn-blog"> Read more </a>
                                        </div>
                                        <h2 class="entry-title"><a href="#">Interior design is the art, the interior  designer is the artist.</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <div class="list-meta">
                                                <div class="meta date">
                                                    <time class="entry-date published updated" datetime="2018-10-18T09:20:56+00:00 ">
                                                    October 18, 2018 
                                                    </time>
                                                </div>
                                                <div class="meta author">
                                                    <span>by </span>
                                                    <a class="url fn n" href="#">grixbase</a>
                                                </div>
                                                <div class="meta cat">
                                                    <span >in </span>
                                                    <a href="#" class="cat-links">Chair</a>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                    <div class="col-md-4 col-xs-4>">
                                        
                                        <div class="entry-thumbnail">
                                            
                                            <img  src="public/image/module7-sp2.jpg" alt="sp2">
                                            
                                            <a href="#" class="btn-blog"> Read more </a>
                                        </div>
                                        <h2 class="entry-title">
                                        <a href="#">Decorate your home with the most modern furnishings.</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <div class="list-meta">
                                                <div class="meta date">
                                                    <time class="entry-date published updated" datetime="2018-10-18T09:20:43+00:00">October 18, 2018</time>
                                                </div>
                                                <div class="meta author">
                                                    <span>by </span>
                                                    <a class="url fn n" href="#">grixbase</a>
                                                </div>
                                                <div class="meta cat">
                                                    <span>in </span>
                                                    <a href="#" class="cat-links">Chair</a>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="col-md-4 col-xs-4>">
                                        
                                        <div class="entry-thumbnail">
                                            
                                            <img src="public/image/module7-sp3.jpg" alt="sp3">
                                            
                                            <a href="#" class="btn-blog"> Read more </a>
                                        </div>
                                        <h2 class="entry-title">
                                        
                                        <a href="#">Spatialize with the decorations of the Helendo store.</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <div class="list-meta">
                                                <div class="meta date">
                                                    <time class="entry-date published updated" datetime="2018-10-18T09:18:50+00:00">October 18, 2018</time>
                                                </div>
                                                <div class="meta author">
                                                    <span>by </span>
                                                    <a class="url fn n" href="#">grixbase</a>
                                                </div>
                                                <div class="meta cat">
                                                    <span>in </span>
                                                    <a href="#" class="cat-links">Chair</a>
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
</div>