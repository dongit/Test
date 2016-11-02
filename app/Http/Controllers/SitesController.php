<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SitesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function shouye()
    {
        $name = 'HD';

        return view('shouye')->with('name', $name);
    }
}
