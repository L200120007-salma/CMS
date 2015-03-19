<?php
require_once('cmsBase.php');
class TemplateFunction extends CmsBase{
	//semua fungsi terkait dengan
	//pengaturan template ada di sini
	var $templateName = 'default';

	function show() 
	{
		require_once ($this->getCurrentTemplatePath(). 'template.php');
	}
	function getCurrentTemplatePath() 
	{
		//untuk mendapatkan nama folder tempat menyimpan template
		return 'templates/' . $this->templateName . '/';
	}
	function setTemplate ($templateName) {
		$this->templateName = $templateName;
	}
	//fungsi untuk menggabungkan TEMPLATE
	//dengan management CONTENT
	function appOutput()
	 {
		require_once ('includes/cmsApplication.php');
		$app = new CmsApplication();
		$app ->run();
	}
}
?>