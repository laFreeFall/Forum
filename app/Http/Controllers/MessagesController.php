<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request) {
        $message = new Message($request->all());
        $message->save();

        return redirect()->back();
    }
}