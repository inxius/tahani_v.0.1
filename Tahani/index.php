<?php
  include 'koneksi.php';

  $query = "select * from jenishp";
	$hasil = mysqli_query($koneksi, $query);
 ?>

<h4>Data Jenis HP</h4>
<table border="1">
  <tr>
  <td>kode</td>
  <td>Merk</td>
  </tr>
  <?php while ($data = mysqli_fetch_assoc($hasil)) { ?>
  <tr>
    <td>
      <?php echo $data['kode']; ?>
    </td>
    <td>
      <?php echo $data['namahp']; ?>
    </td>
  </tr>
  <?php } ?>
</table>

<?php
  $query1 = "select * from datahp";
  $hasil1 = mysqli_query($koneksi, $query1);
 ?>

<h4>Tabel Data HP</h4>
<table border="1">
  <tr>
  <td>kode</td>
  <td>Type</td>
  <td>Harga</td>
  <td>P</td>
  <td>L</td>
  <td>T</td>
  <td>Berat</td>
  <td>StandBy</td>
  <td>TalkTime</td>
  <td>PhoneBook</td>
  <td>Voice Dialing</td>
  <td>Games</td>
  <td>Message Length</td>
  <td>WAP</td>
  <td>GPRS</td>
  <td>Infrared</td>
  <td>MMS</td>
  <td>PolyPhonic</td>
  </tr>
  <?php while ($data = mysqli_fetch_assoc($hasil1)) { ?>
  <tr>
    <td>
      <?php echo $data['kode']; ?>
    </td>
    <td>
      <?php echo $data['type']; ?>
    </td>
    <td>
      <?php echo $data['harga']; ?>
    </td>
    <td>
      <?php echo $data['p']; ?>
    </td>
    <td>
      <?php echo $data['l']; ?>
    </td>
    <td>
      <?php echo $data['t']; ?>
    </td>
    <td>
      <?php echo $data['berat']; ?>
    </td>
    <td>
      <?php echo $data['standby']; ?>
    </td>
    <td>
      <?php echo $data['talktime']; ?>
    </td>
    <td>
      <?php echo $data['phonebook']; ?>
    </td>
    <td>
      <?php echo $data['voicedialing']; ?>
    </td>
    <td>
      <?php echo $data['games']; ?>
    </td>
    <td>
      <?php echo $data['messagelength']; ?>
    </td>
    <td>
      <?php echo $data['wap']; ?>
    </td>
    <td>
      <?php echo $data['gprs']; ?>
    </td>
    <td>
      <?php echo $data['infrared']; ?>
    </td>
    <td>
      <?php echo $data['mms']; ?>
    </td>
    <td>
      <?php echo $data['polyphonic']; ?>
    </td>
  </tr>
  <?php } ?>
</table>

<?php
  $query2 = "select * from tabelmu";
  $hasil2 = mysqli_query($koneksi, $query2);
 ?>

<h4>Tabel Data HP</h4>
<table border="1">
  <tr>
  <td>Type</td>
  <td>MHarga1</td>
  <td>MHarga2</td>
  <td>MHarga3</td>
  <td>MSize1</td>
  <td>MSize2</td>
  <td>MSize3</td>
  <td>MBerat1</td>
  <td>MBerat2</td>
  <td>MBerat3</td>
  <td>MStandBy1</td>
  <td>MStandBy2</td>
  <td>MStandBy3</td>
  <td>MTalkTime1</td>
  <td>MTalkTime2</td>
  <td>MTalkTime3</td>
  <td>MPhoneBook1</td>
  <td>MPhoneBook2</td>
  <td>MPhoneBook3</td>
  <td>MVoiceDialing1</td>
  <td>MVoiceDialing2</td>
  <td>MVoiceDialing3</td>
  <td>MGames1</td>
  <td>MGames2</td>
  <td>MGames3</td>
  <td>MMessageLength1</td>
  <td>MMessageLength2</td>
  <td>MMessageLength3</td>
  <td>MHarga</td>
  <td>MSize</td>
  <td>MBerat</td>
  <td>MStandBy</td>
  <td>MTalkTime</td>
  <td>MPhoneBook</td>
  <td>MVoiceDialing</td>
  <td>MGames</td>
  <td>MMessageLength</td>
  <td>MWAP</td>
  <td>MGPRS</td>
  <td>MInfrared</td>
  <td>MMMS</td>
  <td>MPolyPhonic</td>
  <td>Mu</td>
  </tr>
  <?php while ($data = mysqli_fetch_assoc($hasil2)) { ?>
  <tr>
    <td>
      <?php echo $data['type']; ?>
    </td>
    <td>
      <?php echo $data['mharga1']; ?>
    </td>
    <td>
      <?php echo $data['mharga2']; ?>
    </td>
    <td>
      <?php echo $data['mharga3']; ?>
    </td>
    <td>
      <?php echo $data['msize1']; ?>
    </td>
    <td>
      <?php echo $data['msize2']; ?>
    </td>
    <td>
      <?php echo $data['msize3']; ?>
    </td>
    <td>
      <?php echo $data['mberat1']; ?>
    </td>
    <td>
      <?php echo $data['mberat2']; ?>
    </td>
    <td>
      <?php echo $data['mberat3']; ?>
    </td>
    <td>
      <?php echo $data['mstandby1']; ?>
    </td>
    <td>
      <?php echo $data['mstandby2']; ?>
    </td>
    <td>
      <?php echo $data['mstandby3']; ?>
    </td>
    <td>
      <?php echo $data['mtalktime1']; ?>
    </td>
    <td>
      <?php echo $data['mtalktime2']; ?>
    </td>
    <td>
      <?php echo $data['mtalktime3']; ?>
    </td>
    <td>
      <?php echo $data['mphonebook1']; ?>
    </td>
    <td>
      <?php echo $data['mphonebook2']; ?>
    </td>
    <td>
      <?php echo $data['mphonebook3']; ?>
    </td>
    <td>
      <?php echo $data['mvoicedialing1']; ?>
    </td>
    <td>
      <?php echo $data['mvoicedialing2']; ?>
    </td>
    <td>
      <?php echo $data['mvoicedialing3']; ?>
    </td>
    <td>
      <?php echo $data['mgames1']; ?>
    </td>
    <td>
      <?php echo $data['mgames2']; ?>
    </td>
    <td>
      <?php echo $data['mgames3']; ?>
    </td>
    <td>
      <?php echo $data['mmessagelength1']; ?>
    </td>
    <td>
      <?php echo $data['mmessagelength2']; ?>
    </td>
    <td>
      <?php echo $data['mmessagelength3']; ?>
    </td>
    <td>
      <?php echo $data['mharga']; ?>
    </td>
    <td>
      <?php echo $data['msize']; ?>
    </td>
    <td>
      <?php echo $data['mberat']; ?>
    </td>
    <td>
      <?php echo $data['mstandby']; ?>
    </td>
    <td>
      <?php echo $data['mtalktime']; ?>
    </td>
    <td>
      <?php echo $data['mphonebook']; ?>
    </td>
    <td>
      <?php echo $data['mvoicedialing']; ?>
    </td>
    <td>
      <?php echo $data['mgames']; ?>
    </td>
    <td>
      <?php echo $data['mmessagelength']; ?>
    </td>
    <td>
      <?php echo $data['mwap']; ?>
    </td>
    <td>
      <?php echo $data['mgprs']; ?>
    </td>
    <td>
      <?php echo $data['minfrared']; ?>
    </td>
    <td>
      <?php echo $data['mmms']; ?>
    </td>
    <td>
      <?php echo $data['mpolyphonic']; ?>
    </td>
    <td>
      <?php echo $data['mu']; ?>
    </td>
  </tr>
  <?php } ?>
</table>

<a href="DKHarga.php">Proses Derajat Keanggotaan Harga</a><br>
<br>
<a href="DKDimensi.php">Proses Derajat Keanggotaan Dimensi</a><br>
<br>
<a href="DKBerat.php">Proses Derajat Keanggotaan Berat</a><br>
<br>
<a href="DKStandBy.php">Proses Derajat Keanggotaan StandBy</a><br>
<br>
<a href="DKTalkTime.php">Proses Derajat Keanggotaan TalkTime</a><br>
<br>
<a href="DKPhoneBook.php">Proses Derajat Keanggotaan PhoneBook</a><br>
<br>
<a href="DKVoiceDialing.php">Proses Derajat Keanggotaan VoiceDialing</a><br>
<br>
<a href="DKGames.php">Proses Derajat Keanggotaan Games</a><br>
<br>
<a href="DKMessageLenght.php">Proses Derajat Keanggotaan Message Length</a><br>
<br>
<a href="DKReset.php">Proses Reset Derajat Keanggotaan</a><br>
