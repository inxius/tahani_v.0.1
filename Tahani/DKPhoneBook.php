<?php
  include 'koneksi.php';

  $query = "SELECT type, phonebook FROM `datahp`";
  $hasil = mysqli_query($koneksi, $query);

  while ($data = mysqli_fetch_assoc($hasil)) {
    $y = $data['phonebook'];

    // miu PhoneBook Sedikit
    if ($y <= 50) {
      $queryup = "update tabelmu set  mphonebook1 = 1.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 250) {
      $queryup = "update tabelmu set  mphonebook1 = 0.0 where type = '".$data['type']."'";
    }
    else {
      $yup = (250 - $y) / 200;
      $queryup = "update tabelmu set  mphonebook1 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup);

    // miu PhoneBook Sedang
    if ($y <= 50 or $y >= 1000) {
      $queryup1 = "update tabelmu set  mphonebook2 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y > 50 and $y <= 250) {
      $yup = ($y - 50) / 200;
      $queryup1 = "update tabelmu set  mphonebook2 = ".$yup." where type = '".$data['type']."'";
    }
    else {
      $yup = (1000 - $y) / 750;
      $queryup1 = "update tabelmu set  mphonebook2 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup1);

    // miu PhoneBook Banyak
    if ($y <= 250) {
      $queryup2 = "update tabelmu set  mphonebook3 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($y >= 1000) {
      $queryup2 = "update tabelmu set  mphonebook3 = 1.0 where type = '".$data['type']."''";
    }
    else {
      $yup = ($y - 250) / 750;
      $queryup2 = "update tabelmu set  mphonebook3 = ".$yup." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup2);
  }

  if ($update) {
    header('location:index.php');
  }
  else
    echo "Request Failed !";
 ?>
