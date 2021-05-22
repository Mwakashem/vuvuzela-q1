<?php

namespace App\Http\Controllers;

use App\Models\Jina;
use Illuminate\Http\Request;

class JinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jina = Jina::latest()->get();

        return view('index', compact('jina'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        return view("create");
    }
    public function success()
    {
        // 
        return view("success");
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
        $data = request()->validate([
            'jina'=>'required',
        ]);
        Jina::create($data);
        return redirect ('/success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jina  $jina
     * @return \Illuminate\Http\Response
     */
    public function show(Jina $jina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jina  $jina
     * @return \Illuminate\Http\Response
     */
    public function edit(Jina $jina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jina  $jina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jina $jina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jina  $jina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jina $jina)
    {
        //
    }
}
