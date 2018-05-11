
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
     <!-- <link rel="stylesheet" href="css/style_minified.css" />-->
      <link rel="stylesheet" href="<?php echo getStyle(); ?>" />
      <script src="js/style_minified.js"></script>
      <script src="js/script.js"></script>
      <script src="js/pipan.js"></script>
   </head>
<body onload="setTimeout('init(<?php echo "$mjpegmode, $video_fps, $divider" ?>);', 100);">
<body>
  <div class="container">
    <div class="mynd">
      <div class="container-fluid text-center liveimage">
        <div><img id="mjpeg_dest" <?php echo getLoadClass() . getImgWidth();?><?php if(file_exists("pipan_on")) echo "ontouchstart=\"pipan_start()\""; ?> onclick="toggle_fullscreen(this);" src="./loading.jpg"></div>
       <!--<div><img src="https://i.ytimg.com/vi/WIYevCIEaw0/hqdefault.jpg" alt="Flowers in Chania"> </div>-->
      </div>
    </div>
    <div class = "pcControls">
      <div class="pcText">
        <h3>How to Control the robot</h3>
        <p>You can use the arrow buttons on your keyboards to control the direction of the robot</p>
      </div>
      <div class="keybinds">
        <div>
          <img id="up"  class="up arrow" src="arrow.svg">
        </div>
        <img id="left"  class="left arrow" src="arrow.svg">
        <img id="down"  class="down arrow" src="arrow.svg">
        <img id="right" class="right arrow" src="arrow.svg">
      </div>
    </div>
  </div>
<script src="script.js"></script>
<script src="javascript.js"></script>
</body>
</html>
