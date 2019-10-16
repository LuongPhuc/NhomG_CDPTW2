<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module2">
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="container">
            <div class="row">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="col-md-6">
                                <a class="imghover" href="#">
                                    <img src="/module2/images/module2-1.png" alt="module2">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <div class="content">
                                    FEATURED PRODUCT
                                </div>
                                <div class="row">
                                    <h3>
                                    <a class="linktitle" href="#">Nancy Chair</a>         
                                    </h3>
                                    <hr class="hr-h3">
                                </div>
                                <div class="row">
                                    <p class="content2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                </div>
                                <div class="row">
                                    <a class="price" href="#">
                                        only $90 →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>