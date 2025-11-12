<!DOCTYPE html>
<html>
<head>
    <title>Cek Tahun Kabisat</title>
</head>
<body>
    <h2>Cek Tahun Kabisat</h2>
    <form method="post" action="">
        Masukkan tahun: <input type="number" name="tahun" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tahun = $_POST['tahun'];

        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "<p>Tahun $tahun adalah <strong>tahun kabisat</strong>.</p>";
        } else {
            echo "<p>Tahun $tahun <strong>bukan tahun kabisat</strong>.</p>";
        }
    }
    ?>
</body>
</html>
