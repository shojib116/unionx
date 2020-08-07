<?php

class Course extends Dbh {

  protected function getCourses() {
    $sql = "select courses.id, courses.ccLocation, courses.courseName, universities.name, universities.lLocation from courses inner join universities on courses.universityId = universities.id order by rand();";

    $stmt = $this->connect()->query($sql);
    $results = $stmt->fetchAll();

    return $results;
  }

  protected function getCourseDetails($courseID) {
    $sql = "SELECT courses.courseName, courses.about as aboutCourse, courses.enrollmentCount, coursecategories.category, coursesubcategories.subCategory, instructors.name as instructor, instructors.ppLocation, instructors.designation, instructors.learnerCount, instructors.courseCount, universities.name as university, universities.about as aboutUniversity, universities.lLocation FROM courses INNER JOIN coursecategories ON courses.categoryId = coursecategories.id INNER JOIN coursesubcategories ON courses.subCategoryId = coursesubcategories.id INNER JOIN instructors ON courses.instructorId = instructors.id INNER JOIN universities ON courses.universityId = universities.id where courses.id = $courseID;";

    $stmt = $this->connect()->query($sql);
    $results = $stmt->fetch();

    return $results;
  }

  protected function getNumberOfWeeks($courseID) {
    $sql = "SELECT totalWeeks from courses WHERE id = $courseID;";

    $stmt = $this->connect()->query($sql);
    $results = $stmt->fetch();

    return $results;
  }

  protected function getCourseSyllabus($courseID, $weekNumber) {
    $sql = "SELECT moduleHeader, topics, assessments FROM coursesyllabus WHERE courseId = $courseID AND weekNumber = $weekNumber order by moduleNumber;";

    $stmt = $this->connect()->query($sql);
    $results = $stmt->fetchAll();

    return $results;
  }

  protected function registerNewEnrollment($userID, $courseID){
    $sql = "insert into enrollment(userId, courseId) VALUES($userID, $courseID);";

    $stmt = $this->connect()->query($sql);

  }

}
