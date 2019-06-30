<?php

    class mislibrosModel extends Model{

        public function __construct(){
            parent::__construct();
        }

        //Método para insertar usuarios en la BD.
        public function insert($datos){
            try{
                $query = $this->db->connect()->prepare('INSERT INTO valoraciones (titulo, autor, anio, descripcion, opinion, valoracion) VALUES(:titulo, :autor, :anio, :descripcion, :opinion, :valoracion)');
                $query->execute(['titulo' => $datos['titulo'], 'autor' => $datos['autor'], 'anio' => $datos['anio'], 'descripcion' => $datos['descripcion'], 'opinion' => $datos['opinion'], 'valoracion' => $datos['valoracion']]);
                    
                    return true;
            }catch(PDOException $e){
                //echo $e->getMessage();
                
                return false;
            }
            //Recibimos el objeto $pdo de nuestra clase DataBase
            
            
        }
    }

?>