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
                                        <a class="icons2" href="#"><i class="fa fa-user"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="icons2" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="icons2" href="#"><i class="fa fa-shopping-bag"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="icons2" href="#"><i class="fa fa-bars"></i></a>
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
