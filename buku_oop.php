
<?php

// Membuat class Buku
class Buku
{
    public $judul;
    public $penulis;
    public $tahun;

    // Constructor
    public function __construct($judul, $penulis, $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    // Method untuk menampilkan data buku
    public function tampilkanData()
    {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($this->judul) . "</td>";
        echo "<td>" . htmlspecialchars($this->penulis) . "</td>";
        echo "<td>" . $this->tahun . "</td>";
        echo "</tr>";
    }
}

// Membuat 3 objek buku
$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", 2005);
$buku2 = new Buku("Bumi", "Tere Liye", 2014);
$buku3 = new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009);

$daftarBuku = [$buku1, $buku2, $buku3];

// Menampilkan data buku
echo "<h2>Data Buku - OOP</h2>";

echo "<table border='1' cellpadding='8'
      cellspacing='0'>";
echo "<tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
      </tr>";

foreach ($daftarBuku as $buku) {
    $buku->tampilkanData();
}

echo "</table>";

?>