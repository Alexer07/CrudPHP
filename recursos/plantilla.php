<?php
class Plantilla{
    public function unirPagina($contenido, $paginacompleta=true){
        if($paginacompleta){
        require_once"vista/header.php";
        require_once"vista/$contenido".".php";
        require_once"vista/footer.php";
        }else{
            require_once "vista/$contenido".".php";
        }
    }

}

?>