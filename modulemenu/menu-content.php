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
                                        <button  class="dropbtn"><i class="fa fa-user"></i></button>
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

                                            <button class="dropbtn1">Language ▾</button>
                                            <button class="dropbtn1">Currencies ▾</button>
                                            <button class="dropbtn1">HOME ▾</button>
                                            <button class="dropbtn1">SHOP ▾</button>
                                            <button class="dropbtn1">PAGES ▾</button>
                                            <button class="dropbtn1">BLOG ▾</button>
                                            <button class="dropbtn1">Contact Us ▾</button>
                                            <button class="dropbtn1">Follow Us On Socials ▾</button>
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
