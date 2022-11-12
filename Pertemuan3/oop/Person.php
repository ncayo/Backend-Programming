<?php

class Person
{
    # membuat property
    public $nama;
    public $alamat;
    public $jurusan;

    # membuat constructor
    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    # membuat method (function)
    public function setNama($data)
    {
        $this->nama = $data;
    }

    public function getNama()
    {
        return $this->nama;
    }

    # buat method set dan get alamat
    # buat method set dan get jurusan
}

$cay = new Person('Nurcahyo', 'Jakarta', 'Informatika');
$nyo = new Person('Onyo', 'Depok', 'Bisnis Digital');

echo $cay->getNama();
echo '<br>';
echo $nyo->getNama();

// $mahasiswa = [
//     [
//         'nama' => 'Nurcahyo',
//         'jurusan' => 'Informatika',
//     ],
//     [
//         'nama' => 'Onyo',
//         'jurusan' => 'Sistem Informasi',
//     ],
// ];
// foreach ($mahasiswa as $mhs) {
//     $person = new Person();
//     $person->setNama($mhs['nama']);
//     echo $person->getNama();
//     echo '<br>';
// }

// $edo = new Person();
// $edo->setNama('Edo Riansyah');
// echo $edo->getNama();
// echo '<br>';

// $ismail = new Person();
// $ismail->setNama('Ismail Marjuki');
// echo $ismail->getNama();