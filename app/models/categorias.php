<?php

require_once "./core/base.php";

class Categoria extends Crud
{
    public $id;
    public $nombre;
    public $estatus;
    const TABLE = 'categoria_table';
    private $pdo;
    public function __construct()
    {
        parent::__construct(self::TABLE);
        $this->pdo = parent::connect();
    }


    public function create()
    {
        return;
    }
    public function update()
    {
        return;
    }
}