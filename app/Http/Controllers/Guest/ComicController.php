<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(5); // SELECT * FROM 'Comics

        // return view('comics.index', compact('comics'));
        // OR
        return view('comics.index', [
            'comics' => $comics,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validazione dei dati
        $request->validate([
            'title'         => 'required|string|max:50',
            'description'   => 'string',
            'price'         => 'required|max:10',
            'series'        => 'required|string|max:50',
            'sale'          => 'date',
            'type'          => 'required|string|max:20',
        ]);

        $data = $request->all();

        // Salvare i dati nel database
        $newComic = new Comic();
        $newComic->title        = $data['title'];
        $newComic->description  = $data['description'];
        $newComic->thumb        = 'https://picsum.photos/200';
        $newComic->price        = $data['price'];
        $newComic->series       = $data['series'];
        $newComic->sale_date    = $data['sale'];
        $newComic->type         = $data['type'];
        $newComic->save();

        // return to_route('comics.show', ['comic' => $NewComic->id]);
        // OR
        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // Validare i dati
        $request->validate([
            'title'         => 'required|string|max:50',
            'description'   => 'string',
            'thumb'         => 'required|string',
            'price'         => 'required|max:10',
            'series'        => 'required|string|max:50',
            'sale'          => 'date',
            'type'          => 'required|string|max:20',
        ]);

        $data = $request->all();

        // Aggiornare i dati
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale'];
        $comic->type = $data['type'];

        $comic->update();


        // return redirect()->route('comics.show', ['comic' => $newComic->id]);
        // OR
        return to_route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
