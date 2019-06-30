<?php

    class AltaUsuarioModel extends Model{

        public function __construct(){
            parent::__construct();
        }

        //Método para insertar usuarios en la BD.
        public function insert($datos){

            try{
                $query = $this->db->connect()->prepare('INSERT INTO usuarios (usuario, correo, pass) VALUES(:usuario, :correo, :pass)');
                $query->execute(['usuario' => $datos['usuario'], 'correo' => $datos['correo'], 'pass' => $datos['pass']]);
                    
                    return true;
            }catch(PDOException $e){
                //echo $e->getMessage();
                
                return false;
            }
            //Recibimos el objeto $pdo de nuestra clase DataBase
            
            
        }
    }

?>