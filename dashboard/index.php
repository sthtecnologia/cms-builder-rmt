<?php 

/*=============================================
Depurar Errores
=============================================*/

define('DIR',__DIR__);
//echo '<pre>';print_r(DIR); echo '</pre>';
ini_set("display_errors", 1);
ini_set("log_erros", 1);
ini_set("error_log", DIR."/php_error_log");

/*=============================================
Requerimientos
=============================================*/

require_once "controllers/template.controller.php";

/*=============================================
Plantilla
=============================================*/

$index = new TemplateController();
$index -> index();

?>