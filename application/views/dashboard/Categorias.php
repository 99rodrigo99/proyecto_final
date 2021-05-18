<div class="container mt-10">
  <div class="row">
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
              <h5 class="modal-title" id="exampleModalLabel">Agregar Categoria</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="agregar_categorias" method="POST" class="row g-3 needs-validation" novalidate>
                <div class="col-md-12">
                  <label class="form-label">Nombre de categoria</label>
                  <input name="categorias" class="form-control">
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
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Categoria</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($datos_categorias as $ct) {
          ?>
            <tr>
              <th scope="row"><?php echo $ct->id ?></th>
              <td><?php echo $ct->categorias ?></td>
            </tr>

          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>