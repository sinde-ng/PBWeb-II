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
                <th colspan=5><h2>Data Komputer</h2></th>
            </tr>
            <tr>
                <th>No.</th>
                <th>Warna</th>
                <th>Ram</th>
                <th>Harddisk</th>
                <th>Prosessor</th>
            </tr>
        </thead>
        <tbody>";

class Komputer
{
    private $warna;
    private $ram;
    private $harddisk;
    private $processor;

    public function __construct($warna, $ram, $harddisk, $processor)
    {
        $this->warna = $warna;
        $this->ram = $ram;
        $this->harddisk = $harddisk;
        $this->processor = $processor;

        $this->print();
    }

    public function print()
    {
        global $number;
        echo "
            <tr>
                <td>$number</td>
                <td>$this->warna</td>
                <td>$this->ram</td>
                <td>$this->harddisk</td>
                <td>$this->processor</td>
            </tr>
        ";
    }
}

$komp1 = new Komputer("Hitam", 8, 128, "Intel core i3");
$number++;
$komp2 = new Komputer("Abu - Abu", 16, 500, "Intel core i9");
$number++;
$komp3 = new Komputer("Putih", 8, 128, "Intel core i5");
$number++;

echo "
        </tbody>
    </table>
";
?>