<template>
    <div class="container">
        <h1 class="display-6">Detalle de ventas</h1>

        <div class="d-flex flex-row-reverse">
            <button class="btn btn-info me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ID Ventas</th>
                    <th scope="col">ID Productos</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Total</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td scope="row">1</td>
                    <td scope="row">1</td>
                    <td scope="row">25</td>
                    <td scope="row">$250.000</td>
                    <td scope="row">
                        <button type="button" class="btn btn-success">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>  
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo detalle de venta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        <div class="modal-body">     
            <label class="col-sm-2 col-form-label">ID ventas</label>
            <input class="form-control" type="text" placeholder="Ingrese el identificador de la venta" aria-label="default input">
            <label class="col-sm-3 col-form-label">ID productos</label>
            <input class="form-control" type="text" placeholder="Ingrese el identificador del producto" aria-label="default input">
            <label class="col-sm-2 col-form-label">Cantidad</label>
            <input class="form-control" type="text" placeholder="Ingrese la cantidad vendida" aria-label="default input">
            <label class="col-sm-2 col-form-label">Total</label>
            <input class="form-control" type="text" placeholder="Ingrese el precio total" aria-label="default input">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  
    </div>
</template>

<script>

</script>