<?php
require_once('Modelo.php');

class Articulo extends Modelo {

    private $id;
    private $nombre_tabla;

    /*Constructor*/ 
    public function __construct() {
        parent::__construct(); // Nos conecta a la base de datos
        $this->id = 'art_id';
        $this->nombre_tabla = 'articulo';
    }

    public function get_all(){
        $consulta = "SELECT * FROM $this->nombre_tabla";
        $resultado = $this->db->query($consulta);
        if(!$resultado){
            echo "Error al listar los datos de la tabla";
        }else{
            return $resultado->fetch_all(MYSQLI_ASSOC); //Array Asociativo
            $resultado->close();
            $this->db->close();
        }
    }
    /* Obtiene el registro con el id por parametro */
    public function get($id){
        $consulta = "SELECT * FROM $this->nombre_tabla WHERE $this->id=".$id;
        $resultado = $this->db->query($consulta);
        if(!$resultado){
            echo "Error al listar el elemento con ID";
        }else{
            return $resultado->fetch_assoc(MYSQLI_ASSOC); //Array 
            $resultado->close();
            $this->db->close();
        }
    }

    /* Guarda un registro en la base de datos*/
    public function insert($data){
        $consulta = "INSERT INTO $this->nombre_tabla (usu_id, cat_id, art_titulo, art_resumen, art_detalle, art_foto) 
        VALUES ('".$data['usu_id']."','".$data['cat_id']."','".$data['art_titulo']."','".$data['art_resumen']."','".$data['art_detalle']."','".$data['art_foto']."');";
        $resultado = $this->db->query($consulta);
        if(!$resultado){
            echo "Error al registrar los datos";
        }else{
            return $resultado; //Array 
            $resultado->close();
            $this->db->close();
        }
    }

    /* Actualiza un registro de la base de datos*/
    public function update($id, $data){
        $consulta = "UPDATE $this->nombre_tabla 
        SET usu_id = '".$data['usu_id']."',
        art_titulo = '".$data['art_titulo']."',
        art_resumen = '".$data['art_resumen']."',
        art_detalle = '".$data['art_detalle']."',
        art_foto = '".$data['art_foto']."' WHERE $this->id=".$id;
        $resultado = $this->db->query($consulta);
        if(!$resultado){
            echo "Error al actualizar el registro";
        }else{
            return $resultado; //Array 
            $resultado->close();
            $this->db->close();
        }
    }

    /* Borrar un registro de la base de datos*/
    public function delete($id){
        $consulta = "DELETE FROM $this->nombre_tabla WHERE $this->$id = ".$id;
        $resultado = $this->db->query($consulta);
        if(!$resultado){
            echo "Error al eliminar el registro";
        }else{
            return $resultado; //Array 
            $resultado->close();
            $this->db->close();
        }
    }

}
?>
