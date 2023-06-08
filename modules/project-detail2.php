<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url(/assets/images/breadcrumb/breadcrumb-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="breadcrumb-menu wow slideInDown animated" data-wow-delay="0.3s"
                        data-wow-duration="1500ms">
                        <ul class="clearfix">
                            <li><a href="/">Inicio</a></li>
                            <li class="active">Detalles de proyecto</li>
                        </ul>
                    </div>
                    <?
                        include('backend/blog_nombre.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!-- Start project details Area -->
<section class="project-details-area">
    <div class="container">
        <div class="row">
            <?
            include('backend/blog_detalles.php');
            ?>
        </div>
    </div>
</section>
<!-- End project details Area -->