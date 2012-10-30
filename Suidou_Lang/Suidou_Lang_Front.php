<?php
//error_reporting(0);
require_once("Suidou_Lang_Core.php") ;

$src = <<<SRC
    大泉くんさぁ、今サイコロで出た目がさぁ
    ６のはかた号出ちゃったんだけど、僕たちはもう耐えられないんだよね。
    
    不幸行きなんだよね。
SRC;

$Exc = new Suidou_Lang($src) ;
$Exc->Travel() ;
?>