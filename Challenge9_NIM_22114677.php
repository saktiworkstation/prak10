<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chalange</title>
</head>
<body>
    <h1>Masukkan Data Anda</h1>
    <form method="post">
        <label for="nama">Masukkan nama anda:</label>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="angka1">Masukkan angka pertama (1-10):</label>
        <input type="number" id="angka1" name="angka1" min="1" max="10"><br><br>
        
        <label for="angka2">Masukkan angka kedua (1-10):</label>
        <input type="number" id="angka2" name="angka2" min="1" max="10"><br><br>
        
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $angka1 = intval($_POST['angka1']);
        $angka2 = intval($_POST['angka2']);
        
        if ($nama && $angka1 && $angka2) {
            $penjumlahan = $angka1 + $angka2;
            $pengurangan = $angka1 - $angka2;
            $perkalian = $angka1 * $angka2;
            $pembagian = $angka1 / $angka2;
            $modulus = $angka1 % $angka2;
            
            echo "<h2>Perhitungan Aritmatika</h2>";
            echo "Nama: $nama<br>";
            echo "$angka1 + $angka2 = $penjumlahan<br>";
            echo "$angka1 - $angka2 = $pengurangan<br>";
            echo "$angka1 * $angka2 = $perkalian<br>";
            echo "$angka1 / $angka2 = $pembagian<br>";
            echo "$angka1 % $angka2 = $modulus<br>";
        } else {
            echo "<p>Silakan isi semua field dengan benar.</p>";
        }
    }
    ?>
</body>
</html>
