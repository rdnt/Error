<?php
function getLatestCommit() {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $master = "$root/.git/refs/heads/master";
    if (file_exists($master)) {
        return substr(file_get_contents($master), 0, 7);
    }
    else {
        return "unknown";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SHT - Error</title>
<meta name="robots" content="noindex">
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-title" content="SHT Error">
<meta name="application-name" content="SHT Error">
<meta name="msapplication-TileColor" content="#0a0b0c">
<meta name="msapplication-config" content="/images/browserconfig.xml?v=<?=getLatestCommit()?>">
<meta name="theme-color" content="#0a0b0c">
<link href="/css/style.min.css?v=<?=getLatestCommit()?>" type="text/css" rel="stylesheet" media="screen"/>
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png?v=<?=getLatestCommit()?>">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png?v=<?=getLatestCommit()?>">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png?v=<?=getLatestCommit()?>">
<link rel="manifest" href="/images/site.webmanifest?v=<?=getLatestCommit()?>">
<link rel="mask-icon" href="/images/safari-pinned-tab.svg?v=<?=getLatestCommit()?>" color="#0a0b0c">
<link rel="shortcut icon" href="/images/favicon.ico?v=<?=getLatestCommit()?>">
</head>
<body>
	<h1>OOPS</h1>
	<span>You're not supposed to be here.</span>
	<a href="https://www.sht.gr">SHT.GR</a>
</body>
</html>
