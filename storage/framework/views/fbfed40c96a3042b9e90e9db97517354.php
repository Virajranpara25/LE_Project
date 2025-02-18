<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="author">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="design_files/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="design_files/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="design_files/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="design_files/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
    <link href="design_files/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
    <link href="design_files/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
    <link href="design_files/css/animations.css" rel="stylesheet">
    <link href="design_files/plugins/slick/slick.css" rel="stylesheet">

    <!-- The Project's core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="design_files/css/style.css" rel="stylesheet">
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="design_files/css/typography-default.css" rel="stylesheet">
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
    <link href="design_files/css/skins/light_blue.css" rel="stylesheet">
    <!-- Bootstrap CSS -->

    <!-- Bootstrap JavaScript Bundle -->

    <!-- Custom css -->
    <link href="design_files/css/custom.css" rel="stylesheet">

    <?php echo $__env->yieldContent('css'); ?>
</head>

<body style="background-image: url(design_files/images/Background.png);">

    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- JavaScript files placed at the end of the document so the pages load faster -->
    <!-- ================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <!-- <script src="<?php echo e(asset('plugins/jquery.min.js')); ?>"></script> -->
    <script src="design_files/plugins/jquery.min.js"></script>
    <script src="design_files/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery Revolution Slider  -->
    <script src="design_files/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js"></script>
    <script src="design_files/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Isotope javascript -->
    <script src="design_files/plugins/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="design_files/plugins/isotope/isotope.pkgd.min.js"></script>
    <!-- Magnific Popup javascript -->
    <script src="design_files/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Appear javascript -->
    <script src="design_files/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="design_files/plugins/waypoints/sticky.min.js"></script>
    <!-- Count To javascript -->
    <script src="design_files/plugins/countTo/jquery.countTo.js"></script>
    <!-- Slick carousel javascript -->
    <script src="design_files/plugins/slick/slick.min.js"></script>
    <!-- Initialization of Plugins -->
    <script src="design_files/js/template.js"></script>
    <!-- Custom Scripts -->
    <script src="design_files/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php echo $__env->yieldContent('js'); ?>


    <!--  -->
</body>

</html><?php /**PATH G:\xampp\htdocs\LE_PROJECT_LARAVEL\LE_Project\resources\views/layouts/simple_content_layout.blade.php ENDPATH**/ ?>