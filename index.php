<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<html>
	<?php
	if(empty($_GET["s"])) {
	echo 'Powered by obir.ninja - Bu sayfaya link eklemeden giremezsiniz.';
    exit;
    }
    $baase = base64_decode($_GET['s']);
	$kb = htmlspecialchars($baase);
	$ana = explode("/", $kb);
	$silmeli = str_replace("www.", "", $ana[2]);
	$damn = base64_encode($kb);
$engelle = array("grabify.link", "iplogger.org");

if (in_array($silmeli, $engelle)) {

    echo "Engellenen alan adı!";
    exit;
 }
	?>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">
	<title>Obir.Ninja - Url Kısaltıcı / Yönlendirici (SEO)</title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600');

      body {
        background: #ececec;
        font-family: 'Open Sans', sans-serif;
        font-size: 32px;
        line-height: 38px;
        font-weight:600;
        font-style: inherit;
      }
	</style>
	<script type="text/javascript">
	    var zaman = 5;
	    var geriSay = setInterval(function(){
		    zaman--;
		    document.getElementById("goster").textContent = zaman;
		    if(zaman <= 0){
				clearInterval(geriSay);
		        var e = "'e";
		        var link = atob("<?php echo $damn; ?>");
		        document.getElementById("button").innerHTML = '<a rel="nofollow" href="'+link+'"><button class="button" type="submit">LINK'+e+' GIT</button></a>';
		    }
		    if (zaman  == 0) {
		    	
		    }
	    },1000);

	</script>
<script>
	var accountID = 463313;
	var mobileRedirect = false;
    var desktopRedirect = false;
var shortener_url = "lnksafe.com";
function linktl_popad_show() {

    if (
            (isMobile() && typeof mobileRedirect === "undefined")
            || (isMobile() && typeof mobileRedirect !== "undefined" && mobileRedirect === true)
            || (!isMobile() && typeof desktopRedirect !== "undefined" && desktopRedirect === true)
        ) {
        window.location = 'https://'+shortener_url+'/links/popup-ad?uid=' + accountID;
    }else {

        var ref = encodeURIComponent(window.location.hostname);

        var link = 'https://' + shortener_url + '/links/popup-ad?uid=' + accountID;

        var check_cookie;
        if (ref != 'link.tl') {
            check_cookie = linktl_popad_cookie('popad_' + accountID);
        } else {
            check_cookie = null;
        }

        if ((check_cookie == null || accountID == 'test')) {
            var e = '<style type="text/css">'
                + '.mobsplOverlay' + linktl_prefix + '{display: block; position: absolute; z-index: 9998; top: 0; left: 0; bottom: 0; right: 0; width: 100%; background: rgba(0, 0, 0, 0)}'
                + '</style>'
                + '<a class="mobsplOverlay' + linktl_prefix + '" href="' + link + '" target="_blank">'
                + '</a>';

            document.body.innerHTML += e;

            var html1 = document.getElementsByClassName("mobsplOverlay" + linktl_prefix)[0];
            html1.onclick = function () {
                html1.remove();
            };

            var h = new Date();
            var i = h.getTime() + 1 * 3600 * 1000;
            h.setTime(i);
            if (ref != 'link.tl') {
                linktl_popad_cookie("pop_ad_" + accountID, '0*' + i, {
                    expires: h
                });
            }
        }
    }

}

function linktl_popad_reloadScrollBars() {
    document.documentElement.style.overflow = "auto", document.body.scroll = "yes"
}

function linktl_popad_unloadScrollBars() {
    document.documentElement.style.overflow = "hidden", document.body.scroll = "no"
}

function isMobile() {
    return !!(navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i));
}

linktl_popad_cookie = function(a, b, c) {
    if ("undefined" == typeof b) {
        var i = null;
        if (document.cookie && "" != document.cookie)
            for (var j = document.cookie.split(";"), k = 0; k < j.length; k++) {
                var l = j[k].trim();
                if (l.substring(0, a.length + 1) == a + "=") {
                    i = decodeURIComponent(l.substring(a.length + 1));
                    break
                }
            }
        return i
    }
    c = c || {}, null === b && (b = "", c.expires = -1);
    var d = "";
    if (c.expires && ("number" == typeof c.expires || c.expires.toUTCString)) {
        var e;
        e = new Date, e.setTime(c.expires), d = "; expires=" + e.toUTCString()
    }
    var f = c.path ? "; path=" + c.path : "",
        g = c.domain ? "; domain=" + c.domain : "",
        h = c.secure ? "; secure" : "";
    document.cookie = [a, "=", encodeURIComponent(b), d, f, g, h].join("")
}, window.onload = function() {
    if ("undefined" != typeof linktl_delay) var a = linktl_delay;
    else var a = 0;
    if (0 == a) linktl_popad_show();
    else var b = function() {
            0 == a && (clearInterval(c), linktl_popad_show()), a--
        },
        c = setInterval(b, 1e3)
};
var linktl_prefix = "linktl_popad_";
</script>
</head>
<body>
	<center>
<br>

			<p> Lütfen Bekleyiniz,</br> <font color="red"><span id="goster"> 5 </span> </font>Saniye sonra buton gelecek.</p><br>
			<div id="button"></div>



<br><br><div style="display: none !important;"><a href="https://obir.ninja">O BIR NINJA</a>

	</center>
</body>

</html>
