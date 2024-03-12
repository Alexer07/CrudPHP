<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Registro de Producto</h6>
                            <form method="Post" action="?controlador=producto&accion=registrar"  onsubmit="return false;" id="#frmpro" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre de Producto</label>
                                        <input type="text" class="form-control" id="producto" name="producto" placeholder="producto" >
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Precio</label>
                                        <input type="tex" class="form-control" id="precio" name="precio" placeholder=""  >                                 
                                 </div>  
                                 <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Cargar imagen</label>
                                        <input type="file" class="form-control" id="img" name="img" placeholder=""  >                                 
                                 </div>  
                                <button type="submit" class="btn btn-primary mt-4" onclick="registrarProducto()">Registrar</button>  
                            </form>
                        </div>
                    </div>