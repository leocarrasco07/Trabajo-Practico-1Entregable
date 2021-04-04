<?php

class Teatro {
    
    private  $nombreTeatro;
    
    private $direccion;
    
    private $Funciones;
    
    public function __construct($nombreTeatro, $direccion, $funcion) {
        $this->nombreTeatro = $nombreTeatro;
        $this->direccion = $direccion;
        $this->Funciones = $funcion;       
    }
    /**
     * @return mixed
     */
    public function getNombreTeatro()
    {
        return $this->nombreTeatro;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @return mixed
     */
    public function getFunciones()
    {
        return $this->Funciones;
    }

    /**
     * @param mixed $nombreTeatro
     */
    public function setNombreTeatro($nombreTeatro)
    {
        $this->nombreTeatro = $nombreTeatro;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @param mixed $Funciones
     */
    public function setFunciones($Funciones)
    {
        $this->Funciones = $Funciones;
    }

    public function cambiarNombreTeatro($nombreNuevo) {
        $this-> setNombreTeatro($nombreNuevo);
        
    }
    
    public function cambiarDireccTeatro($nuevaDirec) {
        $this->setDireccion($nuevaDirec);
    }
    
    public function cambiarNombreFuncion($nuevoNombreFun, $nombreACambiar) {
        $funcion = $this->getFunciones();
        $resp = null;
        for ($i = 0; $i < count($funcion); $i++) {
            if ($funcion[$i]["nombre"] == $nombreACambiar) {
                $funcion[$i]["nombre"] = $nuevoNombreFun;
                $this->setFunciones($funcion);
                $resp = true;
            }
            else{
                $resp = false; //no existe el nombre en el array funciones
            }
        }
        
        return $resp;
    }
    
    public function cambiarPrecioFun($nombreFun, $nuevoPrecio) {
        $funcion = $this->getFunciones();
        $resp = null;
        for ($i = 0; $i < count($funcion); $i++) {
            if ($funcion[$i]["nombre"] == $nombreFun) {
                $funcion[$i]["precio"] = $nuevoPrecio;
                $this->setFunciones($funcion);
                $resp = true;
            }
            else{
                $resp = false; //no existe el nombre en el array funciones
            }
        }
        
        return $resp;
    }
    
    
    public function __toString() {
        $resp = "nombreTeatro: ".$this->getNombreTeatro()."\n".
                "Direccion: ". $this->getDireccion()."\n".
                "Funciones : "."\n";
                
            for ($i = 0; $i < count($this->getFunciones()); $i++) {
                $resp= $resp .$i .": ". "Nombre : ". $this->getFunciones()[$i]["nombre"]."\n".
                                       "Precio : ". $this->getFunciones()[$i]["precio"]."\n";
            }
            return $resp;
    }
    
}