<?php

namespace App\Controllers;

class Contact extends BaseController
{

    public function index()
    {
        $data = [
            'lokasi'  => ['Rumah', 'Jl. abc No. 123', 'Bandung', 'Kantor', 'Jl. SetiaBudi No. 193', 'Bandung']
        ];

        echo view('contact/contactView', $data);
    }
}
