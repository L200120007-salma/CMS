<!doctype html>
<html>
<head>
	<title>Ini template default dalam cms</title>
	<link type='text/css' rel="stylesheet" href='<?php echo $this->getCurrentTemplatePath(); ?>CSS/style.css'/>
</head>
<body>
	<div class="wrapper">
		<div class="header"><?php $this->widgetOutput('logoPosition'); ?></div>
		<div class="clear"></div>
		<div class="sidebar"><?php $this->widgetOutput('sidebarPosition'); ?></div>
		<div class="content"><?php echo $this->appOutput(); ?></div>
		<div class="clear"></div>
		<div class="footer">disini bagian footer</div>
	</div>
</body>
</html>