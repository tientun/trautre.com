<html>
    <head>
        <style type="text/css">
            .fb-comments, .fb-comments span, .fb-comments iframe { width: 100% !important; }
        </style>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-comments" data-href="<?php echo $_GET["url"] ?>" data-width="100%" data-num-posts="100"></div>
    </body>
</html>