function cookieOk() {
  var now = new Date(); // Aktuelles Datum
  var lifetime = now.getTime(); // Millisekunden seit 1970 bis heute
  var deleteCookie = lifetime + 2592000000; // Cookie wird nach 30 Tagen automatisch gelöscht
	
  now.setTime(deleteCookie);
  var enddate = now.toUTCString();
	
  document.cookie = "setCookieHinweis = set; path=/; secure; expires=" + enddate;
  document.getElementById("cookie-popup").classList.add("hidden");
}