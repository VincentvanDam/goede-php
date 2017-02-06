<?php
	date_default_timezone_set("Europe/Amsterdam");
    $time = date("H");
    $timezone = date("e");
	$message;

if ($time >= "24" && $time <"6") {
	$message = "<p>Goedenacht</p>";
	$image	= "backgrounds/night.png";
}else
	if ($time >= "6" && $time < "12") {
		$message = "<p>Goedemorgen</p>";
		$image = "backgrounds/morning.png";
	}else 
		if ($time >= "12" && $time < "18") {
			$message ="<p>Goedemiddag</p>";
			$image	="backgrounds/afternoon.png";
		}else
			if ($time >= "18" && $time <"24") {
				$message = "<p>Goedeavond</p>";
				$image	= "backgrounds/evening.png";
			}
	echo date("<p>h:i</p>");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Goede</title>
	<link rel="stylesheet" type="text/css" href="Goede.css">
	<meta charset="utf-8">
</head>
<body style="background-image: url(<?php echo $image; ?>); background-size: cover;">

 <p><?php echo $message; ?></p>

</body>
</html>
