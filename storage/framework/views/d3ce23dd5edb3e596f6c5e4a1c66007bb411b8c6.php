<?php $__env->startSection('title'); ?>
    About us
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/aboutus.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/animate/animate.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/owl_carousel/css/owl.carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/owl_carousel/css/owl.theme.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/devicon/devicon.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/devicon/devicon-colors.css')); ?>">
    <!--end of page level css-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('top'); ?>
    <?php
        $url = env('API_SERVER_URL'). "api/aboutus";
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, "");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        $data = json_decode($result)->data;
        $news_content = $data->news_content;
    ?>
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('home')); ?>"> <i class="livicon icon3 icon4" data-name="home" data-size="18"
                                                      data-loop="true" data-c="#eeeeee" data-hc="#eeeeee"></i>Home
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true"
                       data-c="#eeeeee" data-hc="#eeeeee"></i>
                    <a href="#">News</a>
                </li>
            </ol>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->
        <div class="panel-primary row" style="margin-top: 20px; border-radius: 2px">
            <div class="panel-heading" style="height: 50px">
                <div class="panel-title">
                    <h4 style="margin-top: 6px">What's new</h4>
                </div>
            </div>
        </div>
        <div class="row box" style="background-color: #333333!important;margin-top: 10px;">
            <div class="info" >
                <div class="col-md-12" style="height: 500px">
                    <?php echo $news_content; ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
    <!-- page level js starts-->
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/owl_carousel/js/owl.carousel.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/wow/js/wow.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/frontend/carousel.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/frontend/aboutus.js')); ?>"></script>
    <!--page level js ends-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>