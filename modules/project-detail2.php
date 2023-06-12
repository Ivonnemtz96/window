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

            <div class="project-detail-text-2">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="text-box">
                            <h2>Subtitulo</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo adipisci fugit
                                modi ut aperiam qui mollitia voluptatum magni asperiores. Illo beatae quisquam
                                ipsa soluta veniam. Ut assumenda possimus laudantium doloribus expedita rerum
                                qui ipsum quasi in mollitia alias dolor quo sunt ex impedit sit quibusdam, natus
                                illo corrupti praesentium! Enim earum unde laboriosam nihil, accusamus corrupti
                                amet aperiam nisi temporibus.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 text-center">
                        <div class="fotorama">
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