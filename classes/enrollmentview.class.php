<?php

class EnrollmentView extends Enrollment {

  public function checkEnrollment($userId, $courseId) {
    $result = $this->checkExistingEnrollment($userId, $courseId);

    if(boolval($result)) {
      return true;
    } else {
      return false;
    }
  }
}
