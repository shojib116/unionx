<?php

class EnrollmentControl extends Enrollment {

  public function enrollToCourse($userId, $courseID) {
    $this->newEnrollment($userId, $courseID);
  }
}
