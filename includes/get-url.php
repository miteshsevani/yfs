<?php
	$url=$_SERVER['PHP_SELF'];
	$activeProjects = "";
	$activeGallery = "";
	$activeBlog = "";
	$activeApply = "";
	$activeFAQ = "";
	$activeHome = "";

	switch($url) {
		case("/our-projects/index.php"):
			$activeProjects = "class='current'";
			$title = " - Our Projects";
			break;
		case("/gallery/index.php"):
			$activeGallery = "class='current'";
			$title = " - Gallery";
			break;
		case("/blog/index.php"):
			$activeBlog = "class='current'";
			$title = " - Blog";
			break;
		case("/apply/index.php"):
			$activeApply = "class='current'";
			$title = " - Apply";
			break;
		case("/faqs/index.php"):
			$activeFAQ = "class='current'";
			$title = " - FAQs";
			break;
		default:
			$activeHome = "class='current'";
			$title = "";
	}
?>