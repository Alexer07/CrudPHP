<?php
require_once "modelo/producto_modelo.php";
class producto_controlador{

    public function __construct(){
        $this->obj = new Plantilla();
    }
    public function principal(){
        $this-> obj-> producto = producto_modelo::listar();  
        $this-> obj-> unirPagina("producto/principalpro");        
    }

    public function frmregistrar(){
        $this-> obj-> unirPagina("producto/frmregistrar");
    }

    public function registrar(){
        if(isset($_POST["producto"]) && isset($_POST["precio"])){
            extract ($_POST);
            $datos["producto"] = $producto;
            $datos["precio"] = $precio;   
            $datos["img"] = $_FILES["img"]["name"];
            $ruta = $_FILES["img"]["tmp_name"];            
            $res= producto_modelo::buscarXnombre($producto);
            if( is_array($res)){
                echo json_encode(array("estado"=> 2, "mensaje"=>"El producto ya se encuentra registrado", "icono" => "error"));
            }else{
                if($producto != null && $precio != null && $_FILES != null ){
                    move_uploaded_file($ruta,"public/img/".$datos['img']);
                    $res = producto_modelo::registrar($datos);
                    if($res>0){
                        echo json_encode(array("estado"=> 1, "mensaje"=>"Registro Exitoso", "icono" => "success"));
                    }
                }else {
                    echo json_encode(array("estado"=> 2, "mensaje"=>"Registro Incorrecto", "icono" => "error"));
                }
                } 
        }    
}
    public function frmeditar(){
        $uid = $_GET["uid"];
        $this-> obj-> infoproducto = producto_modelo::buscarXUID($uid);
        $this-> obj-> unirPagina("producto/frmeditar");
    }

    public function editar(){if(isset($_POST["producto"]) && isset($_POST["precio"])){
        extract ($_POST);
        $datos["producto"] = $producto;
        $datos["precio"] = $precio;
        $datos["uid"] = $uid;
        $res = producto_modelo::actualizar($datos);
            if ($res>0){
                echo json_encode(array("estado"=>1, "mensaje" => "Actualizado", "icono"=>"success")) ;
            }
            else{
                echo json_encode(array("estado"=>2, "mensaje" => "Error al actualizar", "icono"=>"error")) ;
            }
        }
    }

    public function eliminar($uid){
        if(isset($_GET["uid"])){
            $uid= $_GET["uid"];
            $r= producto_modelo::eliminar($uid);
            if($r>0){
                header('location:?controlador=producto&accion=principal');
            }
        }

    }

}