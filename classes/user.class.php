<?php

class User extends Dbh {

  protected function registerNewUser($name, $email, $pwd) {
    $sql = "INSERT INTO users(name, email, pwd) VALUES(?, ?, ?)";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name, $email, $pwd]);
  }

  protected function checkExistingUser($email) {
    $sql = "SELECT * FROM users where email= ?";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$email]);
    $result = $stmt->fetch();

    return $result;
  }

  protected function getUser($id) {
    $sql = "SELECT * FROM users where id= ?";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch();

    return $result;
  }
}
