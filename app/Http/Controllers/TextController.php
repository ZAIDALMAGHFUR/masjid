<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function text()
    {
        $text = Text::all();
        return view('text', [
            'text' => $text]);
    }

    public function add()
    {
        return view('add-text');
    }

    public function store(Request $request)
    {
        $text = new Text();
        $text->text = $request->text;
        $text->save();
        return redirect('/text');
    }

    public function edit($id)
    {
        $text = Text::find($id);
        return view('edit-text', [
            'text' => $text]);
    }

    public function update(Request $request, $id)
    {
        $text = Text::find($id);
        $text->text = $request->text;
        $text->save();
        return redirect('/text');
    }

    public function destroy($id)
    {
        $text = Text::find($id);
        $text->delete();
        return redirect('/text');
    }
}