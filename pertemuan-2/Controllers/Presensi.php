<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Presensi extends Controller {

    public function absen($nim,$nama){
        $data['nim'] = $nim;
        $data['nama'] = $nama;
        echo view('cetak_data',$data);
    }

    public function index(){
        $this->absen('21.240.0057','Muhammad Naufal Yafi\'');
    }

}

?>

