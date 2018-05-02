<?php
  include 'koneksi.php';

  $query = "SELECT type, talktime FROM `datahp`";
  $hasil = mysqli_query($koneksi, $query);

  while ($data = mysqli_fetch_assoc($hasil)) {
    $y = $data['talktime'];

    // miu TalkTime Sebentar
    if ($y <= 50) {
      $queryup = "update tabelmu set  mtalktime1 = 1.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 250) {
      $queryup = "update tabelmu set  mtalktime1 = 0.0 where type = '".$data['type']."'";
    }
    else {
      $yup = (250 - $y) / 200;
      $queryup = "update tabelmu set  mtalktime1 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup);

    // miu TalkTime Normal
    if ($y <= 50 or $y >= 1000) {
      $queryup1 = "update tabelmu set  mtalktime2 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y > 50 and $y <= 250) {
      $yup = ($y - 50) / 200;
      $queryup1 = "update tabelmu set  mtalktime2 = ".$yup." where type = '".$data['type']."'";
    }
    else {
      $yup = (1000 - $y) / 750;
      $queryup1 = "update tabelmu set  mtalktime2 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup1);

    // miu TalkTime Lama
    if ($y <= 250) {
      $queryup2 = "update tabelmu set  mtalktime3 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 1000) {
      $queryup2 = "update tabelmu set  mtalktime3 = 1.0 where type = '".$data['type']."''";
    }
    else {
      $yup = ($y - 250) / 750;
      $queryup2 = "update tabelmu set  mtalktime3 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup2);
  }

  if ($update) {
    header('location:index.php');
  }
  else
    echo "Request Failed !";
 ?>
