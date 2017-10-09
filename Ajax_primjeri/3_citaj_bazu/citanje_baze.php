<?php
require_once('konekcija.php');
$id=$_GET['id'];
$query="SELECT * FROM clanci WHERE id=$id";
$rezultat=$mysqli->query($query, MYSQLI_STORE_RESULT);
  if ($rezultat) {
     list($id, $slika, $naslov, $clanak)=$rezultat->fetch_row();
     $clanak="<h1>$naslov</h1><img src='slike/" . $slika. "'/><div>{$clanak}</div>";
  } else {
   $clanak= "Nije bilo moguće pročitati bazu";
  }
$mysqli->close();
echo $clanak;
?>
