<?php $base_url = "/"; ?>
<?php require_once('includes/tools.php');?>
!!! 5
-# Variables for social metadata and analytics
- title = "<?=@$title;?> - We Make Awesome Sh"
- description = "<?=addslashes(@$description);?>"
- share_image = "<?=@$image;?>"
- ga_key = "UA-7654450-5"
- url = "http://wmas.it"

/
  = "   "
  = "   /\\___/\\   "
  = "  ( o   o )   "
  = "  (  =^=  )   "
  = "  (        )   "
  = "  (         )   "
  = "  (          )))))))))))   "
  = "     "
  = "  e   e  e eeee    eeeeeee eeeee eeeee eeee    eeeee e   e e  eeeee   "
  = "  8   8  8 8       8  8  8 8   8 8   8 8         8   8   8 8  8       "
  = "  8e  8  8 8eee    8e 8  8 8eee8 8e  8 8eee      8e  8eee8 8e 8eeee   "
  = "  88  8  8 88      88 8  8 88  8 88  8 88        88  88  8 88    88   "
  = "  88ee8ee8 88ee    88 8  8 88  8 88ee8 88ee      88  88  8 88 8ee88   "
  = "   "

%html.no-js{ lang: "en" }
  %head
    %meta{ charset: "utf-8" }

    %base{ href:"<?=$base_url;?>" }

    -#
      Use the .htaccess and remove these lines to avoid edge case issues.
      More info: h5bp.com/i/378

    %meta{ "http-equiv" => "X-UA-Compatible", content: "IE=edge,chrome=1" }

    %title= title
    %meta{ name: "description", content: description }

    %meta{ name: "apple-mobile-web-app-capable", content: "yes" }
    %meta{ name: "apple-mobile-web-app-status-bar-style", content: "black-translucent" }



    %link{ rel: "apple-touch-icon", href: "AppIcon60x60.png" }
    %link{ rel: "apple-touch-icon", sizes:"76x76", href: "AppIcon76x76.png" }
    %link{ rel: "apple-touch-icon", sizes:"120x120", href: "AppIcon60x60@2x.png" }
    %link{ rel: "apple-touch-icon", sizes:"152x152", href: "AppIcon76x76@2x.png" }

    -# Mobile viewport optimized: h5bp.com/viewport
    %meta{ name: "viewport", content: "width=device-width" }

    -# Google fonts
    %link{ rel: "stylesheet", href: "http://fonts.googleapis.com/css?family=Abel" }

    %link{ rel: "stylesheet", href: "<?=$base_url;?>assets/css/style.css" }



    %script{ src: "<?=$base_url;?>assets/js/libs/modernizr-2.5.3.min.js" }
    %script{ src: "<?=$base_url;?>assets/js/libs/jquery-1.7.1.min.js" }
    %meta{ name: "og:url", content: url }
    %meta{ name: "og:title", content: title }
    %meta{ name: "og:description", content: description }
    %meta{ name: "og:type", content: "website" }
    %meta{ name: "og:image", content: share_image }
    %meta{ name: "og:site_name", content: title }

    %meta{ name: "twitter:card", content: "summary" }
    %meta{ name: "twitter:url", content: url }
    %meta{ name: "twitter:title", content: title }
    %meta{ name: "twitter:description", content: description }
    %meta{ name: "twitter:image", content: share_image }
    %meta{ name: "twitter:site", content: "wemakeawesomesh" }
    %meta{ name: "twitter:creator", content: "wemakeawesomesh" }

    :javascript
      var polyfilter_scriptpath = '<?=$base_url;?>assets/';  
    
    %script{ src: "<?=$base_url;?>assets/css-filters-polyfill.js" }
    %script{ src: "<?=$base_url;?>assets/cssParser.js" }


  %body#<?= $id; ?>

    %header#header
      %nav#main_nav
        %ul
          %li
            %a{ href: "<?=$base_url;?>we", title: ""} We
          %li
            %a{ href: "<?=$base_url;?>make", title: ""} Make
          %li
            %a{ href: "<?=$base_url;?>awesome", title: ""} Awesome
          %li
            %a{ href: "<?=$base_url;?>sh", title: ""} Sh.it

      %nav#categories
        %ul
          %li
            %a.block.toggle-categories{ href: "#"} Show projects by category

      %nav#category_browse
        %ul

          <?php foreach(get_tags() as $tag) { ?>

          %li
            %a.block{ href: "<?=$base_url;?>make/category/<?=urlencode($tag);?>"} <?=$tag;?>

          <?php } ?>

    #content
