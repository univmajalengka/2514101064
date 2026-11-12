
<!DOCTYPE html>
<html>
<head>
    <title>Program Menghitung Diskon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf2f8;
            padding: 40px;
        }

        .container {
            width: 350px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #aaa;
        }

        h2 {
            text-align: center;
            color: #2471a3;
        }

        .hasil {
            background-color: #f2f4f4;
            padding: 15px;
            border-radius: 8px;
            line-height: 2;
        }

        .total {
            color: green;
            font-size: 22px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Kalkulator Diskon</h2>

    <?php

    // Fungsi untuk menghitung diskon
    function hitungDiskon($totalBelanja) {

        $diskon = 0;

        if ($totalBelanja >= 100000) {
            $diskon = 0.10 * $totalBelanja;

        } elseif ($totalBelanja >= 50000) {
            $diskon = 0.05 * $totalBelanja;

        } else {
            $diskon = 0;
        }

        return $diskon;
    }

    // Menentukan total belanja
    $totalBelanja = 150000;

    // Memanggil fungsi hitungDiskon
    $diskon = hitungDiskon($totalBelanja);

    // Menghitung total pembayaran
    $totalBayar = $totalBelanja - $diskon;

    ?>

    <div class="hasil">

        Total Belanja:
        Rp <?= number_format($totalBelanja, 0, ',', '.') ?>
        <br>

        Diskon:
        Rp <?= number_format($diskon, 0, ',', '.') ?>
        <br>

        Total yang Harus Dibayar:

        <div class="total">
            Rp <?= number_format($totalBayar, 0, ',', '.') ?>
        </div>

    </div>

</div>

</body>
</html>
