
<?php

class Mahasiswa {
    // Atribut mahasiswa
    public $nim;
    public $nama;
    public $prodi;
    public $ipk;

    // Constructor
    public function __construct($nim, $nama, $prodi, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    // Method untuk menentukan predikat
    public function predikat() {
        if ($this->ipk >= 3.51) {
            return "Cumlaude";
        } elseif ($this->ipk >= 3.01) {
            return "Sangat Memuaskan";
        } else {
            return "Memuaskan";
        }
    }

    // Method untuk menampilkan informasi
    public function info() {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($this->nim) . "</td>";
        echo "<td>" . htmlspecialchars($this->nama) . "</td>";
        echo "<td>" . htmlspecialchars($this->prodi) . "</td>";
        echo "<td>" . number_format($this->ipk, 2) . "</td>";
        echo "<td>" . $this->predikat() . "</td>";
        echo "</tr>";
    }
}

// Data 20 mahasiswa
$mahasiswa = [
    new Mahasiswa("24001", "Andi Saputra", "Informatika", 3.85),
    new Mahasiswa("24002", "Budi Santoso", "Sistem Informasi", 3.40),
    new Mahasiswa("24003", "Citra Lestari", "Pendidikan TI", 3.75),
    new Mahasiswa("24004", "Dedi Kurniawan", "Informatika", 2.90),
    new Mahasiswa("24005", "Eka Putri", "Pendidikan TI", 3.60),
    new Mahasiswa("24006", "Fajar Ramadhan", "Informatika", 3.20),
    new Mahasiswa("24007", "Gita Amelia", "Sistem Informasi", 3.95),
    new Mahasiswa("24008", "Hendra Wijaya", "Pendidikan TI", 3.10),
    new Mahasiswa("24009", "Indah Permata", "Informatika", 3.70),
    new Mahasiswa("24010", "Joko Pratama", "Sistem Informasi", 2.80),
    new Mahasiswa("24011", "Kartika Sari", "Pendidikan TI", 3.55),
    new Mahasiswa("24012", "Lukman Hakim", "Informatika", 3.30),
    new Mahasiswa("24013", "Maya Anggraini", "Sistem Informasi", 3.80),
    new Mahasiswa("24014", "Nanda Prakoso", "Pendidikan TI", 2.95),
    new Mahasiswa("24015", "Olivia Putri", "Informatika", 3.65),
    new Mahasiswa("24016", "Putra Mahendra", "Sistem Informasi", 3.25),
    new Mahasiswa("24017", "Rina Wulandari", "Pendidikan TI", 3.90),
    new Mahasiswa("24018", "Sandi Firmansyah", "Informatika", 3.05),
    new Mahasiswa("24019", "Tia Novitasari", "Sistem Informasi", 3.50),
    new Mahasiswa("24020", "Wahyu Setiawan", "Pendidikan TI", 2.75)
];

// Menampilkan data mahasiswa
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background: #f4f6f9;
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
            padding: 10px;
            text-align: left;
        }
        th {
            background: #1d3557;
            color: white;
        }
        tr:nth-child(even) {
            background: #eef3f8;
        }
    </style>
</head>
<body>

<h2>DAFTAR 20 MAHASISWA</h2>

<table>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>IPK</th>
        <th>Predikat</th>
    </tr>

    <?php
    foreach ($mahasiswa as $mhs) {
        $mhs->info();
    }
    ?>

</table>

</body>
</html>
