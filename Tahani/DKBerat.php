<?php
  include 'koneksi.php';

  $query = "SELECT type, berat FROM `datahp`";
  $hasil = mysqli_query($koneksi, $query);

  while ($data = mysqli_fetch_assoc($hasil)) {
    $y = $data['berat'];

    // miu Berat Ringan
    if ($y <= 50) {
      $queryup = "update tabelmu set  mberat1 = 1.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 100) {
      $queryup = "update tabelmu set  mberat1 = 0.0 where type = '".$data['type']."'";
    }
    else {
      $yup = (100 - $y) / 50;
      $queryup = "update tabelmu set  mberat1 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup);

    // miu Berat Normal
    if ($y <= 50 or $y >= 250) {
      $queryup1 = "update tabelmu set  mberat2 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y > 50 and $y <= 100) {
      $yup = ($y - 50) / 50;
      $queryup1 = "update tabelmu set  mberat2 = ".$yup." where type = '".$data['type']."'";
    }
    else {
      $yup = (250 - $y) / 150;
      $queryup1 = "update tabelmu set  mberat2 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup1);

    // miu Berat Berat
    if ($y <= 100) {
      $queryup2 = "update tabelmu set  mberat3 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 250) {
      $queryup2 = "update tabelmu set  mberat3 = 1.0 where type = '".$data['type']."''";
    }
    else {
      $yup = ($y - 100) / 150;
      $queryup2 = "update tabelmu set  mberat3 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup2);
  }


  if ($update) {
    header('location:index.php');
  }
  else
    echo "Request Failed !";
 ?>
