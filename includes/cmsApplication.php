<?php
require_once('cmsBase.php');
//memastikan modul cmsBase hanya di load sekali
class CmsApplication extends CmsBase {
	// semua kode yang ada disini
	//dapat diakses melalui fungsi utama
	// dalam cms
	//management halaman web
	function run()
{
    $method=(isset($_REQUEST['task']))?$_REQUEST['task']:'display';
    $this->$method();
}


	function display()
{
    echo 'this is base display';
}

}
?>