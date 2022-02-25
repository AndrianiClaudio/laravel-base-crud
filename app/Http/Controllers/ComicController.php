<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(5);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required | max:80',
            'poster' => 'required',
            'series' => 'required | max:80',
            'price' => 'required | numeric',
            'description' => 'required',
            'sale_date' => 'required',
            'page_count' => 'required | integer',
            'rated' => 'required',
        ]);
        $newComics = new Comic();
        $newComics->fill($validateData);
        $saved = $newComics->save();
        if (!$saved) {
            dd('Salvataggio non riuscito');
        }

        return redirect()->route('comics.show', $newComics->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', ['comic' => $comic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'name' => 'required | max:80',
            'poster' => 'required',
            'series' => 'required | max:80',
            'price' => 'required | numeric',
            'description' => 'required',
            'sale_date' => 'required | date',
            'page_count' => 'required | integer',
            'rated' => 'required',
        ]);
        // dd($validateData);

        // $data = $request->all();
        $updated = $comic->update($validateData);

        if (!$updated) {
            dd('Update non riuscito.');
        }
        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()
            ->route('comics.index')
            ->with('status', $comic->name . ' deleted.');
    }
}
