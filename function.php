<?php
$lokasi = "Bikini bottom";
function doSomething($nama="Squidward", $hobby){
  Global $lokasi;
  echo "Hello world $nama di $lokasi $hobby<br>";
}
$nama = strlen($_POST['varsatu'])>0 ? $_POST['varsatu']:"varsatu tidak boleh kosong";
$nim  = strlen($_POST['vardua'])>0 ? $_POST['vardua']:"vardua tidak boleh kosong";

doSomething($nama,$nim);





echo "Print dari fungsi rekursif<br>";
function rekursif($i){
    echo "$i<br>";
    $i--;
    if($i > 0){
      rekursif($i);
    }
}
rekursif(5);


?>
