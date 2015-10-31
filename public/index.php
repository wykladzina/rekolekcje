<?php
require '../vendor/autoload.php';
require '../rozne_przydatne_funkcje.php';

spl_autoload_register(function ($klasa) {
  $klasa = str_replace('\\', '/', $klasa);
  @include "../$klasa.php";
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
$klasa_kontrolera = "\\kontrolery\\$kontroler";
(new $klasa_kontrolera())->dzialaj($smarty, $serwis);
?>
