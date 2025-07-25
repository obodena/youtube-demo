<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function createPost(Request $request)
    {
      
        $incomingFields = $request->validate([
            'title' => ['required', 'string'],
            'body' => ['required', 'string']

        ]);
         
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = '1';
        
        Post::create($incomingFields);
        return redirect('/');
    }
}
