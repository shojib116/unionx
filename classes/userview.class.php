<?php

class UserView extends User {

  public function checkUser($email) {
    $results = $this->checkExistingUser($email);

    return $results;
  }

  public function getShortUserDetails($id) {
    $result = $this->getUser($id);

    return $result;
  }
}
