<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module2">
    <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><?php echo "module1-1.php"?></div>
      <div class="swiper-slide"><?php echo "module1-2.php"?></div>
      <div class="swiper-slide"><?php echo "module1-3.php"?></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  

  
   <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</div>