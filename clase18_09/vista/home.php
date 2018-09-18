<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenido</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../template/css/bootstrap.css">
        
        <script src="../template/js/jquery.js"></script>
        <script src="../template/js/popper.js"></script>
        <script src="../template/js/bootstrap.min.js"></script>
        <script src="../template/js/scripts.js"></script>
    </head>
    <body>
        <?php 
        session_start();
        require_once '../controlador/home_back.php';
        ?>
        <div class="row">
            <div class="col-md-12"><div class="jumbotron"><h1>BIENVENIDO <?= $_SESSION['nombre_user']; ?><small> (A.B.M. de articulos con PDO)</small></h1></div></div>
            <div class="col-md-6 offset-md-3">
                <button type="button" class="btn btn-success" id="new_articulo" data-toggle="modal" data-target="#articuloModal">Nuevo</button>
                <br><br>
                <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody id="tbl_body">
                  <?php
                    foreach (articulos() as $art){
                        ?>
                    <tr>
                        <th><?= $art->getId();?></th>
                        <td><?= $art->getDescripcion(); ?></td>
                        <td>$ <?= $art->getPrecio(); ?></td>
                        <td>
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Borrar</button>
                        </td>
                      </tr> 
                        <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
        </div>
        <!-- modales  -->
        <div class="modal fade" tabindex="-1" role="dialog" id="articuloModal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title_modal">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                    <div class="form-group">
                        <label for="txtdescripcion">Articulo: </label>
                        <input type="text"  id="txtdescripcion" class="form-control" placeholder="Nombre de articulo">
                    </div>
                    
                    <div class="form-group">
                        <label for="txtprecio">Precio: </label>
                        <input type="number" id="txtprecio" class="form-control" placeholder="Precio de articulo">
                    </div>
                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary" id="btn_guardar_art">Guardar</button>
                </div>
              </div>
            </div>
          </div>
    </body>
</html>