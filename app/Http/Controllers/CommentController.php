<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request,['comment'=>'required']);
        $input =  $request->all();
        $input['user_id'] = auth()->user()->id;
        Comment::create($input);
        return back();
    }


}
