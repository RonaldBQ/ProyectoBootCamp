<?php
require_once('Modelo.php');

class Usuario extends Modelo {

    private $id;
    private $nombre_tabla;

    /*Constructor*/ 
    public function __construct() {
        parent::__construct(); // Nos conecta a la base de datos
        $this->id = 'usu_id';
        $this->nombre_tabla = 'usuario';
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
        $consulta = "INSERT INTO $this->nombre_tabla (usu_usr, usu_password, usu_nombres, usu_primer_apellido, usu_segundo_apellido,usu_descripcion_usuario,usu_descripcion_contacto) 
        VALUES ('".$data['usu_usr']."','".$data['usu_password']."','".$data['usu_nombres']."','".$data['usu_primer_apellido']."','".$data['usu_segundo_apellido']."','".$data['usu_descripcion_usuario']."','".$data['usu_descripcion_contacto']."');";
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
        usu_usr = '".$data['usu_usr']."',
        usu_password = '".$data['usu_password']."',
        usu_nombres = '".$data['usu_nombres']."',
        usu_primer_apellido = '".$data['usu_primer_apellido']."',
        usu_segundo_apellido = '".$data['usu_segundo_apellido']."',
        usu_descripcion_usuario = '".$data['usu_descripcion_usuario']."',
        usu_descripcion_contacto = '".$data['usu_descripcion_contacto']."' WHERE $this->id=".$id;
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
