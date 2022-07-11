<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index() {
        $address = "1213 bangkok, thai";
        $tel = "0834303";
        $email = "mark@mail.com";
        // return view('about', compact('address', 'tel', 'email'));
        return view('about')->with('address', $address)->with('tel', $tel)->with('email', $email)->with('error', 'not found');
    }
}
