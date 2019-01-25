<?php
$string   = "Selamat pagi dunia";
echo "String asli adalah $string <br>";
$balik    = strrev($string);
echo "Hasil dari strrev adalah $balik <br>";
echo "Hasil dari looping adalah : ";
for ($i=strlen($string)-1; $i >=0 ; $i--) {
  echo $string[$i];
}
echo "<br>";
echo "balik per kata <br>";
$pecah = explode(" ", $string);
for ($k=count($pecah)-1; $k >=0 ; $k--) {
  echo $pecah[$k]." ";
}
echo "<br>";



echo "<br>Using rekursif <br>";
$j = strlen($string);
balik($j);
function balik($j){
  Global $string;
  $j--;
  echo $string[$j];
  if($j >0)
   balik($j);
}


?>
