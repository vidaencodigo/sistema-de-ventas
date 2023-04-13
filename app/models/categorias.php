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
    public function get_all_active($estatus)
    {
        /**
         * lista las categorias activas 
         * unicamente. Diferente a get_all()
         * que lista todas las registradas.
         */
        try {
            $query = "SELECT * FROM " . self::TABLE . " WHERE estatus=?";
            $stm = $this->pdo->prepare($query);
            $stm->execute([$estatus]);
            return $stm->fetchall(PDO::FETCH_OBJ);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
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
