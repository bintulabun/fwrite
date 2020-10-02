<?php

$konten = 'xxx';
$nama_file = 'nama_file';
$tipe = 'w';

$file = fopen($nama_file,$tipe);
fwrite($file,$konten);
fclose($file);

echo htmlspecialchars(file_get_contents($nama_file));

?>
