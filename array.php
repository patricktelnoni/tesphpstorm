<?php

$mobil = array(
      "mobil" => "Avanza",
      "merek" => "Toyota",
      "tahun" => 2014
);
$multi = array(
          array(1,False => 2,3),//0
          array(4,5,6),//1
          array(7,8,9),//2
        );

// echo $multi[0][1]."<br>";
// foreach ($mobil as $m) {
//   echo "nilai $m <br>";
// }
// echo "<br>";
// for ($i=0; $i < count($larik); $i++) {
//   echo $larik[$i]."<br>";
// }
$larik = array(1, 2, 3, 4);
// print_r($larik);
// echo "<br>";
// array_pop($larik);
// print_r($larik);
// echo "<br>";
// array_shift($larik);
// print_r($larik);
// echo "<br>";
// array_push($larik, 5,6);
// print_r($larik);

echo "<br>";

$data        = array(
                array("nim"    => "12345",
                      "nama"   => "Dinda",
                      "prodi"  => "MI",
                      "ipk"    => "3.66"),
                array("nim"    => "4321",
                      "nama"   => "Andi",
                      "prodi"  => "TK",
                      "ipk"    => "3.86"),
                array("nim"    => "670116881",
                      "nama"   => "Pak Eko",
                      "prodi"  => "KA",
                      "ipk"    => "2.96"),
                array("nim"    => "6701174456",
                      "nama"   => "Susi",
                      "prodi"  => "IF",
                      "ipk"    => "3.94")
                    );
echo "<br>";


if(isset($_POST["nama"])){
  $nama   = $_POST["nama"];
  $nim    = $_POST["nim"];
  $ipk    = $_POST["ipk"];
  $prodi  = $_POST["prodi"];
  $newisi = array(
              "nim"    => $nim,
              "nama"   => $nama,
              "prodi"  => $prodi,
              "ipk"    => $ipk);
  array_push($data, $newisi);
}

echo "Latihan : tampilkan data-data ini dalam bentuk tabel. Cukup
tambahkan HTML <br>";
?>
<table border="1">
  <thead>
    <th>Nim</th>
    <th>Nama</th>
    <th>Prodi</th>
    <th>IPK</th>
  </thead>
  <tbody>
<?php
for($i=0;$i<count($data);$i++){
  echo "<tr>";
    echo "<td>".$data[$i]["nim"]."</td>";
    echo "<td>".$data[$i]["nama"]."</td>";
    echo "<td>".$data[$i]["prodi"]."</td>";
    echo "<td>".$data[$i]["ipk"]."</td>";
  echo "</tr>";
}?>
  </tbody>
</table>
<?php
echo "<a href='formarray.html'>Tambah data</a>";
$larik2 = array(
              "satu"  => 1,
              "dua"   => 2,
              3,
              "7"     => 4,
              5,
              "3"     => 6,
              7);
$larik3 = array(
            array("satu"  => 1,
                  "dua"   => 2,
                  3),
            "array2" => array("5" => 4,5,6),
            array(7,"delapan" => 8, "6"=>9)
          );



?>
