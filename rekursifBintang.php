<?php
function rekursifBaris($baris){
  rekursifKolom($baris);
  $baris--;
  if($baris > 0 ){
    echo "<br>";
    rekursifBaris($baris);
  }
}
function rekursifKolom($kolom){
  if($kolom > 0 ){
    echo $kolom;
    $kolom--;
    rekursifKolom($kolom);
  }
}
$jumlah = $_POST["jumlah"];
rekursifBaris($jumlah);
