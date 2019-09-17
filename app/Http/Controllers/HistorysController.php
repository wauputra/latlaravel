<?php

namespace App\Http\Controllers;

use App\History;

class HistorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return History::all();
        $history = History::all();
        return view('history.index', compact('history'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        /* $history = new history;
        $history->organisasi = $request->organisasi;
        $history->jabatan = $request->jabatan;
        $history->tahun = $request->tahun;

        $history->save(); */

        /*  History::create([
        'organisasi' => $request->organisasi,
        'jabatan' => $request->jabatan,
        'tahun' => $request->tahun,
        ]); */

        $validatedData = $request->validate([
            'organisasi' => 'required',
            'jabatan' => 'required',
            'tahun' => 'required|max:9',
        ]);

        History::create($request->all());
        return redirect('historys')->with('status', 'Data History berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //
        return view('history.show', compact('history'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {

        return view('history.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        $validatedData = $request->validate([
            'organisasi' => 'required',
            'jabatan' => 'required',
            'tahun' => 'required|max:9',
        ]);

        History::where('id', $history->id)
            ->update([
                'organisasi' => $request->organisasi,
                'tahun' => $request->tahun,
                'jabatan' => $request->jabatan,
            ]);

        return redirect('historys')->with('status', 'Data History berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
        History::destroy($history->id);
        return redirect('historys')->with('status', 'Data History berhasil dihapus');
    }
}
