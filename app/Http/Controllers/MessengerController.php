<?php

namespace App\Http\Controllers;
use App\Models\Messenger;
use Illuminate\Http\Request;

class MessengerController extends Controller
{

    public function create_messenger(Request $request)
    {
        $messenger = new Messenger();
        $messenger -> fill($request->all());
        $messenger->save();
        return redirect()->route('main');
    }

}
