<?php

namespace App\Http\Controllers;
use App\Models\Messenger;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\MessengerRequest;

class MessengerController extends Controller
{

    public function create_messenger(MessengerRequest $request)
    {
        $articles_recent = Article::orderBy('created_at','desc')->paginate(2); 
        $messenger = new Messenger();
        $messenger -> fill($request->all());
        $messenger->save();
        $name = $messenger->name;
        return view('main_layout/feedback')->with('articles_recent',$articles_recent)->with('name',$name);
    }

}
