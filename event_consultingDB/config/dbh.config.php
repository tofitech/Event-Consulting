<?php

class Database {

  protected $db;
  public function db() {
    return $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  }

}

 ?>
