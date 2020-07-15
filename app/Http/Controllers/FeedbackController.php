<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function create()
    {    
        $page_title = 'Borang Feedback';
        // Cara 1 passing data ke view
        // return view('borang_feedback', ['page_title' => $page_title, 'copyright' => $copyright]);
        // Cara 2 passing data ke view
        // return view('borang_feedback')
        // ->with('page_title', $page_title)
        // ->with('copyright', $copyright);
        // Cara 3 passing data ke view

        return view('borang_feedback', compact('page_title'));
    }

    public function store()
    {
        // Validate data dari borang

        // Takde masalah dengan data, simpan ke DB

        // Return response     
        return 'Borang berjaya dihantar!';
    }



}