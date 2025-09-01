<?php
$hasil = "";
$rumus = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['alas']) && isset($_GET['tinggi'])) {
    $alas = floatval($_GET['alas']);
    $tinggi = floatval($_GET['tinggi']);
    $hasil = 0.5 * $alas * $tinggi;
    $rumus = "Luas = ½ × alas × tinggi = 0.5 × $alas × $tinggi";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Luas Segitiga (GET)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h2>Kalkulator Luas Segitiga (GET)</h2>
        <form method="GET">
            <input type="text" name="alas" placeholder="Masukkan alas" required>
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
