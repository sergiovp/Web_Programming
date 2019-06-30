<?php

    include_once 'models/valoraciones.php';

    class misvaloracionesmodel extends Model{

        public function __construct(){
            parent::__construct();
        }

        //Método para insertar usuarios en la BD.
        public function get(){
            $items = [];

            try{

                $query = $this->db->connect()->query("SELECT * FROM valoraciones");

                while($row = $query->fetch()){
                    $item = new Valoraciones();
                    $item->titulo = $row['titulo'];
                    $item->autor = $row['autor'];
                    $item->anio = $row['anio'];
                    $item->descripcion = $row['descripcion'];
                    $item->opinion = $row['opinion'];
                    $item->valoracion = $row['valoracion'];
                    
                    array_push($items, $item);
                }

                return $items;

            }catch(PDOException $e){
                return [];
            }
        }

        //FUNCIONA BIEN EL MÉTODO ENTERO.
        public function getByID($id){
            $item = new Valoraciones();
            $query = $this->db->connect()->prepare("SELECT * FROM valoraciones WHERE titulo = :titulo");
            try{
                $query->execute(['titulo' => $id]);

                while($row = $query->fetch()){
                    $item->titulo = $row['titulo'];
                    $item->autor = $row['autor'];
                    $item->anio = $row['anio'];
                    $item->descripcion = $row['descripcion'];
                    $item->opinion = $row['opinion'];
                    $item->valoracion = $row['valoracion'];
                }

                return $item;

            }catch(PDOException $e){
                return null;
            }
        }

        public function update($item){
            //error_reporting(0);
            $query = $this->db->connect()->prepare("UPDATE valoraciones SET autor = :autor, anio = :anio, descripcion = :descripcion, opinion = :opinion, valoracion = :valoracion WHERE titulo = :titulo");

            try{
                $query->execute([
                    'titulo' => $item['titulo'],
                    'autor' => $item['autor'],
                    'anio' => $item['anio'],
                    'descripcion' => $item['descripcion'],
                    'opinion' => $item['opinion'],
                    'valoracion' => $item['valoracion']
                    
                ]);

                //error_reporting(1);

                return true;
            }catch(PDOException $e){
                return false;
            }
        }

        public function delete($id){
            //error_reporting(0);
            $query = $this->db->connect()->prepare("DELETE FROM valoraciones WHERE titulo = :id");

            try{
                $query->execute([
                    'id' => $id,
                    
                ]);

                //error_reporting(1);

                return true;
            }catch(PDOException $e){
                return false;
            }
        }
    }

?>