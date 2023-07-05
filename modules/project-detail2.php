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
                    <div class="title wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <h2><?echo $blog_nom;?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!-- Start project details Area -->
<section class="project-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <?
            include('backend/blog_detalles.php');
            ?>
            <div class="project-detail-text-2">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 text-center alig">
                        <div class="fotorama"  data-width="800" data-height="600">
                            <?
                                include('backend/vistaBlog_Gal.php');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End project details Area -->