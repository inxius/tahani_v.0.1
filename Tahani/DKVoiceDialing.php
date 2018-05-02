<?php
  include 'koneksi.php';

  $query = "SELECT type, voicedialing FROM `datahp`";
  $hasil = mysqli_query($koneksi, $query);

  while ($data = mysqli_fetch_assoc($hasil)) {
    $y = $data['voicedialing'];
    // miu VoiceDialing Sedikit
    if ($y <= 10 and $y >= 0) {
      $yup = (10 - $y) / 10;
      $queryup = "update tabelmu set  mvoicedialing1 = ".$yup." where type = '".$data['type']."'";
    }
    // elseif ($y == 0) {
    //   $queryup = "update tabelmu set  mvoicedialing1 = 1.0 where type = '".$data['type']."'";
    // }
    elseif ($y > 10) {
      $queryup = "update tabelmu set  mvoicedialing1 = 0.0 where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup);

    // miu VoiceDialing Sedang
    if ($y >= 25) {
      $queryup1 = "update tabelmu set  mvoicedialing2 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 0 and $y <= 10) {
      $yup = $y / 10;
      $queryup1 = "update tabelmu set  mvoicedialing2 = ".$yup." where type = '".$data['type']."'";
    }
    else {
      $yup = (25 - $y) / 15;
      $queryup1 = "update tabelmu set  mvoicedialing2 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup1);

    // miu VoiceDialing Banyak
    if ($y <= 10) {
      $queryup2 = "update tabelmu set  mvoicedialing3 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 25) {
      $queryup2 = "update tabelmu set  mvoicedialing3 = 1.0 where type = '".$data['type']."''";
    }
    else {
      $yup = ($y - 10) / 15;
      $queryup2 = "update tabelmu set  mvoicedialing3 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup2);
  }

  if ($update) {
    header('location:index.php');
  }
  else
    echo "Request Failed !";
 ?>
