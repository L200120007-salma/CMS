<?php
require_once('cmsBase.php');
class TemplateFunction extends CmsBase{
	//semua fungsi terkait dengan
	//pengaturan template ada di sini
	var $templateName = 'default';
	var $widgetPosition = array();

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
	function appOutput(){
		$appname = (isset($_REQUEST['app']))?$_REQUEST['app']:'default';
		require_once ('applications/'.$appname.'/'.$appname.'.php');
    	$application = ucfirst($appname).'Application';
    	$app = new $application();
    	$app->run();
}

	function widgetOutput($position='default')// ketika di panggil tanpa parameter maka akan muncul seperti defaultnya
	{
		if(!empty($this->widgetPosition[$position]))
		{
			$widgets=$this->widgetPosition[$position];
			foreach ($widgets as $widgetName) 
			{
				require_once('widgets/'.$widgetName.'/'.$widgetName. '.php');
				$widgetclass=ucfirst($widgetName).'Widget';
				$widget = new $widgetclass();
				$widget->run($widgetName);
			}
		}
	}
	function setWidget ($position, $widgetName)
	{
		if(empty($this->widgetPosition[$position]))
		{
			$this->widgetPosition[$position]= array($widgetName);
			}
		else {
			array_push($this->widgetPosition[$position],$widgetName);
		}
	}
}
?>