<?php

namespace App\Http\Controllers;

use App\PrivateMessage;
use Illuminate\Http\Request;

class PrivateMessagesController extends Controller
{
    public function index() {
        $privateMessages = auth()->user()->privateMessages();
        return view('private_messages.index', compact('privateMessages'));
    }
}