<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet"  href="styles.css">
    <title>Tabla de productos</title>
</head>
<body>
    <div class="container-fluid">
        <header  >
            MI PRIMER CRUD
        </header>
        <section>
          <div class="alinear">
          </div>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#InsertProducto" data-bs-whatever="@getbootstrap">Insertar productos</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No Producto</th>
                        <th>Nombre de Producto</th>
                        <th>Precio Producto</th>
                        <th>Unidades Producto</th>
                        <th>Descripción Producto</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                        
                    </tr>
                </thead>
  
                <?php
                include ("conexion.php");
                $query = "SELECT * FROM Productos";
                $enlace=conectar();
                $result = mysqli_query($enlace, $query);
              
                while($row = mysqli_fetch_array($result))
                {
                  echo "<tr>";
                  echo "<td>" . $row["noProducto"] . "</td>";
                  echo "<td>" . $row["nombreProducto"] . "</td>";
                  echo "<td>" . $row["precioProducto"] . "</td>";
                  echo "<td>" . $row["unidadesProducto"] . "</td>";
                  echo "<td>" . $row["descripcionProducto"] . "</td>";
                  echo '<td>
                        <i class="bi bi-pencil-square edit-btn"
                         data-bs-toggle="modal" data-bs-target="#updateProductoModal">
                         </i>
                        </td>';


                        echo '<td>
                         <i class="bi bi-trash delete-btn" 
                        data-bs-toggle="modal" data-bs-target="#deleteProductoModal">
                        </i>
                     </td>';
                  echo "</tr>";     
                }            
                ?>               
              </table>

        <div class="modal fade" id="InsertProducto" tabindex="-1" aria-labelledby="InsertProducto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="InsertProducto">Nuevo Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form name ="" method="post" action="InsertProducto.php">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">ID Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "noProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "nombreProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Precio Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "precioProducto">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Unidades Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "unidadesProducto">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Descripción Producto:</label>
            <input type="text" class="form-control" id="recipient-name" name = "descripcionProducto">

          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<Script>
  const InsertProducto = document.getElementById('InsertProducto')
if (InsertProducto) {
  exampleModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const recipient = button.getAttribute('data-bs-whatever')
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = New message to ${recipient}
    modalBodyInput.value = recipient
  })
}
</Script>


<div class="modal fade" id="updateProductoModal" tabindex="-1" aria-labelledby="updateProductoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="updateProductoModalLabel">Nuevo Producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form name="" method="post" action="updateProductos.php">
          <div class="mb-3">
            <label for="update-noProducto" class="col-form-label">ID Producto:</label>
            <input type="text" class="form-control" id="update-noProducto" name="noProducto">
          </div>
          <div class="mb-3">
            <label for="update-nombreProducto" class="col-form-label">Nombre Producto:</label>
            <input type="text" class="form-control" id="update-nombreProducto" name="nombreProducto">
          </div>
          <div class="mb-3">
            <label for="update-precioProducto" class="col-form-label">Precio Producto:</label>
            <input type="text" class="form-control" id="update-precioProducto" name="precioProducto">
          </div>
          <div class="mb-3">
            <label for="update-unidadesProducto" class="col-form-label">Unidades Producto:</label>
            <input type="text" class="form-control" id="update-unidadesProducto" name="unidadesProducto">
          </div>
          <div class="mb-3">
            <label for="update-descripcionProducto" class="col-form-label">Descripción Producto:</label>
            <input type="text" class="form-control" id="update-descripcionProducto" name="descripcionProducto">
          </div>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>

  const editButtons = document.querySelectorAll('.edit-btn');

  const updateProductoModal = document.getElementById('updateProductoModal');

  const noProductoInput = document.getElementById('update-noProducto');

  const nombreProductoInput = document.getElementById('update-nombreProducto');
  const precioProductoInput = document.getElementById('update-precioProducto');
  const unidadesProductoInput = document.getElementById('update-unidadesProducto');
  const descripcionProductoInput = document.getElementById('update-descripcionProducto');

  editButtons.forEach(button => {
    button.addEventListener('click', event => {
      const fila = event.target.closest('tr');
      const noProducto = fila.children[0].textContent;
      const nombreProducto = fila.children[1].textContent;
      const precioProducto = fila.children[2].textContent;
      const unidadesProducto = fila.children[3].textContent;
      const descripcionProducto = fila.children[4].textContent;

      noProductoInput.value = noProducto;
      nombreProductoInput.value = nombreProducto;
      precioProductoInput.value = precioProducto;
      unidadesProductoInput.value = unidadesProducto;
      descripcionProductoInput.value = descripcionProducto;

      updateProductoModal.show();
    });
  });
</script>


<!--DELETE-->
<div class="modal fade" id="deleteProductoModal" tabindex="-1" aria-labelledby="deleteProducto"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="deleteProducto">¿Seguro de eliminar este producto?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="display:none">
                        <form name="" method="post" action="deleteProductos.php">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">ID Producto:</label>
                                <input type="text" class="form-control" id="delete-noProducto" name="noProducto">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Eliminar registro</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const deleteProductoModal = document.getElementById('deleteProductoModal');
        const deleteNoProductoInput = document.getElementById('delete-noProducto');

        deleteProductoModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Botón que activó el modal
            const fila = button.closest('tr'); // Fila correspondiente al botón
            const noProducto = fila.children[0].textContent; // ID del producto

            // Actualizar el valor del campo oculto con el ID del producto
            deleteNoProductoInput.value = noProducto;
        });

        deleteButtons.forEach(button => {
            button.addEventListener('click', event => {
                // Mostrar el modal de eliminación
                deleteProducto.show()
            });
        });
        </script>
        <footer class="corner-bottom-right">
            Este es mi pie de página
        </footer>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>



