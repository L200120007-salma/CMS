<?
require_once ('includes/cmsApplication.php');

$app = new CmsApplication();
// bertanda $ berarti sebuah variable
if (isset($_REQUEST['task']))  { // memastikan variable ini sudah di deklarasi atau ada isinya atau tidak
//$_REQUEST[''] merupakan variable built in dalam php, untuk memastikan bahwa di request oleh user atau tidak 
 	$task = $_REQUEST['task'];
 	switch ($task){
 			case 'addcontent':
 				$app -> addcontent();
 				echo '<hr><h1> fungsi ini menampilkan addcontent';
 				break;
 			case 'anyothertask':
 				$app -> anyothertask();
 				echo '<hr><h1> fungsi ini menampilkan anyothertask';
 				break;
 			default :
 				$app -> viewcontent();
 				echo '<hr><h1> fungsi ini menampilkan aviewcontent apasaja';
 	}
}else {
	$app -> viewcontent();
}