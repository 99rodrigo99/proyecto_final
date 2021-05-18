<section id="about" class="about">
    <div class="container mt-5">

        <div class="section-title" data-aos="fade-up">
            <h2>nosotros</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <?php
                foreach ($datos_nuestra_empresa as $dat) {
                ?>
                    <p>
                        <?php echo $dat->Parrafo_1 ?>
                    </p>

                    <ul>
                        <li><i class="ri-check-double-line"></i><?php echo $dat->Lista_1 ?></li>
                    </ul>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <?php
                foreach ($datos_nuestra_empresa as $dat) {
                ?>
                    <p>
                        <?php echo $dat->Parrafo_2 ?>
                    </p>
                <?php
                }
                ?>
                <a href="gas_natural" class="btn-learn-more">Conoce nuestros servicios</a>
            </div>

        </div>

    </div>
</section>