<?php
	require 'header.php';
?>
<!--header ends-->

<?php
  $courseID = $_GET['courseID'];
  $course = new CourseView();
  $courseDetails = $course->returnCourseDetails($courseID);
?>
<div class="container">
	<div class="sidenav">
	  <div class="university-logo">
	    <a href=""><img src="img/offered-by.jpg" alt=""></a>
	  </div>
	  <div class="weeks-contents-extras">
	    <ul>
	      <a href=""><li id="week1">Week 1</li></a>
	      <div id="week1-contents" class="contents hidden">
	        <p>Module Header</p>
	        <ul>
	          <a href=""><li>Content 1</li></a>
	          <a href=""><li>Content 2</li></a>
	          <a href=""><li>Content 3</li></a>
	          <a href=""><li>Content 4</li></a>
	        </ul>
	      </div>
	      <a href=""><li id="week2">Week 2</li></a>
	      <div id="week2-contents" class="contents hidden">
	        <p>Module Header</p>
	        <ul>
	          <a href=""><li>Content 1 askldfsldkfjlksdfjlsadfkfsalf</li></a>
	          <a href=""><li>Content 2</li></a>
	          <a href=""><li>Content 3</li></a>
	          <a href=""><li>Content 4</li></a>
	        </ul>
	      </div>
	      <a href=""><li id="week3">Week 3</li></a>
	      <div id="week3-contents" class="contents hidden">
	        <p>Module Header</p>
	        <ul>
	          <a href=""><li>Content 1 askldfsldkfjlksdfjlsadfkfsalf</li></a>
	          <a href=""><li>Content 2</li></a>
	          <a href=""><li>Content 3</li></a>
	          <a href=""><li>Content 4</li></a>
	        </ul>
	      </div>
	      <a href=""><li id="week4">Week 4</li></a>
	      <div id="week4-contents" class="contents hidden">
	        <p>Module Header</p>
	        <ul>
	          <a href=""><li>Content 1 askldfsldkfjlksdfjlsadfkfsalf</li></a>
	          <a href=""><li>Content 2</li></a>
	          <a href=""><li>Content 3</li></a>
	          <a href=""><li>Content 4</li></a>
	        </ul>
	      </div>
	      <a href=""><li>Grades</li></a>
	      <a href=""><li>Discussion Forums</li></a>
	      <a href=""><li>Messages</li></a>
	      <a href=""><li>Resources</li></a>
	    </ul>
	  </div>
	</div>
	<div class="sidebar-toggler-container">
		<div class="sidebar-toggler">
			<button type="button" id="toggler-btn" name="button"><i class="fa fa-bars"></i></button>
		</div>
	</div>
	<div class="content-wall">

		<p>some text</p>
	</div>
</div>
