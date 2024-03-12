<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Registro de Producto</h6>
                            <form method="Post" action="?controlador=producto&accion=editar"  onsubmit="return false;" id="#frmpro">
                                <div class="row">
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre de Producto</label>
                                        <input type="text" class="form-control" id="producto" name="producto" value="<?php echo $this ->infoproducto["pro_nombre"]?>" >
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <label for="exampleInputPassword1" class="form-label">Precio</label>
                                        <input type="tex" class="form-control" id="precio" name="precio" value="<?php echo $this ->infoproducto["pro_precio"]?>">                                 
                                 </div> 
                                 <div class="col-lg-6">                  
                                    <input type="hidden" class="form-control" id="uid" name="uid" value="<?php echo $this ->infoproducto["pro_UID"];?>">
                                 </div> 
                                <button type="submit" class="btn btn-primary mt-4" onclick="EditarProducto()">Editar</button>  
                            </form>
                        </div>
                    </div>