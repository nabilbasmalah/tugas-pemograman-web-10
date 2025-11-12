<!DOCTYPE html>
<html>
<head>
    <title>Hitung Gaji Berdasarkan Golongan</title>
</head>
<body>
    <h2>Hitung Gaji Mingguan Berdasarkan Golongan</h2>
    <form method="post" action="">
        <label>Masukkan jumlah jam kerja per minggu:</label>
        <input type="number" name="jam_kerja" required><br><br>

        <label>Pilih Golongan:</label>
        <select name="golongan" required>
            <option value="">-- Pilih Golongan --</option>
            <option value="A">Golongan A</option>
            <option value="B">Golongan B</option>
            <option value="C">Golongan C</option>
            <option value="D">Golongan D</option>
        </select><br><br>

        <input type="submit" value="Hitung Gaji">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamKerja = $_POST['jam_kerja'];
        $golongan = $_POST['golongan'];
        $upahLembur = 3000;

        // Tentukan upah per jam berdasarkan golongan
        switch ($golongan) {
            case 'A': $upahNormal = 4000; break;
            case 'B': $upahNormal = 5000; break;
            case 'C': $upahNormal = 6000; break;
            case 'D': $upahNormal = 7500; break;
            default: $upahNormal = 0; break;
        }

        // Hitung total gaji
        if ($jamKerja <= 48) {
            $totalGaji = $jamKerja * $upahNormal;
        } else {
            $jamLembur = $jamKerja - 48;
            $totalGaji = (48 * $upahNormal) + ($jamLembur * $upahLembur);
        }

        echo "<hr>";
        echo "<h3>Hasil Perhitungan:</h3>";
        echo "<p>Golongan: <strong>$golongan</strong></p>";
        echo "<p>Jam kerja: $jamKerja jam</p>";
        echo "<p>Total gaji: <strong>Rp " . number_format($totalGaji, 0, ',', '.') . "</strong></p>";
    }
    ?>
</body>
</html>
