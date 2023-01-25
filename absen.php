<?php

$con = mysqli_connect('localhost','root', '', 'enak');


$nama = $_POST ['Nama'];
$nis = $_POST ['Nis'];
$rombel = $_POST ['Rombel'];

$sql = "INSERT INTO `nikmat` (`nikmat_id`, `nikmat_nama`, `nikmat_nis`, `nikmat_rombel`) VALUES ('0', '$nama', '$nis', '$rombel')";
$rs = mysqli_query($con, $sql);

if ($rs) {
   echo "data berhasil diinput";
}

echo "<br>";

$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo "<a href='$url'>Kembali</a>";

?>