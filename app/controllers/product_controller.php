<?php
require_once "./app/controllers/categorias_controller.php";

class ProductController
{
 
    private $views;
    public function __construct()
    {
        $this->views = "./app/views/products";
    }
    public function get_form()
    {
        // formulario de registro de producto
        $categorias = CategoriasController::get_active_categorias();
        require_once  $this->views  . "/form.php";
    }
}
