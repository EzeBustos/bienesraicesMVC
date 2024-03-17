<?php

namespace Model;

class Vendedor extends ActiveRecord{
    protected static $tabla = 'vendedores';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono'];


    public $id;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args=[])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }

    public function validar(){
        if (!$this->nombre) {
            self::$errores[] = "Debes incluir un nombre"; 
        }
        if (!$this->apellido) {
            self::$errores[] = "Debes incluir un apellido"; 
        }
        if (!$this->telefono) {
            self::$errores[] = "El telefono es requerido"; 
        }        

        if (!preg_match('/[0-9]{10}/', $this->telefono)) {
            self::$errores[] = "Formato telefónico no valido";
        }

        return self::$errores;
    }

}

