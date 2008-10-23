<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<base href="{$template.base_href}">
	<title>Index Success!</title>
	<link rel='stylesheet' type="text/css" src='{$template.base_href}include/css/sitewide.css' />
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
				<p>Content</p>{$slots.content}
			</div>
		</div>
	</div>
</body>
</html>
