<section id="services" class="services">
    <div class="container mt-5">

        <div class="section-title" data-aos="fade-up">
            <h2>Servicios</h2>
            <p>Contamos con tecnicos capacitados para realizar nuestro servicos.</p>
        </div>

        <div class="row">
            <?php
            foreach ($datos_servicios as $dat) {
            ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><?php echo $dat->icon ?></i></div>
                        <h4 class="title"><a><?php echo $dat->Titulo ?></a></h4>
                        <p class="description"><?php echo $dat->Descripcion ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</section>