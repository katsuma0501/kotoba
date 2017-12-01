<?php

namespace App\Http\Controllers;

use DB;
use App\Anagram;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnagramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('anagram');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \Auth::user();
        
        $this->validate($request, [
            'org_word'      => 'required|string|max:50',
            'anagram_word'  => 'required|string|max:50',
            'comment'       => 'max:200',
        ]);

        \DB::transaction(function() use ($user, $request) {
            Anagram::create([
                'userid'       => $user->id,
                'anagram_word' => $request->anagram_word,
                'org_word'     => $request->org_word,
                'comment'      => $request->comment
            ]);
        });

        return view('anagram');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anagram  $anagram
     * @return \Illuminate\Http\Response
     */
    public function show(Anagram $anagram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anagram  $anagram
     * @return \Illuminate\Http\Response
     */
    public function edit(Anagram $anagram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anagram  $anagram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anagram $anagram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anagram  $anagram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anagram $anagram)
    {
        //
    }
}
