<?php
	session_start();
	if (isset($_GET["session_number"])) {
		$session_number = $_GET["session_number"];
		// Display session video and homework
		echo "<h2>الدرس رقم ".$session_number."</h2>";
		echo "<video width='320' height='240' controls>";
		echo "<source src='uploads/video_".$session_number.".mp4' type='video/mp4'>";
		echo "Your browser does not support the video tag.";
		echo "</video>";
		echo "<h3>الواجب المنزلي</h3>";
		echo "<p>وصف الواجب المنزلي</p>";
	} else {
		echo "Invalid session number";
	}
?>
