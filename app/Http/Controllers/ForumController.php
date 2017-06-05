<?php

namespace App\Http\Controllers;

use App\Section;
use App\Subsection;
use Illuminate\Http\Request;

use App\Http\Requests;

class ForumController extends Controller
{
    public function index() {
        $sections = Section::all();
        $subsections = Subsection::all();
//        $subsections = Subsection::with('topics', 'messages');
//        dd($subsections->topics()->messages()->count());
        return view('forum.index', compact('sections', 'subsections'));
    }
}