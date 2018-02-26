<html>
  <head>
    <title>Facebook Jump</title>
  </head>
  
  
  <body>
    <?php
      $iphone        = strstr($_SERVER['HTTP_USER_AGENT'], "iPhone");
      $ipad          = strstr($_SERVER['HTTP_USER_AGENT'], "iPad");
      $android       = strstr($_SERVER['HTTP_USER_AGENT'], "Android");
      $windows_phone = strstr($_SERVER['HTTP_USER_AGENT'], "Windows Phone");
      $black_berry   = strstr($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
 
      if ($iphone) {
        header('Location: fb://page/?id=286917308083328');
		    exit;
		    
      } elseif ($ipad) {
        header('Location: fb://page/?id=286917308083328');
		    exit;
		    
      } elseif ($android) {
        header('Location: fb://page/286917308083328');
		    exit;
		    
      } elseif ($windows_phone) {
        header('Location: https://www.facebook.com/ZhongXingJiaoHui/');
		    exit;
		    
      } elseif ($black_berry) {
        header('Location: https://www.facebook.com/ZhongXingJiaoHui/');
		    exit;
		    
      } else {
        header('Location: https://www.facebook.com/ZhongXingJiaoHui/');
		    exit;
		    
      }
      ?>
  </body>
</html>