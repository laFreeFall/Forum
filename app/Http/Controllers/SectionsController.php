<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function store(Request $request) {
        $section = new Section($request->all());
        $section->save();

        return redirect(action('ForumController@index'));
    }

    public function show(Section $section) {
        return view('sections.show', compact('section'));
    }
}
