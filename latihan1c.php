<!DOCTYPE html>
<html>
<head>
	<title>latihan1c</title>
	<style type="text/css">
		.kotak{
			margin: 5px;
			width: 50px;
			height: 50px;
			border: solid black 1px;
			text-align: center;
			line-height: 50px;
			float: left;

		}
		.clear{
			clear: both;

		}


	</style>
</head>
<body>

<?php 

$a = "A";
$b = "B";
$c = "C";

for ($i=1; $i <=10 ; $i++) {
	for ($j=1; $j <=$i ; $j++) { 
	 } 
	
}
 
 ?>

 <div class="kotak"></div>
 <!-- Kotak 1 -->
	<div class="kotak"><?php echo "$a";?></div>
	<div class="clear"></div>

<!-- Kotak 2 -->

	<div class="kotak"><?php echo "$a";?></div>
	<div class="kotak"><?php echo "$b";?></div>
	<div class="clear"></div>

<!-- Kotak 3 -->

	<div class="kotak"><?php echo "$a";?></div>
	<div class="kotak"><?php echo "$b";?></div>
	<div class="kotak"><?php echo "$c";?></div>
	<div class="clear"></div>


</body>
</html>