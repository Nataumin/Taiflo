<?php
$Dir = "1/01";
$Output = "compiled.md";
$Files = scandir($Dir);
$Open = fopen($Output, "w");
foreach($Files as $k => $v){
  if($v != "." AND $v != ".."){
    $Data = file_get_contents($Dir."/".$v);
    fwrite($Open, $Data);
  }
  unset($Data);
}
fclose($Open);
?>
