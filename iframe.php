<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <title>kozel</title>
  <script type="text/javascript">
   setTimeout(function() {
    document.getElementById("base").style.backgroundColor = "#000000";
    setTimeout(function() {
     document.getElementById("base").style.backgroundColor = "#ffffff";
    }, 5000);
   }, 5000);
  </script>
 </head>
 <body id="base" style="background-image: url(vk.png); background-repeat: no-repeat; background-position: top center;
 ">
  <div style="left: 50%; position: absolute">
   <div style="left: -335px; top: 63px; height: 650px; position: absolute">
    <iframe src="index.php<?php echo isset($_GET['p']) ? "?p=" . $_GET['p'] 
            . "&api_result="
            . urlencode("{\"response\":[
             [{\"uid\":151834788,\"first_name\":\"Никита{$_GET['p']}\",\"last_name\":\"Локтионов{$_GET['p']}\",
              \"photo_50\": \"https://vk.com/images/camera_50.png\"}] 
             ]}") : ""; ?>"
            width="800" height="720" frameborder="0" style="background-color: #ffffff">
    </iframe>
   </div>
  </div>
 </body>
</html>