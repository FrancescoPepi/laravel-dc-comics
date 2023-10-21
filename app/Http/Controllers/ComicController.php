<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validation($request->all());
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route("comics.show", $comic);
    }

    /**
     * Display the specified resource.
     *
     * * @param  int  $id
     * * * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // $comic = comic::find(Com);
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $this->validation($request->all(), $comic->id);
        $comic = $comic->fill($data);
        $comic->save();
        return redirect()->route("comics.show", $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index", $comic);
    }

    /**
     * Private function for validation input.
     *
     * @param  int  $id
     * *@return \Illuminate\Http\Response
     */
    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|string',
                'thumb' => 'required|string',
                'price' => 'required|integer',
                'series' => 'required|string',
                'sale_date' => 'required|integer',
                'type' => 'required|in:graphic novel,comic book',
            ],
            [
                'title.required' => 'Il Titolo è obbligatorio',
                'thumb.required' => 'La Thumb è obbligatoria',

                'price.required' => 'Il Prezzo è obbligatorio',
                'price.integer' => 'Il Prezzo inserito mon è numero',

                'series.string' => 'ciao',

                'sale_date.required' => 'La Data è obbligatoria',
                'sale_date.integer' => 'La Data inserita mon è numero',

                'type.required' => 'IL Tipo è obbligatoria',
                'type.in' => 'Il tipo deve un valore compreso tra "graphic novel", "comic book"',
            ]
        )->validate();

        return $validator;
    }
}