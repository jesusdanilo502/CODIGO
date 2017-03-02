<?php
// Referenciamos la clase clsConexiòn
include_once("clsConexion.php");
//Implementamos la clase empleado
class clsEmpleado{
  //constructor
  function clsEmpleado(){

  }
  //Funcion para agregar una nueva empleado en la BD
  
  function  agregarEmpleado($nombre,$apellido,$sexo,$fechanac,$direccion,$telefono,$celular,$email,$dni,$fechaing,$sueldo,$estado,$usuario,$contrasena,$idtipousuario){

      $con = new clsConexion;
      if($con->conectarse()==true){
          $query = "CALL SP_I_Empleado('$nombre','$apellido','$sexo','$fechanac','$direccion','$telefono','$celular','$email','$dni','$fechaing','$sueldo','$estado','$usuario','$contrasena','$idtipousuario')";
          $result = @mysql_query($query);
              if(!$result)
                  return false;
                  else
                  return true;
      }
  }
  
 function Ingresar_Sistema2($user,$password){
   //creamos el objeto $con a partir de la clase clsConexion
   $con = new clsConexion;
   //usamos el metodo conectar para realizar la conexion
   if($con->conectarse()==true){
     $query = "call SP_S_INGRESAR_SISTEMA('$user','$password')";
   $result = @mysql_query($query);
   if (!$result)
     return false;
   else
     return $result;
   }
 }
}
 ?>


