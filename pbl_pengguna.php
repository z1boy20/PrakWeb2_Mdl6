<?php

class Pengguna {
    protected $nama;
    protected $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Pengguna Sistem Informasi<br>";
    }
}

class Mahasiswa extends Pengguna {
    private $nim;
    private $prodi;

    public function __construct(
        $nama,
        $email,
        $nim,
        $prodi
    ) {
        parent::__construct($nama, $email);

        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanData() {
        parent::tampilkanData();

        echo "NIM: " . $this->nim . "<br>";
        echo "Program Studi: " . $this->prodi . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Mahasiswa<br>";
    }
}

class Dosen extends Pengguna {
    private $nidn;
    private $bidangKeahlian;

    public function __construct(
        $nama,
        $email,
        $nidn,
        $bidangKeahlian
    ) {
        parent::__construct($nama, $email);

        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    public function tampilkanData() {
        parent::tampilkanData();

        echo "NIDN: " . $this->nidn . "<br>";
        echo "Bidang Keahlian: "
            . $this->bidangKeahlian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Dosen<br>";
    }
}

$mhs = new Mahasiswa(
    "Andi",
    "andi@email.com",
    "2301001",
    "Sistem Informasi"
);

$dosen = new Dosen(
    "Budi",
    "budi@email.com",
    "0012345678",
    "Pemrograman"
);

echo "<h3>Data Mahasiswa</h3>";
$mhs->tampilkanData();
$mhs->tampilkanPeran();

echo "<hr>";

echo "<h3>Data Dosen</h3>";
$dosen->tampilkanData();
$dosen->tampilkanPeran();

?>