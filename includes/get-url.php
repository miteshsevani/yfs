<?php
	$url=$_SERVER['PHP_SELF'];
	$activeAbout = "";
	$activeProjects = "";
	$activeGallery = "";
	$activeBlog = "";
	$activeApply = "";
	$activeFAQ = "";
	$activeHome = "";

	switch($url) {
		case("/about/index.php"):
			$activeAbout = "class='current'";
			$title = " - About YFS";
			break;
		case("/india-partners/index.php"):
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
		case("/orientation/index.php"):
			$activeOrientation = "class='current'";
			$title = " - Orientation";
			break;			
		case("/faqs/index.php"):
			$activeFAQ = "class='current'";
			$title = " - FAQs";
			break;
		default:
			$activeHome = "class='current'";
			$title = " - Engage | Discover | Serve";
	}
?>