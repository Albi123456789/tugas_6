<?php
$hasil = "";
$rumus = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['jari']) && isset($_GET['tinggi'])) {
    $jari = floatval($_GET['jari']);
    $tinggi = floatval($_GET['tinggi']);
    $hasil = 3.14 * $jari * $jari * $tinggi;
    $rumus = "Volume = π × r² × t = 3.14 × $jari² × $tinggi";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Volume Tabung (GET)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Kalkulator Volume Tabung (GET)</h2>
        <form method="GET">
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
