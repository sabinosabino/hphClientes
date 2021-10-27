<?php
namespace App\Models;

use App\Models;
//include connection

class rangecep extends Model{
  public $id;
  public $cepinicial;
  public $cepfinal;
  public $pesoinicial;
  public $pesofinal;
  public $tarifa;
  public $valorpesoexcedente;
  
  //lista tracks
  public function list(){
    return null;
  }

  //list range
  public function listone(){
    return null;
  }

  //include and change database
  public function save($id=0){
    try{
      $sql="INSERT INTO tblfaixas(
        cepinicial,
        cepfinal,
        pesoinicial,
        pesofinal,
        tarifa,
        valorpesoexcedente) VALUES(?,?,?,?,?,?)";

        $stmt=$pdo->prepare($sql);
        $stmt->execute([$id, $cepinicial, $cepfinal, $pesoinicial, $pesofinal, $tarifa, $valorpesoexcedente]);
        $pdo=null;

        return true;
      } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }

      
  }

  //delete database
  public function delete(){
    return null;
  }

}


?>