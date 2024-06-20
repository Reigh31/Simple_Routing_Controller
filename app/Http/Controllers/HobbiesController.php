<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $hobbies = ['FreeDiving', 'Playing_Computer_Games', 'Coding'];
        return view('hobbies', compact('hobbies'));
    }
}
