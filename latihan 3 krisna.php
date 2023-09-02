<?php

$besarPinjaman = 1000000; 
$besarBunga = 10; 
$lamaAngsuran = 5; 


$besarBungaRp = ($besarBunga / 100) * $besarPinjaman;


$totalPinjaman = $besarPinjaman + $besarBungaRp;


$besarAngsuran = $totalPinjaman / $lamaAngsuran;


echo "TOKO PEGADAIAN SYARIAH" . "<br>";
echo "Jl. Keadilan No. 16" . "<br>";
echo "Telp. 72353459" . "<br>";
echo "----------------------------------------" . "<br>";
echo "Besar Pinjaman: Rp " . number_format($besarPinjaman, 0, ',', '.') . "<br>";
echo "Besar Bunga ($besarBunga%): Rp " . number_format($besarBungaRp, 0, ',', '.') . "<br>";
echo "Total Pinjaman: Rp " . number_format($totalPinjaman, 0, ',', '.') . "<br>";
echo "Lama Angsuran: " . $lamaAngsuran . " bulan" . "<br>";
echo "Besar Angsuran per Bulan: Rp " . number_format($besarAngsuran, 0, ',', '.') . "<br>";
?>