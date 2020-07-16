<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Feedback;

class FeedbackController extends Controller
{

    public function index()
    {
        $page_title = 'Senarai Feedback Anda';

        $feedbacks = Feedback::paginate(2);
        // DB::table('feedbacks')
        // ->orderBy('nama', 'asc')
        // ->whereIn('email', ['ipin@gmail.com', 'upin@gmail.com'])
        // ->select('nama', 'email')
        //->get();
        //->paginate(2);

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
        // $data = $request->only([
        //     'nama',
        //     'email',
        //     'telefon',
        //     'komen'
        // ]);
        $data = $request->except('action');

        if ($request->input('action') == 'Save')
        {
            $data['status'] = 'draft';

        }
        else{
            $data['status'] = 'submit';
        }

        // Simpan data ke database table feedbacks
        // DB::table('feedbacks')->insert($data);
        Feedback::create($data);

        // Akhir sekali, redirect user ke halaman /home
        return redirect()->route('feedback.index');
    }


    public function edit($id)
    {
        // Dapatkan data daripada table feedbacks berdasarkan ID yang dibekalkan
        // pada routing parameters {id}
        $feedback = DB::table('feedbacks')->where('id', '=', $id)->first();

        // Semak kewujudan data. Jika tak wujud, redirect ke senarai feedback
        if (is_null($feedback))
        {
            return redirect()->route('feedback.index');
        }
        // Set tajuk halaman
        $page_title = 'Edit Feedback ID: ' . $id;

        // Bagi respon paparkan borang edit feedback
        return view('feedbacks/edit_feedback', compact('page_title', 'feedback'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data dari borang
        $request->validate([
            'nama' => 'required|min:3',
            'email' => ['required', 'email'],
            'telefon' => 'digits_between:10,11'
        ]);
        // Dapatkan data yang diisi pada borang
        // $data = $request->only([
        //     'nama',
        //     'email',
        //     'telefon',
        //     'komen'
        // ]);
        $data = $request->except('action');
        
        if ($request->input('action') == 'Save')
        {
            $data['status'] = 'draft';

        }
        else{
            $data['status'] = 'submit';
        }
        // Simpan data ke database table feedbacks berdasaran ID data
        // DB::table('feedbacks')->where('id', '=', $id)->update($data);
        $feedback = Feedback::find($id);
        $feedback->update($data);

        // Akhir sekali, redirect user ke halaman /feedbacks
        return redirect()->route('feedback.index');
        // return redirect()->back();
    }

    public function destroy($id)
    {
        // Cari data yang nak diapuskan dan hapuskan dia.
        // DB::table('feedbacks')->where('id', '=', $id)->delete();
        $feedback = Feedback::find($id);
        $feedback->delete();

        // Akhir sekali, redirect user ke halaman /feedbacks
        return redirect()->route('feedback.index');

    }



}