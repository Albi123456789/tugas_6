<?php
$hasil = "";
$rumus = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jari = floatval($_POST['jari']);
    $tinggi = floatval($_POST['tinggi']);
    $hasil = 3.14 * $jari * $jari * $tinggi;
    $rumus = "Volume = π × r² × t = 3.14 × $jari² × $tinggi";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Volume Tabung</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Kalkulator Volume Tabung</h2>
        <form method="POST">
            <input type="text" name="jari" placeholder="Masukkan jari-jari" required>
            <input type="text" name="tinggi" placeholder="Masukkan tinggi" required>
            <button type="submit">Hitung</button>
        </form>

        <?php if($hasil != ""): ?>
            <div class="hasil">
                <p><strong>Rumus:</strong> <?= $rumus; ?></p>
                <p><strong>Hasil:</strong> <?= round($hasil, 2); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
