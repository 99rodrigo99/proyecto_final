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
              <h5 class="modal-title" id="exampleModalLabel">Agregar Datos</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="agregar_nuestra_empresa" method="POST" class="row g-3 needs-validation" novalidate>

                <div class="col-md-12">
                  <label class="form-label">Parrafo_1</label>
                  <textarea name="Parrafo_1" class="form-control" aria-label="With textarea"></textarea>
                  <div class="valid-feedback">
                    Looks good!
                  </div>

                  <label class="form-label">Lista_1</label>
                  <textarea name="Lista_1" class="form-control" aria-label="With textarea"></textarea>
                  <div class="valid-feedback">
                    Looks good!
                  </div>

                  <label class="form-label">Parrafo_2</label>
                  <textarea name="Parrafo_2" class="form-control" aria-label="With textarea"></textarea>
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
            <th scope="col">Parrafo_1</th>
            <th scope="col">Lista_1</th>
            <th scope="col">Parrafo_2</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($datos_nuestra_empresa as $dat) {
          ?>
            <tr>
              <th scope="row"><?php echo $dat->id ?></th>
              <td><?php echo $dat->Parrafo_1 ?></td>
              <td><?php echo $dat->Lista_1 ?></td>
              <td><?php echo $dat->Parrafo_2 ?></td>
            </tr>

          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>