<?php

class CourseView extends Course {

  public function showCourse() {
    $results = $this->getCourses();

    for ($i=0; $i < sizeof($results); $i++) {
      $courseID = $results[$i]['id'];
      $courseName = $results[$i]['courseName'];
      $courseCover = $results[$i]['ccLocation'];
      $universityName = $results[$i]['name'];
      $universityLogo = $results[$i]['lLocation'];

      echo'<div>';
      echo  '<a href="course-details.php?courseID='.$courseID.'">';
      echo    '<div class="course-gallery-content-container">';
      echo      '<div class="cover-image">';
      echo        '<img src="'.$courseCover.'">';
      echo      '</div>';
      echo      '<div class="offered-by">';
      echo        '<img src="'.$universityLogo.'">';
      echo      '</div>';
      echo      '<div class="course-intro-text">';
      echo        '<h3>'.$courseName.'</h3>';
      echo        '<p>'.$universityName.'</p>';
      echo      '</div>';
      echo    '</div>';
      echo  '</a>';
      echo'</div>';
    }
  }

  public function returnCourseDetails($courseID) {
    $results = $this->getCourseDetails($courseID);

    return $results;
  }

  public function showCourseSyllabus($courseID) {
    $result = $this->getNumberOfWeeks($courseID);

    $numWeek = $result['totalWeeks'];

    for ($i=1; $i <= $numWeek; $i++) {
      $results = $this->getCourseSyllabus($courseID, $i);
      echo'<div class="week">';
			echo  '<p>WEEK<br>'.$i.'</p>';
			echo'</div>';

      echo'<div class="content-for-week">';
      for ($j=0; $j < sizeof($results); $j++) {
        $moduleHeader = $results[$j]['moduleHeader'];
        $topics = explode(",", $results[$j]['topics']);
        $assessments = explode(",", $results[$j]['assessments']);

        echo '<p><b>';
        echo $moduleHeader;
        echo '</b></p>';
        echo '<ul>';
                for ($k=0; $k < sizeof($topics); $k++) {
                  echo '<li>';
                  echo $topics[$k];
                  echo '</li>';
                }
                for ($l=0; $l < sizeof($assessments); $l++) {
                  echo '<li>';
                  echo $assessments[$l];
                  echo '</li>';
                }
        echo '</ul>';
      }
      echo'</div>';
    }
  }
}
