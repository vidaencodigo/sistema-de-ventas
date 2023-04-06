<?php

class Connection
{

  private $driver = 'mysql';
  private $host = 'localhost';
  private $user = 'developer';
  private $password = '';
  private $dbName = 'venta_db';
  private $dbPort = 3306;
  private $charset = "utf8";
  protected function connect()
  {
    try {
      $pdo = new PDO("{$this->driver}:host={$this->host};port={$this->dbPort};dbname={$this->dbName};charset={$this->charset}", $this->user, $this->password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (\PDOException $e) {
       //echo $e->getMessage();
       echo "No se pudo realizar la conexión";
       exit;
    }
  }
}