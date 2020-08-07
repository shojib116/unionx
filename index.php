<?php
	require 'header.php';
?>

	<!--header area ends-->

	<main>

		<?php
		if (!isset($_SESSION['unionxid'])) {

			echo "<div class='site-intro'>
				<div class='intro-texts-area'>
					<div class='intro-texts-container'>
						<h1>Learn anything in your native language</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut urna libero, volutpat non orci et, hendrerit imperdiet nisl. Nam nibh erat, mattis a mauris auctor, fermentum cursus ligula. Curabitur porta dui eu massa tempor sollicitudin. Nam id fringilla odio. Sed pellentesque pellentesque ex. Nam ut ultrices velit, in interdum nulla. Aenean ac arcu mi.</p>
						<button onclick='document.getElementById(&quot;id02&quot;).style.display=&quot;block&quot;' class='signupbutton'>Join for free</button>
					</div>
				</div>
			</div>";
		} else {
			echo "<div class='login-intro'>";
				echo "Welcome back, ".$name;
			echo "</div>";
		}
		?>
<h1 style="text-align:center;margin:50px auto; padding:0;">Browse from our popular courses</h1>
		<div class="browse-section">

			<div class="slider course-gallery">
					<?php
						$courses = new CourseView();
						$courses->showCourse();
					?>
			</div>
		</div>
	</main>


	<!-- footer area starts-->
	<?php
		require 'footer.php';
	?>
