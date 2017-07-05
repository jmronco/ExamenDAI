<?php

class Paciente{
    var $rutPaciente;
    var $nomPaciente;
    var $fechaNacimiento;
    var $sexo;
    var $direccion;
    var $telefono;
    
    function __construct($rutP=NULL,$nomP=NULL,$fechaN=NULL,$sexo=NULL,$dir=NULL,$fono=NULL) {
        $this->rutPaciente=$rutP;
        $this->nomPaciente=$nomP;
        $this->fechaNacimiento=$fechaN;
        $this->sexo=$sexo;
        $this->direccion=$dir;
        $this->telefono=$fono;
    }
    
    function RutPaciente(){
        return $this->rutPaciente;
    }
    
    function NombrePac(){
        return $this->nomPaciente;
    }
    
    function FechaNac(){
        return $this->fechaNacimiento;
    }
    
    function Sexo(){
        return $this->sexo;
    }
    
    function Direccion(){
        return $this->direccion;
    }
    
    function Telefono(){
        return $this->telefono;
    }
    
}
