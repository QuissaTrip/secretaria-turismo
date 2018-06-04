        <!-- Javascript files-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
        <script src="/website/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="/website/assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="/website/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="/website/assets/js/front.js"></script>
        <script src="/website/assets/js/jquery.lazyloadxt.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <!---->

        <?php
            if ($is_single == true) { ?>
                <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/css/single.css">
                <link rel="stylesheet" href="<?php echo ASSETS_URL ?>/css/lightbox.css">
                <script                 src="<?php echo ASSETS_URL ?>/js/lightbox.js"></script> <?php
            }
        ?>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
