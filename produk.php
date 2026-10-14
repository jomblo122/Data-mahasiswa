
<?php
$produk = [
    ["P001", "Laptop", 7500000, 5],
    ["P002", "Mouse", 100000, 20],
    ["P003", "Keyboard", 250000, 15],
    ["P004", "Monitor", 1800000, 8],
    ["P005", "Flashdisk", 75000, 30],
    ["P006", "Printer", 1500000, 7],
    ["P007", "Headset", 200000, 12],
    ["P008", "Webcam", 350000, 10],
    ["P009", "Speaker", 300000, 9],
    ["P010", "Harddisk", 850000, 6]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            margin: 30px;
        }
        h2 {
            text-align: center;
            color: #1d3557;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background: #1d3557;
            color: white;
        }
        tr:nth-child(even) {
            background: #eef3f8;
        }
        a {
            display: inline-block;
            margin-bottom: 20px;
            color: #1d3557;
        }
    </style>
</head>
<body>

<h2>DAFTAR DATA PRODUK</h2>

<a href="index.php">← Kembali ke Menu Utama</a>

<table>
    <tr>
        <th>No</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php foreach ($produk as $index => $item): ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= htmlspecialchars($item[0]) ?></td>
        <td><?= htmlspecialchars($item[1]) ?></td>
        <td>Rp <?= number_format($item[2], 0, ',', '.') ?></td>
        <td><?= $item[3] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
