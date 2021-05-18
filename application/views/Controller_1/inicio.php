<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <?php
                foreach ($datos_inicio as $dat) {
                ?>
                    <h1 data-aos="fade-up"><?php echo $dat->Titulo_H1 ?></h1>
                <?php

                }
                ?>
                <?php
                foreach ($datos_inicio as $dat) {
                ?>
                <h2 data-aos="fade-up" data-aos-delay="400"><?php echo $dat->Parrafos ?></h2>
                <?php

                }
                ?>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="nuestra_empresa" class="btn-get-started scrollto">Quienes somos</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="<?php echo base_url(); ?>public/assets/img/logo.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>

<section id="clients" class="clients">
    <div class="container">

        <div class="row">

            <div class="col-lg-2 col-md-4 col-12">
                <img src="<?php echo base_url(); ?>public/assets/img/empresas/extucol.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
            </div>

            <div class="col-lg-2 col-md-4 col-12">
                <img src="<?php echo base_url(); ?>public/assets/img/empresas/haceb.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
            </div>

            <div class="col-lg-2 col-md-4 col-12">
                <img src="<?php echo base_url(); ?>public/assets/img/empresas/oka.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
            </div>

            <div class="col-lg-2 col-md-4 col-12">
                <img src="<?php echo base_url(); ?>public/assets/img/empresas/mirage.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
            </div>

            <div class="col-lg-2 col-md-4 col-12">
                <img src="<?php echo base_url(); ?>public/assets/img/empresas/extrucol.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
            </div>

        </div>

    </div>
</section>