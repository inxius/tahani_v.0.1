<?php
  include 'koneksi.php';

  $query = "SELECT type, standby FROM `datahp`";
  $hasil = mysqli_query($koneksi, $query);

  while ($data = mysqli_fetch_assoc($hasil)) {
    $y = $data['standby'];

    // miu StandBy Sebentar
    if ($y <= 50) {
      $queryup = "update tabelmu set  mstandby1 = 1.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 200) {
      $queryup = "update tabelmu set  mstandby1 = 0.0 where type = '".$data['type']."'";
    }
    else {
      $yup = (200 - $y) / 150;
      $queryup = "update tabelmu set  mstandby1 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup);

    // miu StandBy Normal
    if ($y <= 50 or $y >= 500) {
      $queryup1 = "update tabelmu set  mstandby2 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y > 50 and $y <= 200) {
      $yup = ($y - 50) / 150;
      $queryup1 = "update tabelmu set  mstandby2 = ".$yup." where type = '".$data['type']."'";
    }
    else {
      $yup = (500 - $y) / 300;
      $queryup1 = "update tabelmu set  mstandby2 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup1);

    // miu Berat Berat
    if ($y <= 200) {
      $queryup2 = "update tabelmu set  mstandby3 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 500) {
      $queryup2 = "update tabelmu set  mstandby3 = 1.0 where type = '".$data['type']."''";
    }
    else {
      $yup = ($y - 200) / 300;
      $queryup2 = "update tabelmu set  mstandby3 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup2);
  }

  if ($update) {
    header('location:index.php');
  }
  else
    echo "Request Failed !";
 ?>
