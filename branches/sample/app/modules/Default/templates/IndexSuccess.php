<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<base href="<?php echo $this->getContext()->getRouting()->getBaseHref(); ?>">
	<title>Index Success!</title>
	<style type="text/css">
html {
	margin: 0;
	padding: 0;
}

body {
	width: 100%;
	height: 100%;
	margin: 0;
	padding: 0;
	background-color: #FFF;
	font-family: 'Trebuchet MS', Verdana, Tahoma, Arial, Helvetica, sans-serif;
	font-size: 9pt;
	color: #222;
}

a, a:link, a:visited, a:active, a:hover {
/*	color: #AAF; */
}

div {
}

h1 {
	color: #666;
}

/* Layout */
div#top {
	padding: 0.3em;
}
div#header {
	height: 50px;
	border: 1px solid #CCC;
}
div#main {
	padding: 0.3em;
	padding-top: 0;
}
div#main_content {
	padding-left: 0.4em;
	margin-left: 200px;
}
div#content {
	border: 1px solid #CCC;
}
div#left {
	float: left;
}
div#nav {
	width: 200px;
	border: 1px solid #CCC;
	float: left;
}

	</style>
</head>
<body>
	<div id='top'>
		<div id='header'>
			Header
		</div>
	</div>
	<div id='main'>
		<div id='left'>
			<div id='nav'>
				Navigation
			</div>		
		</div>
		<div id='main_content'>
			<div id='content'>
				<p>Content</p>
			</div>
		</div>
	</div>
</body>
</html>