<?php
require_once('cmsBase.php');
//memastikan modul cmsBase hanya di load sekali
class CmsApplication extends CmsBase {
	// semua kode yang ada disini
	//dapat diakses melalui fungsi utama
	// dalam cms
	//management halaman web
	function run (){
		if (isset($_REQUEST['task']))  { // memastikan variable ini sudah di deklarasi atau ada isinya atau tidak
	//$_REQUEST[''] merupakan variable built in dalam php, untuk memastikan bahwa di request oleh user atau tidak 
	 	$task = $_REQUEST['task'];
	 	switch ($task){
	 			case 'addcontent':
	 				$this -> addcontent();
	 				echo '<hr><h1> fungsi ini menampilkan addcontent';
	 				break;
	 			case 'anyothertask':
	 				$this -> anyothertask();
	 				echo '<hr><h1> fungsi ini menampilkan anyothertask';
	 				break;
	 			default :
	 				$this -> viewcontent();
	 				echo '<hr><h1> fungsi ini menampilkan aviewcontent apasaja';
	 	}
	}else {
		$this -> viewcontent();
	}
		}

	function addcontent()
	{
		echo 'disini akan dibuat fungsi menambah konten';
	}
	function viewcontent () 
	{
		echo 'disini akan dibuat fungsi untuk menampilkan content';
	}
	function anyothertask ()
	{
		echo 'disini akan ditulis fungsi yang lainnya';
	}
}