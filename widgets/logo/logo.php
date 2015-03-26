<?php
require_once('includes/cmsWidget.php');
class LogoWidget extends CmsWidget{

	function display()
	{
		?>
		<h1>judul logo</h1>
		<img src="bem.jpg">Logo</img>
		<?php
	}
}
?>