<?php
error_reporting(0);
require_once("Suidou_Lang.php") ;

$src = <<<SRC
    大泉大泉大泉大泉大泉大泉大泉大泉大泉大泉大泉くん、原付で札幌帰ろうか
SRC;

$Exc = new Suidou_Lang($src) ;
$Exc->Travel() ;
?>