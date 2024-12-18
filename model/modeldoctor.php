<?php
class Modelo{

  private $doctor;
  private $db;
  public $coddoc;
  public $dnidoc;
  public $nomdoc;
  public $apedoc;
  public $codespe;
  public $sexo;
  public $telefo;
  public $fechanaci;
  public $correo;
  public $naciona;
  public $estado;
  
  

  public function __construct(){
      $this->doctor=array();
      $this->db=new PDO('mysql:host=localhost;dbname=proyecto_final',"root","");
  }
  public function mostrar($tabla,$condicion){
      $consulta="SELECT * FROM doctor";

      $resultado=$this->db->query($consulta);
      while ($tabla=$resultado->fetchAll(PDO::FETCH_ASSOC)) {
          $this->doctor[]=$tabla;
      }
      return $this->doctor;
    }
    public function  insertar(Modelo $data){
    try {
      $query="INSERT INTO doctor (dnidoc,nomdoc,apedoc,codespe,sexo,telefo,fechanaci, correo,naciona,estado)VALUES(?,?,?,?,?,?,?,?,?,?)";

      $this->db->prepare($query)->execute(array($data->dnidoc,$data->nomdoc,$data->apedoc,
	  $data->codespe,$data->sexo,$data->telefo,$data->fechanaci,$data->correo,$data->naciona,$data->estado));

    }catch (Exception $e) {

      die($e->getMessage());
    }
    }
    public function llenarespecialidad(){



    try{
      


    }catch(Exception $e){


    }

    }

   
	
	
  public function actualizar($tabla,$data,$condicion){
      $consulta="UPDATE $tabla SET $data WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
  public function eliminar($tabla,$condicion){
      $consulta="DELETE FROM $tabla WHERE $condicion";
      $resultado=$this->db->query($consulta);
      if($resultado){
          return true;
      }else{
          return false;
      }
  }
}

 ?>
