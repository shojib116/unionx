<?php

class Enrollment extends Dbh {

  protected function checkExistingEnrollment($userId, $courseId) {
    $sql = "select * from enrollment where userId = ? and courseId = ?;";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userId, $courseId]);

    $result = $stmt->fetch();
    return $result;
  }

  protected function newEnrollment($userId, $courseId) {
    $sql = "insert into enrollment(userId, courseId) values(?, ?);update instructors set learnerCount = learnerCount + 1 WHERE id = (SELECT courses.instructorId from courses WHERE courses.id = ?);update courses set enrollmentCount = enrollmentCount + 1 where id = ?;";

    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userId, $courseId, $courseId, $courseId]);
  }
}
