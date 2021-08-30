<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        return[
            'NIS' => '3103119133',
            'Name' => 'Nadia Putri Rahmaniar',
            'Gender' => 'Perempuan',
            'Phone' => '08960033496',
            'Class' => 'XII RPL 4',
        ];
    }
}
