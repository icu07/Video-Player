<?php
$current_video = $_GET["q"];
$video_directory = "../video/";
$n = false;
foreach (glob($video_directory."*".$current_video."*") as $filename) {
	$n = true;
	$current_video_file = $filename;
}
?>
<!DOCTYPE html> 
<html> 
<head>
	<title>DRAGON BALL Z</title>
	<link rel="icon" href="demo_icon.gif" type="image/gif" sizes="128x128">
	<link rel="stylesheet" href="video-player-style.css">
</head>
<body> 
<center>
<?php
if($n == true){
?>

<div>
	<h2>
	<?php 
		$main_title = str_replace($video_directory, "", $current_video_file);
		$main_title = str_replace(".mkv", "", $main_title);
		$main_title = str_replace(".mp4", "", $main_title);
		echo $main_title; 
	?>
	</h2>
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