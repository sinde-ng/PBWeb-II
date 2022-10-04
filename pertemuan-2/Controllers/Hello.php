<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Hello extends Controller {
    
    public function index() {
        $data['title'] = "Sugeng Rawuh";
        echo view('hello_view',$data);
    }

}

?>

