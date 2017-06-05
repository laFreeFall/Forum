<?php

namespace App\Http\Controllers;

use App\Subsection;
use App\Topic;
use Illuminate\Http\Request;

class SubsectionsController extends Controller
{
    public function store(Request $request) {
        $subsection = new Subsection($request->all());
        $subsection->save();

        return redirect(action('ForumController@index'));
    }

    public function show(Subsection $subsection) {
        //dd(Topic::first()->latest_message);
        //dd($subsection->topics->messages_amount);
        $topics = $subsection->topics;
        return view('subsections.show', compact('subsection', 'topics'));
    }
}
