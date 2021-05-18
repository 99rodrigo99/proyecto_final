<section id="services" class="services">
    <div class="container mt-5">
        <div class="col-md-12">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mt-4 mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar servicio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="agregar_servicio" method="POST" class="row g-3 needs-validation" novalidate>

                                <div class="col-md-12">
                                    <label class="form-label">Icon</label>
                                    <input name="icon" type="text" class="form-control" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <label class="form-label">Titulo</label>
                                    <input name="Titulo" type="text" class="form-control" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <label class="form-label">Descripcion</label>
                                    <textarea name="Descripcion" class="form-control" aria-label="With textarea" required></textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                foreach ($datos_servicios as $dat) {
                ?>
                    <div class="col-md-12 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-5">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><?php echo $dat->icon ?></i></div>
                            <h4 class="title"><a><?php echo $dat->Titulo ?></a></h4>
                            <p class="description"><?php echo $dat->Descripcion ?></p>
                            <div class="container">
                            </div>
                        </div>  
                    </div>
                    
                <?php
                }
                ?>

            </div>
        </div>

    </div>
</section>