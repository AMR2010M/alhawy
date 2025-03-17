<?php
$videos = scandir("uploads/");
foreach ($videos as $video) {
    if ($video != "." && $video != "..") {
        echo "<video width='320' height='240' controls>";
        echo "<source src='uploads/$video' type='video/mp4'>";
        echo "Your browser does not support the video tag.";
        echo "</video>";
    }
}
?>
