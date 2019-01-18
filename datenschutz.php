<?php 
if( isset($_COOKIE['setCookieHinweis']) ) { 
	$showPopup = false;
} else {
	$showPopup = true;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cookie Popup - Datenschutz</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/custom.js"></script>
</head>

<body>

<?php if($showPopup) { ?>

	<div id="cookie-popup">
		<div class="hinweis">
			<p>Wir verwenden Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu.</p>
		</div> 
		<span class="more">
			<a href="/datenschutz.php">Details</a>
		</span>
		<button onclick='cookieOk()'>OK, ich bin einverstanden.</button>
	</div>

<?php  }; ?>

<div id="page-wrapper">
	<h1>Datenschutz</h1>
	<p>Hier kommt dein Datenschutztext hin</p>
	<p><a href="index.php">Zurück zur Startseite</a></p>
</div>

</body>
</html>