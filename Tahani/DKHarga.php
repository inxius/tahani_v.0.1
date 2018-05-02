<?php
  include 'koneksi.php';

  $query = "SELECT type, harga FROM `datahp`";
	$hasil = mysqli_query($koneksi, $query);

  while ($data = mysqli_fetch_assoc($hasil)) {
    // miu Harga Murah
    if ($data['harga'] <= 50) {
      $queryup = "update tabelmu set  mharga1 = 1.0 where type = '".$data['type']."'";
    }
    elseif ($data['harga'] >= 150) {
      $queryup = "update tabelmu set  mharga1 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($data['harga'] > 50 and $data['harga'] < 150) {
      $hrg = (150 - $data['harga']) / 100;
      $queryup = "update tabelmu set  mharga1 = ".$hrg." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup);

    // miu Harga Normal
    if ($data['harga'] <= 50 or $data['harga'] >= 500) {
      $queryup1 = "update tabelmu set  mharga2 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($data['harga'] > 50 and $data['harga'] <= 150) {
      $hrg = ($data['harga'] - 50) / 100;
      $queryup1 = "update tabelmu set  mharga2 = ".$hrg." where type = '".$data['type']."'";
    }
    elseif ($data['harga'] > 150 and $data['harga'] < 500) {
      $hrg = (500 - $data['harga']) / 350;
      $queryup1 = "update tabelmu set  mharga2 = ".$hrg." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup1);

    // miu Harga Mahal
    if ($data['harga'] <= 150) {
      $queryup2 = "update tabelmu set  mharga3 = 0.0 where type = '".$data['type']."'";
    }
    elseif ($data['harga'] > 500) {
      $queryup2 = "update tabelmu set  mharga3 = 1.0 where type = '".$data['type']."''";
    }
    elseif ($data['harga'] > 150 and $data['harga'] < 500) {
      $hrg = ($data['harga'] - 150) / 350;
      $queryup2 = "update tabelmu set  mharga3 = ".$hrg." where type = '".$data['type']."'";
    }
    $update = mysqli_query($koneksi, $queryup2);
  }

  if ($update) {
		header('location:index.php');
	}
  else
		echo "Request Failed !";
 ?>
