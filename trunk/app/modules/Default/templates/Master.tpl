<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<base href="{$ro->getBaseHref()}">
	<title>{$template.title}</title>
	<link rel='stylesheet' type="text/css" href='/include/css/sitewide.css' />
	<!-- Will change to an action when users are implemented -->
	<link rel='stylesheet' type="text/css" href='/include/css/user.css' />
</head>
<body>
	<div id='top'>
		<div id='header' class='border'>
			<h1>Header</h1>
		</div>
	</div>
	<div id='main'>
		<div id='left'>
			<div id='nav' class='border'>
				<ul>
					<li>Navigation</li>
					<li>Navigation</li>
					<li>Navigation</li>
				</ul>
			</div>		
		</div>
		<div id='main_content'>
			<div id='content' class='border'>
				<p>Content</p>{$template.inner}
			</div>
		</div>
	</div>
	<div id='bottom'>
	<div id='footer'>
		 <div class='left'><p>Left Foot</p></div>
		 <div class='right'><p>Right Foot</p></div>
	</div>
	</div>
</body>
</html>
