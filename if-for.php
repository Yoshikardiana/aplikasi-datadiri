<?php

// Percabangan (IF ELSE)
$nilai = 75;
echo "Nilai Kamu = $nilai <br>";
echo "Maka Status Kamu = ";

if ($nilai > 75) {
    echo "Lulus Beneran";
} else if ($nilai == 75) {
    echo "Lulus KKM";
} else {
    echo "Tidak Lulus";
}

echo "<hr>";

$nilai_web = 78;
$nilai_pbo = 80;
echo "Nilai Web Kamu = $nilai_web <br>";
echo "Nilai PBO Kamu = $nilai_pbo <br>";
echo "Hasil Kelulusan Kamu =";
if ($nilai_web >= 80 AND $nilai_pbo >= 80 ) {
    echo "Lulus Nilai Produktif 2 Mapel";
}else if ($nilai_web >= 80 OR $nilai_pbo >= 80) {
    echo "Lulus Nilai Produktif Salah Satu Mapel";
}else{
    echo "Tidak Lulus Nilai Produktif";
}

echo "<hr>";

// Perulangan (White, Do While, For)
$i = 1;
while ($i < 5) {
    echo "Hello World ! <br>";
    $i++; // Assigment +1
}

echo "<hr>";

$no =1;
do {
    echo "halo Dunia ! <br>";
    $no++;
} while ($no < 5);

echo "<br>";

$nomor = 1;
for ($nomor; $nomor < 5; $nomor++){
    echo "kamsamida ! <br>";
}

echo "<br>";
// praktikum IF Didalam FOR
echo "case 1 = Menentukan Angka Ganjil & Genap <br>";
$angka = 1;
for ($angka; $angka <=10; $angka++){
    if ($angka % 2 == 0) {
        echo "$angka = Bilangan Genap <br>";
    }else {
        echo "$angka = Bilangan Ganjil <br>";
    }
}

echo "<hr>";
// Praktikun FOR Didalam FOR
echo "Case 2 = Angka berulang <br>";
$x = 1;
$y = 1;
for ($x; $x <= 9; $x++) {
    for ($y = $x; $y <= 9; $y++) {
        echo $x;
    }
    echo "<br>";
}


?>


