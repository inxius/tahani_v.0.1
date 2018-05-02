<?php
  include 'koneksi.php';

  $query = "SELECT type, messagelength FROM `datahp`";
  $hasil = mysqli_query($koneksi, $query);

  while ($data = mysqli_fetch_assoc($hasil)) {
    $y = $data['messagelength'];

    // miu MessageLength Pendek
    if ($y <= 100) {
      $queryup = "update tabelmu set  msmessagelength1 = 1.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 200) {
      $queryup = "update tabelmu set  mmessagelength1 = 0.0 where type = '".$data['type']."'";
    }
    else {
      $yup = (200 - $y) / 100;
      $queryup = "update tabelmu set  mmessagelength1 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup);

    // miu MessageLength Normal
    if ($y <= 100 or $y >= 750) {
      $queryup1 = "update tabelmu set  mmessagelength2 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y > 100 and $y <= 200) {
      $yup = ($y - 100) / 100;
      $queryup1 = "update tabelmu set  mmessagelength2 = ".$yup." where type = '".$data['type']."'";
    }
    else {
      $yup = (750 - $y) / 550;
      $queryup1 = "update tabelmu set  mmessagelength2 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup1);

    // miu MessageLength Panjang
    if ($y <= 200) {
      $queryup2 = "update tabelmu set  mmessagelength3 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 750) {
      $queryup2 = "update tabelmu set  mmessagelength3 = 1.0 where type = '".$data['type']."''";
    }
    else {
      $yup = ($y - 200) / 550;
      $queryup2 = "update tabelmu set  mmessagelength3 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup2);
  }

  if ($update) {
    header('location:index.php');
  }
  else
    echo "Request Failed !";
 ?>
