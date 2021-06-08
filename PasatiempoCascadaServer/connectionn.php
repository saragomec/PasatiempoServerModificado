<?php
class connectionn{

    private $connectionnBase; 
    
    public function SQL($query){
        if(!$this->connectionnBase){//si no hay conexion a base la creamos
            $this->connectionnBase = @new mysqli("localhost", "root", "", "pasatiempobbdd" );
        }

        //Ejecutamos la query sql
        $respuesta = $this->connectionnBase->query($query);
        if($respuesta){//res tiene algo que no es bool
            return (array)$respuesta->fetch_all(MYSQLI_ASSOC);//guardamos en un array la respuesta de la consulta
        }else{ 
            return false;
        }
    }








}