<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckinlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Senarai Sejarah Check-in';

        $checklists = [
            ['id' => 1, 'tarikh' => '13-07-2020', 'masa' => '8:30', 'suhu' => '36.0'],
            ['id' => 2, 'tarikh' => '14-07-2020', 'masa' => '8:30', 'suhu' => '36.1'],
            ['id' => 3, 'tarikh' => '15-07-2020', 'masa' => '8:30', 'suhu' => '36.5']
        ];

        return view('checkinlist.template_index', compact('page_title', 'checklists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Check-in Baru';

        return view('checkinlist.template_create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
