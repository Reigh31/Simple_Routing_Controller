<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data = ['name' => 'Edreigh Nisperos', 'description' => 'A passionate web developer.'];
        return view('about-me', $data);
    }
}
