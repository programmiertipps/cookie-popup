function cookieOk() {
  var now = new Date(); // Variable für aktuelles Datum
  var lifetime = now.getTime(); // Variable für Millisekunden seit 1970 bis aktuelles Datum
  var deleteCookie = lifetime + 2592000000; // Macht den Cookie 30 Tage gültig.
	
  now.setTime(deleteCookie);
  var enddate = now.toUTCString();
	
  document.cookie = "setCookieHinweis = set; path=/; secure; expires=" + enddate;
  document.getElementById("cookie-popup").style.display = "none";
}