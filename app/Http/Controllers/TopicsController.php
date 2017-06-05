<?php

namespace App\Http\Controllers;

use App\Message;
use App\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function store(Request $request) {
        $topic = auth()->user()->topics()->create($request->all());
        auth()->user()->messages()->create(['topic_id' => $topic->id, 'content' => $topic->description]);
        //Message::create(['topic_id' => '', 'user_id' => '', 'content' => '']);
        //$topic = Topic::create($request->all());
        //$topic->author_id = auth()->user()->id;
        //$topic->save();

        return redirect()->back();
    }

    public function show(Topic $topic) {
        $topic->views++;
        $topic->save();
        $messages = $topic->messages;

        return view('topics.show', compact('topic', 'messages'));
    }
}