<?php

class Dbh {
  private $hostName = "localhost";
  private $userName = "root";
  private $pwd = "";
  private $dbName = "unionx_test";

  protected function connect() {
    $dsn = "mysql:host=" . $this->hostName . ";dbname=" . $this->dbName;

    $pdo = new PDO($dsn, $this->userName, $this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    return $pdo;
  }
}
