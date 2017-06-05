<?php

namespace App\Http\Controllers;

use App\Rating;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show(User $user) {
        return view('users.show', compact('user'));
    }

    public function rate(Request $request) {
        $rate = Rating::create($request->all());
        $rate->save();

        $user = User::where('id', '=', $request->recipient_id)->first();
        $user->rating++;
        $user->save();

        return redirect()->back();
    }

    public function unrate(Request $request) {
//        dd($request->all());
        Rating::where('sender_id', $request->sender_id)
            ->where('recipient_id', $request->recipient_id)
            ->where('message_id', $request->message_id)
            ->delete();
//        Rating::destroy($rate);

        $user = User::where('id', '=', $request->recipient_id)->first();
        $user->rating--;
        $user->save();

        return redirect()->back();
    }
}
