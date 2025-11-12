<!DOCTYPE html>
<html>
<head>
    <title>Hitung Gaji Karyawan</title>
</head>
<body>
    <h2>Hitung Gaji Mingguan Karyawan</h2>
    <form method="post" action="">
        Masukkan jumlah jam kerja per minggu: 
        <input type="number" name="jam_kerja" required>
        <input type="submit" value="Hitung Gaji">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamKerja = $_POST['jam_kerja'];
        $upahNormal = 2000;
        $upahLembur = 3000;

        if ($jamKerja <= 48) {
            $totalGaji = $jamKerja * $upahNormal;
        } else {
            $jamLembur = $jamKerja - 48;
            $totalGaji = (48 * $upahNormal) + ($jamLembur * $upahLembur);
        }

        echo "<p>Jam kerja: $jamKerja jam</p>";
        echo "<p>Total gaji: <strong>Rp " . number_format($totalGaji, 0, ',', '.') . "</strong></p>";
    }
    ?>
</body>
</html>
