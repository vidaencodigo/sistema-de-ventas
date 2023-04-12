<?php
require_once "./app/models/categorias.php";

class ProductController
{
    private $categorias;
    private $views;
    public function __construct()
    {
        $this->categorias=new Categoria;
        $this->views = "./app/views/products";
    }
    public function get_form()
    {
        $categorias = $this->get_categoria();
        require_once  $this->views  . "/form.php";
    }

    private function get_categoria(){
        // acceso a categorias por metodo privado
        $categorias = $this->categorias->get_all();
        return $categorias;
    }
}
