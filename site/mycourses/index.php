<html>
<head>
<title>My Courses</title>
<link rel="stylesheet" href="mycourses.css">
</head>
<body>
<div>
	<div>
		<h2 id="headingMyCourses">My Courses</h2>
	</div>
	<?php
	for($i=0;$i<10;$i++){
		echo "<div id='coursesContent'><img><p id='subjectName'>Physics</p><p id='std'>11<sup>th</sup></p></div>";
		echo "<div id='coursesContent'><img><p id='subjectName'>Chemistry</p><p id='std'>11<sup>th</sup></p></div>";
		echo "<div id='coursesContent'><img><p id='subjectName'>Math</p><p id='std'>11<sup>th</sup></p></div>";
		echo "<div id='coursesContent'><img><p id='subjectName'>Biology</p><p id='std'>11<sup>th</sup></p></div>";
	}
	?>
</div>
</body>
</html>
