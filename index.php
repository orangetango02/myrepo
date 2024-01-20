<!-- Copyright (c) 2022 Asustor Inc. All rights reserved. -->
<?php
/* 'ASUSTOR Inc. All Rights Reserved.'
 * Here's the magic word for ADM to determine if this file is the default web page.
 * That is, this file may be modified without user's permission if it is the default web page.
 * Revision 5.
 */
?>
<?php
include("/usr/builtin/lib/php/asustor/nasconf_parser.php");
$nas_conf = nasconf_parser();

if (!$nas_conf) {echo('parse failed');}

$VENDOR = $nas_conf['Vendor'];
$WEBMAN = $nas_conf['Webman'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ready to Serve!</title>
<style>
:root {
	--border-color: #707070;
	--dark-bg-color: #404040;
	--dark-text-color: #FFFFFF;
	--dark-h1-color: #00C1D7;
	--dark-btn-bg-color: #767676;
	--dark-btn-border-color: #606060;
	--dark-btn-border-bottom-color: #757575;
	--light-bg-color: #FFFFFF;
	--light-text-color: #000000;
	--light-h1-color: #0077FF;
	--light-btn-bg-color: #FFFFFF;
	--light-btn-border-color: #E2E2E2;
	--light-btn-border-bottom-color: #b3b3b3;
}
html:lang(ja-JP) * {
	font-family: "メイリオ","ヒラギノ 角ゴシックProN W3","Roboto","Segoe UI","小塚ゴシック Pro H",KozGoPr6N-Heavy,KozGoPro-Heavy,"ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro","ＭＳ Ｐゴシック","MS PGothic",sans-serif !important;
}
body {
	font-family: 微軟正黑體,Arial,"Microsoft JhengHei",微软雅黑,"Microsoft YaHei","Lucida Sans Unicode",Helvetica,Verdana,Tahoma,sans-serif;
	font-size: 14px;
	margin: 0;
	overflow: hidden;
}
body[data-appearance="dark"] #hole_page {
	background-color: var(--dark-bg-color);
}
body[data-appearance="light"] #hole_page {
	background-color: var(--light-bg-color);
}
#hole_page {
	width: 100vw;
	height: 100vh;
	margin: 0;
	overflow: hidden;
	display: flex;
	justify-content: center;
	box-shadow: 0 0 0 1px var(--border-color) inset;
}
#header_container {
	margin-top: 80px;
	margin-bottom: 34px;
	text-align: center;
}
#header_container img {
	width: 410px;
	height: 128px;
}
#main_container {
	width: 800px;
}
.content{
	text-align: center;
}
body[data-appearance="dark"] #h1 {
	color: var(--dark-h1-color);
}
body[data-appearance="light"] #h1 {
	color: var(--light-h1-color);
}
#h1 {
	min-height: 68px;
	margin: 0;
	font-size: 32px;
	text-align: center;
}
body[data-appearance="dark"] #enabled, body[data-appearance="dark"] #info, body[data-appearance="dark"] #link {
	color: var(--dark-text-color);
}
body[data-appearance="light"] #enabled, body[data-appearance="light"] #info, body[data-appearance="light"] #link {
	color: var(--light-text-color);
}
#enabled, #info {
	min-height: 68px;
	text-align: center;
	margin-bottom: 32px;
}
#enabled {
	font-size: 24px;
	line-height: 32px;
}
body[data-appearance="dark"] #link {
	background-color: var(--dark-btn-bg-color);
	border-color: var(--dark-btn-border-color);
	border-bottom-color: var(--dark-btn-border-bottom-color);
}
body[data-appearance="light"] #link {
	background-color: var(--light-btn-bg-color);
	border-color: var(--light-btn-border-color);
	border-bottom-color: var(--light-btn-border-bottom-color);
}
#link {
	display: inline-block;
	width: 480px;
	height: 40px;
	line-height: 40px;
	text-decoration: none;
	border-radius: 5px;
	border-width: 1px;
	border-style: solid;
}
</style>
</head>

<body>
	<div id="hole_page">
  		<div id="main_container">
			<div id="header_container">
				<img src="data:image/png;base64,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"/>
			</div>
        	<div id="middle_container">
        		<div class="content">
            		<h1 id="h1"></h1>
					<p id="enabled"></p>
            	    <p id="info"></p>
            	    <p>
					</p>
            	</div>
    		</div>
    	</div>
    </div>
<script>
	var userLang = navigator.language || navigator.userLanguage;
	switch (userLang) {
		case 'zh':
		case 'zh-hant-tw':
        case 'zh-tw':
		case 'zh-TW':
            userLang = 'zh-TW';
            break;
		case 'zh-hans-cn':
        case 'zh-cn':
		case 'zh-CN':
            userLang = 'zh-CN';
            break;
		case 'cs':
			userLang = 'cs';
			break;
		case 'da':
			userLang = 'da';
			break;
		case 'de':
		case 'de-DE':
			userLang = 'de-DE';
			break;
		case 'en-US':
			userLang = 'en-US';
			break;
		case 'es-419':
		case 'es-latino':
			userLang = 'es-latino';
			break;
		case 'es':
		case 'es-ES':
			userLang = 'es';
			break;
		case 'fi':
			userLang = 'fi';
			break;
		case 'fr':
		case 'fr-FR':
			userLang = 'fr-FR';
			break;
		case 'hu':
			userLang = 'hu';
			break;
		case 'it':
		case 'it-IT':
			userLang = 'it-IT';
			break;
		case 'ja':
        case 'ja-jp':
		case 'ja-JP':
			userLang = 'ja-JP';
			break;
		case 'ko':
		case 'ko-KR':
			userLang = 'ko-KR';
			break;
		case 'nl':
		case 'nl-NL':
			userLang = 'nl-NL';
			break;
		case 'no':
			userLang = 'no';
			break;
		case 'pl':
			userLang = 'pl';
			break;
		case 'pt':
			userLang = 'pt';
			break;
		case 'ru':
		case 'ru-RU':
			userLang = 'ru-RU';
			break;
		case 'sv':
			userLang = 'sv';
			break;
		case 'th':
			userLang = 'th';
			break;
		case 'tr':
			userLang = 'tr';
			break;
		default:
			userLang = 'en-US';
	}
 	document.write('<script type="text/javascript" src="locale/' + userLang + '.js"><\/script>');
	document.documentElement.setAttribute('lang', userLang);
</script>
<script>
	var VENDOR = '<?= $VENDOR ?>';
	var WEBMAN = '<?= $WEBMAN ?>';

	var isDeviceDarkModeActived = function() {
        var matched = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
        if (matched) {
			document.body.setAttribute('data-appearance', 'dark');
        } else {
			document.body.setAttribute('data-appearance', 'light');
        }
    };

	var getLocale = function() {
		var me = this;
		INDEX_S = _INDEX_STRINGS;
		delete _INDEX_STRINGS;
	};

	var getString = function(c, i) {
		try {
			var s = INDEX_S[c][i];

			if (VENDOR !== 'ASUSTOR') {
				if (typeof s !== 'undefined') {
					s = s.replace(/\bASUSTOR\b/g, VENDOR);
					s = s.replace(/\bADM\b/g, WEBMAN);
				}
			}

			return (typeof s !== 'undefined') ? s : '';
		} catch(e) {
			return '';
		}
	};

	this.isDeviceDarkModeActived();

	this.getLocale();

	// Shortcut to get strings
	var _S = getString;

	var h1 = _S('COMMON', 'H1'),
		enabled = _S('COMMON', 'ENABLED'),
		info = _S('COMMON', 'INFO'),
		link = _S('COMMON', 'LINK');

	document.getElementById("h1").innerHTML = h1;
	document.getElementById("enabled").innerHTML = enabled;
	document.getElementById("info").innerHTML = info;
	document.getElementById("link").innerHTML = link;
</script>
</body>
</html>
