<?php
require_once('includes/cmsApplication.php');
class DefaultApplication extends CmsApplication{
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
?>
