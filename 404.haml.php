<?php
$id="error";
$title = "404";
$description = "Page Not Found";
require_once("_partials/header.php");
?>


      %video#vid404
        %source{ preload: "auto", src: "http://wmasmain.s3.amazonaws.com/404.mp4", type: "video/mp4; codecs='avc1.42E01E, mp4a.40.2'"}
      %script{ src: "http://vjs.zencdn.net/4.0/video.js" }
      %script{ src: "<?=$base_url;?>assets/js/bigVideo.js" }
      %section
        %center
          %a{ href: "/" }
            %img#image_404{ style:"display:none",src: "http://wmasmain.s3.amazonaws.com/404.png" }
      %script
        $(document).ready(function(){
        show_404_page();});


<?php require_once("_partials/footer.php"); ?>