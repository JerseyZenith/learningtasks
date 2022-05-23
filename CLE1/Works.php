<!DOCTYPE html>
<html>

<title>CLE</title>
<link rel="stylesheet" type="text/css" href="wstyle.css"/>
	<?php
echo '<nav class="navbar">';
echo '<ul class="link-group">';
echo '<li class="link"><a href="index.php">Home</a></li>';
echo '<li class="link"><a href="Works.php">Sample Works</a></li>';
echo '<li class="link active"><a href="Aboutme.php">About Me</a></li>';
echo '</ul>';
echo '</nav>';
?>
<body>
<div class="works-section">
	<h1 class=sampleworks-heading>MY SAMPLE WORKS</h1>
	<div class="works-container">
        <div class="works-card">
            <img src="work1.png" class="works-img" alt="">
            <div class="works-content">
                <h1 class="works-title">LT 2</h1>
                <div class="works-btn-grp">
                    <center><a href="LT2/Recipes.html"><button class="works-btn">See Project</button></a></center>
                </div>
            </div>
        </div>
		<div class="works-card">
            <img src="work2.png" class="works-img" alt="">
            <div class="works-content">
                <h1 class="works-title">LT 3</h1>
                <div class="works-btn-grp">
                    <center><a href="LT3/Index.html"><button class="works-btn">See Project</button></a></center>
                </div>
            </div>
        </div>
		<div class="works-card">
            <img src="work3.png" class="works-img" alt="">
            <div class="works-content">
                <h1 class="works-title">LT4</h1>
                <div class="works-btn-grp">
                    <center><a href="LT4/poem.html"><button class="works-btn">See Project</button></a></center>
                </div>
            </div>
        </div>
		<div class="works-card">
            <img src="work4.png" class="works-img" alt="">
            <div class="works-content">
                <h1 class="works-title">LT 5</h1>
                <div class="works-btn-grp">
                    <center><a href="LT5/index.html"><button class="works-btn">See Project</button></a></center>
                </div>
            </div>
        </div>
		<div class="works-card">
            <img src="work5.png" class="works-img" alt="">
            <div class="works-content">
                <h1 class="works-title">CLE 1</h1>
                <div class="works-btn-grp">
                    <center><a href="CLE1MT/Overpopulation.html"><button class="works-btn">See Project</button></a></center>
                </div>
            </div>
        </div>
    </div>
	<div class="lowbutton">
	 <center><button onclick="toTop()">Back to Top</button></center>
	</div>
</div>
</body>
<script src="java.js"></script>
</html>