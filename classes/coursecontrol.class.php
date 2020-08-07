<?php

class CourseControl extends Course {

  public function newEnrollment($userID, $courseID) {
    $this->registerNewEnrollment($userID, $courseID);

  }
}
