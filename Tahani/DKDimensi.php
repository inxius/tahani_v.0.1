<?php
include 'koneksi.php';

$query = "SELECT type, p, l, t FROM `datahp`";
$hasil = mysqli_query($koneksi, $query);

while ($data = mysqli_fetch_assoc($hasil)) {
  $dimensi = $data['p'] * $data['l'] * $data[t];
  $y = $dimensi / 1000;

  // miu Dimensi Kecil
  if ($y <= 13) {
    $queryup = "update tabelmu set  msize1 = 1.0 where type = '".$data['type']."'";
  }
  elseif ($y >= 112.5) {
    $queryup = "update tabelmu set  msize1 = 0.0 where type = '".$data['type']."'";
  }
  else {
    $yup = (112.5 - $y) / 99.5;
    $queryup = "update tabelmu set  msize1 = ".$yup." where type = '".$data['type']."'";
  }
  $update = mysqli_query($koneksi, $queryup);

  // miu Dimensi Normal
  if ($y <= 13 or $y >= 1600) {
    $queryup1 = "update tabelmu set  msize2 = 0.0 where type = '".$data['type']."'";
  }
  elseif ($y > 13 and $y <= 99.5) {
    $yup = ($y - 13) / 99.5;
    $queryup1 = "update tabelmu set  msize2 = ".$yup." where type = '".$data['type']."'";
  }
  else {
    $yup = (1600 - $y) / 1487.5;
    $queryup1 = "update tabelmu set  msize2 = ".$yup." where type = '".$data['type']."'";
  }
  $update = mysqli_query($koneksi, $queryup1);

  // miu Dimensi Besar
  if ($y <= 112.5) {
    $queryup2 = "update tabelmu set  msize3 = 0.0 where type = '".$data['type']."'";
  }
  elseif ($y >= 1600) {
    $queryup2 = "update tabelmu set  msize3 = 1.0 where type = '".$data['type']."''";
  }
  else {
    $yup = ($y - 112.5) / 1487.5;
    $queryup2 = "update tabelmu set  msize3 = ".$yup." where type = '".$data['type']."'";
  }
  $update = mysqli_query($koneksi, $queryup2);
}

if ($update) {
  header('location:index.php');
}
else
  echo "Request Failed !";
 ?>
