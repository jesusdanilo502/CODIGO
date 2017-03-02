<?php
  //Referenciamos la clase clsconexion
  @include_once("clsconexion.php");
  @include_once("producto_venta.php");

  class clsVenta{
    public function __construct(){
      $this-> clsconexion= new clsconexion;
    }
    function consultarVentaUltimoId(){
      $con = new clsConexion();
      
      if($con->conectarse()==TRUE){
          $query = "CALL SP_S_UltimoIdVenta()";
          $resul = @mysql_query($query);
           if(!$result)
           return FALSE;
           else
           return $result;
      }
    }
    function  CompraTotalDiaria(){
        $con = new clsConexion;
        if($con->conectarse()==TRUE){
            $query = "CALL SP_S_COMPRA_TOTAL_DIARIA()";
            $resul= @mysql_query($query);
            if(!$resul)
                return false;
            else
                return $resul;
        }
    }
    }

  

 ?>
