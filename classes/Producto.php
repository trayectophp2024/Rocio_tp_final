<?php

    class Producto{
        protected $id;
        protected $nombre;
        protected $id_catalogo;
        protected $descripcion;
        protected $talles;
        protected $stock;
        protected $imagen;
        protected $precio;

                 //Metodos
        // Devuelve el catologo Completo
        public function catalogo_completo(): array {
                $catalogo= [];
                
               $conexion = (new Conexion())->getConexion();
 
               $query = "SELECT * FROM  productos";
 
               $PDOStatment = $conexion->prepare($query);
 
               $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
               $PDOStatment->execute();
 
               $catalogo = $PDOStatment->fetchAll();
 
               return $catalogo;
 
          }
 
        // Devuelve el catalogo de productos de un personaje en particular 
        public function catalogo_x_categoria(int $id) {
             $catalogo= [];
                 
             $conexion = (new Conexion())->getConexion();
 
             $query = "SELECT * FROM productos WHERE id_catalogo = $id";
 
             $PDOStatment = $conexion->prepare($query);
 
             $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
             $PDOStatment->execute();
 
             $catalogo = $PDOStatment->fetchAll();
 
             return $catalogo;  
        }
 
        /* devolver es un producto en particular */
 
        /* marcador de posiciones , los marcadores de posiciones nos evitan vulnerabilidades como la inyeccion de SQL */
 
        public function producto_x_id(int $idProducto){
 
             $conexion = (new Conexion())->getConexion();
 
             $query = "SELECT * FROM productos WHERE id = :idProducto";
 
             $PDOStatment = $conexion->prepare($query);
 
             $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
             $PDOStatment->execute(
                 [
                     'idProducto' => $idProducto
                 ]
             );
 
             $resultado = $PDOStatment->fetch();
 
             if(!$resultado){
                 return null;
             }
 
             return $resultado;
 
 
        }

            /* Metodo para insertar nuevo personaje */

    public function insert($nombre, $id_catalogo, $descripcion, $talles, $stock, $precio, $imagen)
    {

        $conexion = (new Conexion())->getConexion();

        $query = "INSERT INTO productos(id,nombre, id_catalogo, descripcion,talles,stock,precio,imagen) 
                     VALUES (NULL,:nombre, :id_catalogo, :descripcion,:talles,:stock, :precio,:imagen )";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->execute(
            [
                'nombre' => $nombre,
                'id_catalogo' => $id_catalogo,
                'descripcion'  => $descripcion,
                'talles' => $talles,
                'stock' => $stock,
                'precio' => $precio,
                'imagen' => $imagen
            ]
        );
    }

     /* metodo para editar un personaje  */

     public function edit($nombre, $descripcion, $talles, $stock, $precio, $id)
     {
 
         $conexion = (new Conexion())->getConexion();
 
         $query = "UPDATE productos SET nombre = :nombre, descripcion = :descripcion, talles = :talles, stock = :stock, precio = :precio WHERE id = :id";
 
         $PDOStatment = $conexion->prepare($query);
 
         $PDOStatment->execute(
             [
                 'id' => $id,
                 'nombre' => $nombre,
                 'descripcion'  => $descripcion,
                 'talles' => $talles,
                 'stock' => $stock,
                 'precio' => $precio,
                 
             ]
         );
     }
 
     /* Metodo Reemplazar Imagen */
 
     public function reemplazar_imagen($imagen, $id)
     {
 
         $conexion = (new Conexion())->getConexion();
 
         $query = "UPDATE productos SET imagen = :imagen WHERE id = :id";
 
         $PDOStatment = $conexion->prepare($query);
 
         $PDOStatment->execute(
             [
                 'id' => $id,
                 'imagen' => $imagen
                 
             ]
         );
     }
 
     /* Borrar personaje */
 
     public function delete() {
         $conexion = (new Conexion())->getConexion();
 
         $query = "DELETE FROM productos WHERE id  = ?";
 
         $PDOStatment = $conexion->prepare($query);
 
         $PDOStatment->execute([$this->id]);
     }
 
       


    
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Get the value of id_catalogo
         */ 
        public function getId_catalogo()
        {
                return $this->id_catalogo;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Get the value of talles
         */ 
        public function getTalles()
        {
                return $this->talles;
        }

        /**
         * Get the value of stock
         */ 
        public function getStock()
        {
                return $this->stock;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

    }

    

?>