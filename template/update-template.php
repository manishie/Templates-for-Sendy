<?php include('../includes/functions.php');?>
<?php include('../includes/login/auth.php');?>
<?php
	$templateHtml = stripslashes($_POST['html']);
	if(trim($templateHtml)=='<html><head></head><body></body></html>') $templateHtml = '';
    $templateHtml = addslashes($templateHtml);
	$templateName = mysqli_real_escape_string($mysqli, $_POST['name']);
	$app = mysqli_real_escape_string($mysqli, $_POST['id']);
	$tid = mysqli_real_escape_string($mysqli, $_POST['tid']);
	
	$q = 'UPDATE templates SET name="'.$templateName.'", content="'.$templateHtml . '" WHERE uid="'. $app .'" AND id="'. $tid .'"';
	$r = mysqli_query($mysqli, $q);
	header("Location:".get_app_info('path').'/templates?i='.$app); 

?>