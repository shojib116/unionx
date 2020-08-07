<?php
	require 'header.php';
?>
<!--header ends-->

<?php
	$courseID = $_GET['courseID'];
	$courseObject = new CourseView();
	$courseDetails = $courseObject->returnCourseDetails($courseID);

	$courseName = $courseDetails['courseName'];
	$courseAbout = $courseDetails['aboutCourse'];
	$courseEnrollmentCount = $courseDetails['enrollmentCount'];
	$courseCategory = $courseDetails['category'];
	$courseSubCategory = $courseDetails['subCategory'];
	$courseInstructor = $courseDetails['instructor'];
	$instructorPP = $courseDetails['ppLocation'];
	$instructorDesignation = $courseDetails['designation'];
	$instructorLearnerCount = $courseDetails['learnerCount'];
	$instructorCourseCount = $courseDetails['courseCount'];
	$instructorUniversity = $courseDetails['university'];
	$universityBio = $courseDetails['aboutUniversity'];
	$universityLogo = $courseDetails['lLocation'];
?>

<div class="course-detail">
  <div class="course-header-area">
    <div class="general-course-info">
      <div class='category-subcategory'>
        <p><?php echo $courseCategory; ?> <i class="fa fa-chevron-right"></i> <?php echo $courseSubCategory; ?></p>
      </div>
      <div class="course-title">
        <h1><?php echo $courseName; ?></h1>
      </div>
      <div class="short-rating">
        <p>* * * * * ?.? ???? ratings</p>
      </div>
			<?php

				if (isset($_SESSION['unionxid'])) {
					$enrollcheck = new EnrollmentView();
					$result = $enrollcheck->checkEnrollment($id, $courseID);
				} else {
					$result = 0;
				}

				if ($result != 1) {
					echo "<div class='enroll-button'>";
		        echo "<button id='enrollbtn' type='button' name='enroll'><span>Enroll</span><br>for free</button>";
		      echo "</div>";
		      echo "<div class='number-of-enrollment'>";
		        echo "<p>".$courseEnrollmentCount." already enrolled</p>";
		      echo "</div>";
				} else {
					echo "<a href='course-page.php?courseID=".$courseID."'><button type='button' class='course-redirect-btn'>Go to course</button></a>";
				}

			?>
    </div>
		<div class="institution-info">
			<p>Offered by</p>
			<div class="institution-name-logo">
				<img src="<?php echo $universityLogo ?>" alt="">
				<h4><?php echo $instructorUniversity; ?></h4>
			</div>
			<div class="about-institution">
				<p><?php echo $universityBio; ?></p>
			</div>
		</div>
  </div>

	<div class="sticky-nav-banner">
		<div class="banner-logo-name">
			<img src="<?php echo $universityLogo ?>">
			<h4><?php echo $courseName; ?></h4>
	 </div>
		<div class='enroll-button'>
			<?php

				if (isset($_SESSION['unionxid'])) {
					$enrollcheck = new EnrollmentView();
					$result = $enrollcheck->checkEnrollment($id, $courseID);
				} else {
					$result = 0;
				}
				if ($result != 1) {
		        echo "<button id='enrollbtn' type='button' name='enroll'><span>Enroll</span><br>for free</button>";
				} else {
					echo "<a href='course-page.php?courseID=".$courseID."'><button type='button' class='course-redirect-btn'>Go to course</button></a>";
				}

			?>
		</div>
	</div>

  <div id="sticky-nav" class="course-navbar">
    <nav>
      <ul>
        <li><a id="a1" href="">About</a></li>
        <li><a id="a2" href="">Syllabus</a></li>
        <li><a id="a3" href="">Reviews</a></li>
        <li><a id="a4" href="">Enrollment Options</a></li>
        <li><a id="a5" href="">FAQs</a></li>
      </ul>
    </nav>
  </div>

  <div id="section1" class="course-about-section">
    <div class="about-text">
      <h3>About this course</h3>
      <p><?php echo $courseAbout; ?></p>
    </div>
    <div class="instructor-info">
      <p>Instructor(s)</p>
      <p>Instructor rating ?.?/5(???? ratings)</p>
      <a href="#">
        <div class="instructor-info-container">
          <div class="instructor-profile-picture">
            <img src="<?php echo $instructorPP; ?>">
          </div>
          <div class="instructor-text-info">
            <h5><?php echo $courseInstructor; ?></h5>
            <p><?php echo $instructorDesignation; ?></p>
            <p><?php echo $instructorUniversity; ?></p>
            <p><?php echo $instructorLearnerCount; ?> Learners</p>
            <p><?php echo $instructorCourseCount; ?> Course(s)</p>
          </div>
        </div>
      </a>
    </div>
  </div>

	<div id="section2" class="syllabus-section">
		<h5>Syllabus for this course. Content rating ??%</h5>
		<div class="week-wise-syllabus">
			<?php
				$courses = new CourseView();
				$courses->showCourseSyllabus($courseID);
			?>
		</div>
	</div>

	<div id="section3" class="rating-and-reviews" style="text-align:center;">
		<h1>Ratings and user reviews will be here</h1>
	</div>

	<div id="section4" class="enrollment-options" style="text-align:center;background-color:#e6e6e6;">
		<h1>Multiple enrollment options will be here</h1>
	</div>

	<div id="section5" class="faqs" style="text-align:center;">
		<h1>Frequently asked questions will be here</h1>
	</div>

	<div id='subscriptionChoice' class="modal">
		<form class="enroll-options-form" action="" method="post">
			<div class="enroll-options-header">
				<p>Choose enrollment option</p>
				<button id="closeEnrollModal" type="button" name="close"><i class="fa fa-times"></i></button>
			</div>
			<div class="enroll-options">
				<div class="choices">
					<input type="radio" name="enroll-option" value="freeEnroll" checked="checked">
					<label for="freeEnroll">Enroll without subscription.(No certificate)</label><br>
				</div>
				<input type="hidden" id="unionxid" value="<?php echo $id; ?>">
				<input type="hidden" id="courseid" value="<?php echo $courseID; ?>">
				<div class="choices">
					<input type="radio" name="enroll-option" value="subscribe">
					<label for="subscribe">Subscribe and unlcok assessments to get certificate.</label><br>
				</div>
				<input type="submit" name="enrollChoice" class="submit-enroll-choice" value="Enroll">
			</div>
		</form>
	</div>
</div>


<!-- footer area starts-->
<?php
  require 'footer.php';
?>
