<!DOCTYPE html>
<html>
<head>
    <title>Nilai Ujian</title>
</head>
<body>

<h2>Input Nilai Ujian</h2>

<form method="post">
    <?php
    $nilai = array(); // Array untuk menyimpan nilai-nilai ujian
    for ($i = 1; $i <= 10; $i++) {
        echo "Nilai ke-$i: <input type='number' name='nilai[]'><br>";
    }
    ?>
    <br>
    <input type="submit" name="submit" value="Cek Nilai Tertinggi">
</form>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['nilai']) && count($_POST['nilai']) === 10) {
        $nilai = $_POST['nilai'];
        
        $nilai_tertinggi = max($nilai); // Mencari nilai tertinggi
        
        $jumlah_tertinggi = 0;
        foreach ($nilai as $n) {
            if ($n == $nilai_tertinggi) {
                $jumlah_tertinggi++;
            }
        }
        
        echo "<h2>Hasil</h2>";
        echo "Nilai tertinggi: $nilai_tertinggi<br>";
        echo "Jumlah orang yang mendapat nilai tertinggi: $jumlah_tertinggi";
    } else {
        echo "<p>Harap masukkan 10 nilai ujian.</p>";
    }
}
?>

</body>
</html>
