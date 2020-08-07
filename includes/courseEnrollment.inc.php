<?php
include_once 'class-autoload.inc.php';

if (isset($_POST['submit'])) {
  $userId = $_POST['userid'];
  $courseId = $_POST['courseid'];

  $enroll = new EnrollmentControl();
  $enroll->enrollToCourse($userId, $courseId);
}
