<!-- upload.php -->
<!DOCTYPE html>
<html>
<head>
	<title>Video Upload</title>
</head>
<body>
	<h1>Video Upload</h1>
	</body>
</html>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="video" accept="video/*">
		<button type="submit">Upload Video</button>
	</form>

	<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["video"]["name"]);

	if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
	    echo "The file ". basename( $_FILES["video"]["name"]). " has been uploaded.";
	} else {
	    echo "Sorry, there was an error uploading your file.";
	}
	

