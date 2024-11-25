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
    public function get_x_id(int $id)
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
