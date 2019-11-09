<?php 
function base_url(){
$base_dir = __DIR__;
$doc_root  = ($_SERVER["DOCUMENT_ROOT"]);
$base_url = preg_replace("!^${doc_root}!", '', $base_dir);
return $base_url;
}
 ?>