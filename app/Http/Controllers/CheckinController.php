<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function create()
    {

        $page_title = 'Borang Check In';
    
        return view('borang_kehadiran', compact('page_title'));
    
    }

    public function store()
    {
    
        return 'Borang berjaya di hantar!';
    
    }
}
