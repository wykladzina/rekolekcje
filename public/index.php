<?php
require '../vendor/autoload.php';
require '../rozne_przydatne_funkcje.php';

spl_autoload_register(function ($klasa) {
  @include "../kontrolery/$klasa.php";
  @include "../model/$klasa.php";
});

$smarty = new Smarty();
$smarty->setTemplateDir('../szablony');
$smarty->setCompileDir('../smarty/templates_c');

require '../serwis.php';
$serwis = new Serwis(pg_connect('user=rekolekcje dbname=rekolekcje password=koRelacJe'));

$kontroler = 'start';
if (isset($_REQUEST['kontroler'])) {
  $kontroler = $_REQUEST['kontroler'];
}
$smarty->assign('kontroler', $kontroler);
(new $kontroler())->dzialaj($smarty, $serwis);
?>
