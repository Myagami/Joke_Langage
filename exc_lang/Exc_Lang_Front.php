<?php
error_reporting(0);
require_once("Exc_Lang.php") ;

/*$src = <<<SRC

はたて、えっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ﾂるちゃん、ちゅっちゅ
はたて、えっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ﾂるちゃん、ちゅっちゅ
はたて、えっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ﾂるちゃん、ちゅっちゅ
はたて、えっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ﾂるちゃん、ちゅっちゅ
はたて、えっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ﾂるちゃん、ちゅっちゅ
はたて、えっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ﾂるちゃん、ちゅっちゅ
はたて、えっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ｦっくえっく懿｣黷ﾂるちゃん、ちゅっちゅ
つるちゃん、ちゅっちゅ
SRC;*/

$src = <<<SRC
コスなう


つるちゃん、ちゅっちゅ
コス解除
SRC;

$Exc = new Exc_Lang($src) ;
$Exc->run() ;
?>