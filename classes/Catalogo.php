<?php

class Catalogo
{
    //atributos
    protected $id;
    protected $nombre;
    /* Todos los productos */
    public function catalogo_completo(): array
    {
        $resultado = [];

        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM catalogo";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatment->execute();

        $resultado = $PDOStatment->fetchAll();

        return $resultado;
    }

    // devuelve los datos de un personaje en particular 
    public function catalogo_x_id(int $id)
    {


        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM catalogo WHERE id = $id";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatment->execute();

        $resultado = $PDOStatment->fetch();

        if (!$resultado) {
            return null;
        }

        return $resultado;
    }


        /* Metodo para insertar nuevo personaje */

        public function insert($nombre)
        {
    
            $conexion = (new Conexion())->getConexion();
    
            $query = "INSERT INTO catalogo(id,nombre) 
                         VALUES (NULL,:nombre)";
    
            $PDOStatment = $conexion->prepare($query);
    
            $PDOStatment->execute(
                [
                    'nombre' => $nombre,
                ]
            );
        }
    
        /* metodo para editar un personaje  */
    
        public function edit($nombre, $id)
        {
    
            $conexion = (new Conexion())->getConexion();
    
            $query = "UPDATE catalogo SET nombre = :nombre WHERE id = :id";
    
            $PDOStatment = $conexion->prepare($query);
    
            $PDOStatment->execute(
                [
                    'id' => $id,
                    'nombre' => $nombre,
                    
                ]
            );
        }
        /* Borrar Personaje  */
    
        public function delete() {
            $conexion = (new Conexion())->getConexion();
    
            $query = "DELETE FROM catalogo WHERE id  = ?";
    
            $PDOStatment = $conexion->prepare($query);
    
            $PDOStatment->execute([$this->id]);
        }

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
}
