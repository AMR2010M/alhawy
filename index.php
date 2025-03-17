<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alhawy Philo</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="#">الصفحة الرئيسية</a></li>
				<li><a href="#">الدورات</a></li>
				<li><a href="http://localhost/video_upload/upload.php#">المعلمون</a></li>
				<li><a href="">التسجيل</a></li>
				<li><a href="signin.php">الدخول</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="videos">
			<h2>اولي ثانوي</h2>
			<div class="video-sessions">
				<?php
					// Display video sessions
					$sessions = array(
						array("session_number" => 1, "video_title" => "الدرس الول فلسفة البيئة"),
						array("session_number" => 2, "video_title" => "فيديو الدرس الثاني"),
						array("session_number" => 3, "video_title" => "فيديو الدرس الثالث"),
					);
					foreach ($sessions as $session) {
						echo "<div class='video-session'>";
						echo "<h3>الدرس رقم ".$session["session_number"]."</h3>";
						echo "<a href='session.php?session_number=".$session["session_number"]."'>فتح الدرس</a>";
						echo "<img style='width:'300px' src='x.avif'>";
						echo "<source src='uploads/video_".$session["session_number"].".mp4' type='video/mp4'>";
						
						echo "</div>";
					}
				?>
			</div>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 Alhawy Philo</p>
	</footer>
</body>
</html>


