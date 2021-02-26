<?php
require_once('koneksi.php');
$a = "SELECT `nim` FROM `hki` WHERE `pilih` ='1'";
$b = "SELECT `nim` FROM `hki` WHERE `pilih` ='2'";
$c = 274;
$hasilA = mysqli_query($koneksi, $a);
$hasilB = mysqli_query($koneksi, $b);
$finalA = mysqli_num_rows($hasilA);
$finalB = mysqli_num_rows($hasilB);
$golput = $c - ($finalA+$finalB);
$persenA = substr($finalA/469*100,0,4);
$persenB = substr($finalB/469*100,0,4);
$persenG = substr($golput/469*100,0,4);
$kirim = $finalA."@".$finalB."@".$golput."@".$persenA."@".$persenB."@".$persenG;
echo $kirim;
mysqli_close($koneksi);
?>