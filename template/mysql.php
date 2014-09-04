<?php
if(isset($_POST['template'])) {
	$name = mysqli_real_escape_string($mysqli, $_POST['template']);
	$uid = mysqli_real_escape_string($mysqli, $_GET['i']);
	$q = 'SELECT * FROM templates where name ="'.$name.'"&& uid = "'.$uid.'"';
	$r = mysqli_query($mysqli, $q);
	if(mysqli_num_rows($r) > 0) {
		$t = 1;
		while($i = mysqli_fetch_array($r)) {
			$content = $i['content'];
		}
	}
}