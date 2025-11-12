<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Hari dalam Bulan</title>
</head>
<body>
    <h2>Cek Jumlah Hari dalam Bulan</h2>
    <form method="post" action="">
        <label>Masukkan nama bulan (1-12):</label>
        <input type="number" name="bulan" min="1" max="12" required>
        <input type="submit" value="Cek Hari">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bulan = $_POST['bulan'];

        switch ($bulan) {
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                $jumlahHari = 31;
                break;
            case 4: case 6: case 9: case 11:
                $jumlahHari = 30;
                break;
            case 2:
                $jumlahHari = "28 atau 29 (tergantung tahun kabisat)";
                break;
            default:
                $jumlahHari = "Bulan tidak valid";
        }

        echo "<hr>";
        echo "<h3>Hasil:</h3>";
        echo "<p>Bulan ke-$bulan memiliki <strong>$jumlahHari hari</strong>.</p>";
    }
    ?>
</body>
</html>
