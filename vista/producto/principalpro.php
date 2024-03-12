<div class="container pt-4 px-4">
    <div class="row">
        <div class="col-lg-12>">
            <div class="bd-ligth rounded p-4">
                <h3>Administracion de Productos</h3>
                <a href="?controlador=producto&accion=frmregistrar" class="btn btn-primary">Registrar</a>
            </div>
        </div>
    </div>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">imagen</th>
                <th scope="col">opciones</th>
            </tr>
            <?php
            foreach ($this->producto as $info) {
                $uid=$info["pro_UID"];
                $opc="opc";
                echo "<td>" . $info["pro_nombre"] . "</td>";
                echo "<td>" . $info["pro_precio"] . "</td>";
                echo "<td> <img src= 'public/img/". $info["pro_img"]."'style='width:100px; heigth:100px;'></td>";

                echo"<td> <a href='?controlador=producto&accion=frmeditar&uid=$uid' class='btn btn-primary'>Editar</a> |
                <button class= 'btn btn-danger onclick='eliminar()'>Eliminar</button>";
                echo"</tr>";
            }
            ?>
    </table>
</div>