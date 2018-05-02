<?php
  include 'koneksi.php';

  $query = "SELECT type, games FROM `datahp`";
  $hasil = mysqli_query($koneksi, $query);

  while ($data = mysqli_fetch_assoc($hasil)) {
    $y = $data['games'];
    // miu Games Sedikit
    if ($y <= 5 and $y >= 0) {
      $yup = (5 - $y) / 5;
      $queryup = "update tabelmu set  mgames1 = ".$yup." where type = '".$data['type']."'";
    }
    elseif ($y > 5) {
      $queryup = "update tabelmu set  mgames1 = 0.0 where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup);

    // miu Games Sedang
    if ($y >= 10) {
      $queryup1 = "update tabelmu set  mgames2 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 0 and $y <= 5) {
      $yup = $y / 5;
      $queryup1 = "update tabelmu set  mgames2 = ".$yup." where type = '".$data['type']."'";
    }
    else {
      $yup = (15 - $y) / 5;
      $queryup1 = "update tabelmu set  mgames2 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup1);

    // miu Games Banyak
    if ($y <= 5) {
      $queryup2 = "update tabelmu set  mgames3 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 10) {
      $queryup2 = "update tabelmu set  mgames3 = 1.0 where type = '".$data['type']."''";
    }
    else {
      $yup = ($y - 5) / 5;
      $queryup2 = "update tabelmu set  mgames3 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup2);
  }

  if ($update) {
    header('location:index.php');
  }
  else
    echo "Request Failed !";
 ?>
