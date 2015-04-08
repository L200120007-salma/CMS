<?
require_once ('includes/templateFunction.php');
$tmpl = new templateFunction ();
$tmpl->setWidget('logoPosition', 'logo');
$tmpl->setWidget('sidebarPosition', 'hello');
$tmpl->setWidget('sidebarPosition', 'logo');
$tmpl ->show();

?>
