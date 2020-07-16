<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{

    public function index()
    {
        $page_title = 'Senarai Feedback Anda';

        $feedbacks = DB::table('feedbacks')
        // ->orderBy('nama', 'asc')
        // ->whereIn('email', ['ipin@gmail.com', 'upin@gmail.com'])
        // ->select('nama', 'email')
        //->get();
        ->paginate(2);

        return view('feedbacks/senarai_feedback', compact('page_title', 'feedbacks'));
    }

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

        return view('feedbacks/borang_feedback', compact('page_title'));
    }

    public function store(Request $request)
    {
        // Validasi data dari borang
        $request->validate([
            'nama' => 'required|min:3',
            'email' => ['required', 'email'],
            'telefon' => 'digits_between:10,11'
        ]);
        // Dapatkan data yang diisi pada borang
        $data = $request->only([
            'nama',
            'email',
            'telefon',
            'komen'
        ]);
        // Simpan data ke database table feedbacks
        DB::table('feedbacks')->insert($data);

        // Akhir sekali, redirect user ke halaman /home
        return redirect()->route('feedback.index');
    }



}