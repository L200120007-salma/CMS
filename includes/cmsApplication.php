<?php
require_once('cmsBase.php');
//memastikan modul cmsBase hanya di load sekali
class CmsApplication extends CmsBase {
	// semua kode yang ada disini
	//dapat diakses melalui fungsi utama
	// dalam cms
	//management halaman web
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