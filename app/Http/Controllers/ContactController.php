<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $data=[
            'title' => 'Contact Us',
            'email' => '2002032@icte.bdu.ac.bd',
        ];
        return view('contact', $data);
    }
}
