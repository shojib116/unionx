<?php

class UserControl extends User {


  public function newUser($name, $email, $pwd) {
    $this->registerNewUser($name, $email, $pwd);
  }
}
