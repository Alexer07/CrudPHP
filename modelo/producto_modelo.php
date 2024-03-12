<?php
class producto_modelo{
public static function listar(){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "SELECT * FROM productos";
        $st=$con->prepare($sql);
        $st->execute();
        return $st->fetchAll();
    }

    public static function registrar($info){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "INSERT INTO productos (pro_UID,pro_nombre,pro_precio,pro_img)
        VALUES
        (?,?,?,?)";
        $uid= uniqid();
        $st=$con->prepare($sql);
        $v= array(
            $uid,
            $info["producto"]     , $info["precio"],
            $info["img"],
        );
        return $st->execute($v);
    }

    public static function buscarXUID($uid){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "SELECT * FROM productos WHERE pro_UID  = ?";
        $st=$con->prepare($sql);
        $v = array($uid);
        $st->execute($v);
        return $st->fetch();
    }
    public static function buscarXnombre($nombre){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "SELECT * FROM productos WHERE pro_nombre  = ?";
        $st=$con->prepare($sql);
        $v = array($nombre);
        $st->execute($v);
        return $st->fetch();
    }

    public static function actualizar($info){
        $i = new conexion();
        $con = $i->getConexion();
      
        $sql = "UPDATE productos SET pro_nombre = ?, pro_precio = ?
        WHERE pro_UID=?";
        $st = $con->prepare($sql);
        $p = array(

            $info['producto'], $info['precio'], $info['uid'] 
         );
          return $st->execute($p); 
        
    }  
    public static function eliminar($uid){
        $i=new Conexion();
        $con= $i->getConexion();
        $sql= "DELETE FROM productos WHERE pro_UID = ?";
        $st=$con->prepare($sql);
        $v = array($uid);
        return  $st->execute($v);
    }
}

?>