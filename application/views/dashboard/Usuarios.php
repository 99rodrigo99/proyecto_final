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
                            <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="agregar_usuarios" method="POST" class="row g-3 needs-validation" novalidate>

                                <div class="col-md-12">

                                    <label class="form-label">Nombres</label>
                                    <input name="nombres" type="text" class="form-control" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <label class="form-label">Apellidos</label>
                                    <input name="apellidos" type="text" class="form-control" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <label class="form-label">Identificación</label>
                                    <input name="identificacion" type="number" class="form-control" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <label class="form-label">Correo</label>
                                    <input name="correo" type="email" class="form-control" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <label class="form-label">Telefono</label>
                                    <input name="telefono" type="number" class="form-control" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <label class="form-label">Dirección</label>
                                    <input name="direccion" type="text" class="form-control" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>

                                    <label class="form-label">Contraseña</label>
                                    <input name="password" type="password" class="form-control" required>
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

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos_usuarios as $usr) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $usr->id ?></th>
                                <td><?php echo $usr->nombres ?></td>
                                <td><?php echo $usr->apellidos ?></td>
                                <td><?php echo $usr->telefono ?></td>
                                <td><?php echo $usr->correo ?></td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>