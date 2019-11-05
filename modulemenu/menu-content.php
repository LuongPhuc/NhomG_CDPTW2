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
                            <form action="#" method="post">
                                 <input type="text" name="s" class="search-field" value="" placeholder="Search anything..." autocomplete="off">
                                 <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                            </div>
                            <div class="col-md-4">
                                <h1>Helendo</h1>
                            </div>
                            <div class="col-md-4 icons1">
                                <div class="row">
                                    <div class="col-md-3">
                                        <button type="button" class="btn  btn-lg dropbtn" data-toggle="modal" data-target="#myModal"><i class="fa fa-user background1"></i></button>
                                        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          
          <div class="tab">
                  <button class="tablinks" onclick="openClick(event, 'Login')">Login</button>
                  <button class="tablinks" onclick="openClick(event, 'Register')">Register</button>
          </div>
        </div>
        <div class="modal-body">
          <h3>Login or Register</h3>
            <div id="Login" class="tabcontent">
    <form action="#" method="post">
        <div class="modal-body">
          <h3>Login your account</h3>
          <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Username" name="username" id="username" autocomplete="username" value=""><br>
          <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" placeholder="Password" name="password" id="password" autocomplete="current-password"><br>
          <input type="checkbox" id="cbox2">
          <label class="dayofweek" for="cbox2">Remember Me</label><br>
          <button type="submit" class="btn btn-default btn-login" data-dismiss="modal">Login</button>
        </div>
    </form>
</div>
        

        <div id="Register" class="tabcontent">
    <form action="#" method="post">
  <div class="modal-body">
          <h3>Register</h3>
          <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Username" name="username1" id="username1" autocomplete="username1" value=""><br>
          <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" placeholder="Email" name="Email" id="Email" autocomplete="Email" value=""><br>
          <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" placeholder="Password" name="password1" id="password1" autocomplete="current-password"><br>
          <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" placeholder="password confirm" name="password-confirm" id="password-confirm" autocomplete="current-password"><br>
          <button type="submit" class="btn btn-default btn-login" data-dismiss="modal">Login</button>
        </div>
        </form>
    </div>
             </div>
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
                                        
                                        <div class="w3-container">
  
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button "><i class="fa fa-bars"></i></button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        
        <div class="tab">
            <button class="tablinks" onclick="openClick(event, 'Languages')">Languages ▾</button>
            <button class="tablinks" onclick="openClick(event, 'Currencies')">Currencies ▾</button>
            <button class="tablinks" onclick="openClick(event, 'Menu')">Menu ▾</button>
            <button class="tablinks" onclick="openClick(event, 'Shop')">Shop ▾</button>
            <button class="tablinks" onclick="openClick(event, 'Pages')">Pages ▾</button>
            <button class="tablinks" onclick="openClick(event, 'Blogs')">Blogs ▾</button>
            <button class="tablinks" onclick="openClick(event, 'ContactUs')">Contact Us ▾</button>
            <button class="tablinks" onclick="openClick(event, 'FollowUsOnSocials')">Follow Us On Socials ▾</button>
        </div>
        <div id="Languages" class="tabcontent">
            <a class="icons4" href="#">English</a><br>
            <a class="icons4" href="#">French</a><br>
            <a class="icons4" href="#">Việt Nam</a><br>
        </div>
        <div id="Currencies" class="tabcontent">
            <a class="icons4" href="#">USD - US Dollar</a><br>
            <a class="icons4" href="#">Euro</a><br>
            <a class="icons4" href="#">VND</a><br>
        </div>
        <div id="Menu" class="tabcontent">
            <a class="icons4" href="#">Home V1 - Default</a><br>
            <a class="icons4" href="#">Home V2 - Boxed</a><br>
            <a class="icons4" href="#">Home V3 - Carousel</a><br>
            <a class="icons4" href="#">Home V4 - Categories</a><br>
            <a class="icons4" href="#">Home V5 - Collection</a><br>
            <a class="icons4" href="#">Home V6 - Full Width</a><br>
            <a class="icons4" href="#">Home V7 - Left Sidebar</a><br>
            <a class="icons4" href="#">Home V8 - Metro</a><br>
            <a class="icons4" href="#">Home V9 - Minimal</a><br>
            <a class="icons4" href="#">Home V10 - Parallax</a><br>
            <a class="icons4" href="#">Home V11 - Video Feature</a><br>
            <a class="icons4" href="#">Home V12 - Instagram</a><br>
        </div>
        <div id="Shop" class="tabcontent">
            <a class="icons4" href="#">Shop Pages</a><br>
            <a class="icons4" href="#">Product Pages</a><br>
            <a class="icons4" href="#">Other Pages</a><br>
        </div>
        <div id="Pages" class="tabcontent">
            <a class="icons4" href="#">About Us</a><br>
            <a class="icons4" href="#">Contact</a><br>
            <a class="icons4" href="#">Coming Soon</a><br>
            <a class="icons4" href="#">404 Pages</a><br>
        </div>
        <div id="Blogs" class="tabcontent">
            <a class="icons4" href="# ">Blog Grid</a><br>
            <a class="icons4" href="#">Blog List</a><br>
            <a class="icons4" href="#">Blog Masonry</a><br>
            <a class="icons4" href="#">Blog Sidebar</a><br>
            <a class="icons4" href="#">Single Post V1</a><br>
            <a class="icons4" href="#">Single Post V2</a><br>
        </div>
        <div id="ContactUs" class="tabcontent">
            <p class="icons4" >1234567890</p><br>
        </div>
        <div id="FollowUsOnSocials" class="tabcontent">
        <div class="row">
            <a href="#"><i class="fa fa-facebook icons3">   -   Facebook</i></a>
                   
            <a href="#"><i class="fa fa-twitter icons3">   -   Twitter</i></a>
          
          
            <a href="#"><i class="fa fa-google-plus icons3">   -   Google Plus</i></a>
          
          
            <a href="#"><i class="fa fa-linkedin icons3">   -   Linkedin</i></a>
          
          
            <a href="#"><i class="fa fa-pinterest-p icons3">   -   Printerest</i></a>
          
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
                </div>
                
            </div>
            <div id="test"></div>
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


<script>
function openClick(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
