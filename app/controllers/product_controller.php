<?php


class ProductController
{
    private $views;
    public function __construct()
    {
        $this->views = "./app/views/products";
    }
    public function get_form()
    {
        require_once  $this->views  . "/form.php";
    }
}
