<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cookie Popup</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/custom.js"></script>
</head>

<body>

<?php 
  $cookie_set = $_COOKIE["setCookieHinweis"];
  if ($cookie_set != "set") {
?>

<div id="cookie-popup">
  <span class="hinweis">Wir verwenden Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu.</span> 
  <span class="more-info"><a href="/datenschutz.html">Mehr Informationen</a></span>
  <button onclick='cookieOk()'>OK, ich bin einverstanden.</button>
</div>

<?php  }; ?>

</body>
</html>