<?php
  include 'koneksi.php';

  $query = "SELECT type FROM `datahp`";
  $hasil = mysqli_query($koneksi, $query);

  while ($data = mysqli_fetch_assoc($hasil)) {
    $queryup = "UPDATE `tabelmu` SET `mharga1`= null,`mharga2`= null,`mharga3`= null,`msize1`= null,`msize2`= null,`msize3`= null,`mberat1`= null,`mberat2`= null,`mberat3`= null,`mstandby1`= null,`mstandby2`= null,`mstandby3`= null,`mtalktime1`= null,`mtalktime2`= null,`mtalktime3`= null,`mphonebook1`= null,`mphonebook2`= null,`mphonebook3`= null,`mvoicedialing1`= null,`mvoicedialing2`= null,`mvoicedialing3`= null,`mgames1`= null,`mgames2`= null,`mgames3`= null,`mmessagelength1`= null,`mmessagelength2`= null,`mmessagelength3`= null,`mharga`= null,`msize`= null,`mberat`= null,`mstandby`= null,`mtalktime`= null,`mphonebook`= null,`mvoicedialing`= null,`mgames`= null,`mmessagelength`= null,`mwap`= null,`mgprs`= null,`minfrared`= null,`mmms`= null,`mpolyphonic`= null,`mu`= null WHERE type = '".$data['type']."'";

    $update = mysqli_query($koneksi, $queryup);
  }

  if ($update) {
    header('location:index.php');
  }
  else
    echo "Request Failed !";
 ?>
