<?php
include 'camera.php';
?>
<html>
   <head>
      <meta name="viewport" content="width=550, initial-scale=1">
      <title>Prydaz, Xavaric's Magnum Opus</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="main.css">
      <script
        src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous">
      </script>
      <link rel="stylesheet" href="css/style_minified.css" />
      <link rel="stylesheet" href="<?php echo getStyle(); ?>" />
      <script src="js/style_minified.js"></script>
      <script src="js/script.js"></script>
      <script src="js/pipan.js"></script>
   </head>
   <body onload="setTimeout('init(<?php echo "$mjpegmode, $video_fps, $divider" ?>);', 100);">
      <div class="container-fluid text-center liveimage">
         <div><img id="mjpeg_dest" <?php echo getLoadClass() . getImgWidth();?>
     <?php if(file_exists("pipan_on")) echo "ontouchstart=\"pipan_start()\""; ?> onclick="toggle_fullscreen(this);" src="./loading.jpg"></div>
        
      </div>
      <div class="controls">
        <div class="pccontrols">
          <img src="arrows.png">
          <div class="text">
            <p>To Control the robot you can use your arrow keys</p>
          </div>
        </div>
        <div class="phonecontrols">
          <img src="phoneInstructions.jpg" width="350">
          <div class="text">
            <p>And if you are using a phone, you can control the robot by tilting it</p>
          </div>
        </div>
      </div>
<script src="javascript.js"></script>
   </body>
</html>