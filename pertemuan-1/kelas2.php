<style>
    td {
        text-align: center;
        padding: 1rem 2rem;
    }
</style>

<?php

$number = 1;
echo "
    <table align=center border=1>
        <thead>
            <tr>
                <th colspan=4><h2>Data Mahasiswa</h2></th>
            </tr>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>";

class Mahasiswa
{
    private $nim;
    private $nama;
    private $alamat;

    public function __construct($nim, $nama, $alamat)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->alamat = $alamat;

        $this->print();
    }

    public function print()
    {
        global $number;
        echo "
            <tr>
                <td>$number</td>
                <td>$this->nim</td>
                <td>$this->nama</td>
                <td>$this->alamat</td>
            </tr>
        ";
    }
}

$mahasiswa1 = new Mahasiswa("17.240.1231", "Maimunah", "Gg. Juang, Jakarta Selatan");
$number++;
$mahasiswa2 = new Mahasiswa("20.240.1415", "Yumronah", "Gg. Juang, Jakarta Selatan");
$number++;
$mahasiswa3 = new Mahasiswa("19.240.8652", "Harun", "Gg. Kowar, Jawa Barat");
$number++;

echo "
        </tbody>
    </table>
";
?>