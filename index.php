<?php
$current_video = $_GET["q"];
$n = false;
foreach (glob("*".$current_video."*") as $filename) {
	$n = true;
	$current_video_file = $filename;
}
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>DRAGON BALL Z</title>
  <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="128x128">
</head>
<style>
div{
	border: 3px;
	width: 848px;
	background-color: #66a3ff;
	border-radius: 10px;
	padding: 3px;
	margin-top: 10px;
	opacity: 0.8;
	margin-bottom: 10px;
}
a:link {
  color: black;
  text-decoration: none;
}
a:visited {
	color: black;
	background-color: transparent;
	text-decoration: none;
}
body {
	background-image: url("background4.jpg");
	font-family: Arial, Helvetica, sans-serif;
	background-repeat: no-repeat;
	background-size: cover;
	color: white;
	background-color: black;
	margin: 0px;
}
#controles{
	margin-top: 5px;
}
#boton{
	background-color: pink;
	width: 180px;
	padding: 5px;
	display: inline-block;
}
#boton:hover, #boton:active{
	background-color: blue;
	color: white;
}
</style>
<body> 
<center>
<?php
if($n == true){
?>

<div>
	<h2><?php echo $current_video_file; ?></h2>
</div>
<video width="80%" controls autoplay>
  	<source src="<?php echo $current_video_file; ?>" type="video/mp4">
  	<source src="mov_bbb.ogg" type="video/ogg">
  	Your browser does not support HTML video.
</video>
<?php } else { echo "Capitulo no encontrado"; } ?>
<div id="controles">
	<h1>
	<a href="">
		<div id="boton">
		Reload
		</div>
	</a> 
	<div style="display: inline-block; width: 440px;">
		Estas viendo el capitulo <?php echo $current_video; ?>
	</div>
	<div id="boton">
		<a href="?q=<?php echo $current_video+1; ?>">Next ( <?php echo $current_video+1; ?> )</a>
	</div>
	</h1>
</div>

</center>
</body> 
</html>