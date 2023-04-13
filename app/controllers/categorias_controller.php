<?php
require_once "./app/models/categorias.php";

class CategoriasController
{
    private $categorias;
    private $views;
    public function __construct()
    {
        $this->categorias=new Categoria;
        $this->views = "./app/views/";
    }

    static function get_active_categorias(){
        // acceso a categorias por metodo estatico
        $categorias = new Categoria();
        return $categorias->get_all_active();
    }
}
