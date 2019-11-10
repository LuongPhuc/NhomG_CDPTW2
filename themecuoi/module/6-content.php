
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>  

<body>
<div class="type-7 ">
            <div class="container">
                <div class="row">  
                    

                    <h3 class="titlex">Deco Collection   <span style="color:red;">50%OFF<hr class="hr"></span></h3>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced for those.<br/>
                        Sections 1.10.32 and 1.10.33 from “de Finibus Bonorum et Malorum</p>
                        <p id="demo">lore</p>
                        <p><span style="font: 20px Roboto, sans-serif;color:black;">DAY</span><span style="margin-left:80px;color;font: 20px Roboto, sans-serif;color:black;">H</span><span style="margin-left:80px;font: 20px Roboto, sans-serif;color:black;">MIN</span><span style="margin-left:80px;font: 20px Roboto, sans-serif;color:black;">SEC</span></p>
                        
                        <button>Shop now-></button>
                
                    
                
                </div>
            </div>

<script>
    //thiet ap thoi gian dicha ma tase dem
// Thiết lập thời gian đích mà ta sẽ đếm

var countDownDate = new Date("Nov 25, 2019 15:37:25").getTime();

// cập nhập thời gian sau mỗi 1 giây
var x = setInterval(function() {

  // Lấy thời gian hiện tại
  var now = new Date().getTime();

  // Lấy số thời gian chênh lệch
  var distance = countDownDate - now;

  // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // HIển thị chuỗi thời gian trong thẻ p
  document.getElementById("demo").innerHTML = days + " : " + hours + " :  "
  + minutes + " : " + seconds ;

  // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Thời gian đếm ngược đã kết thúc";
  }
}, 1000);
</script>
</div>

</body>
