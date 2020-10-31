<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;

class postsController extends Controller
{
    public function Allposts(Request $request){
        $input = posts::all();
        return $input;
    }
    public function Postid(posts $post ,int $id=0){
        //return view('posts',['posts'=>posts::findOrFail('id')]);
        $post = ($id==0)? posts::all():posts::find($id);
        return response()->json($post,200);
    }
    public function Postpost(Request $request){
        $input = $request->all();
        posts::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Insercion realizada'
        ], 200);
    }
    public function Putpost(Request $request,$id){
        $post=posts::find($id);
        $post->update($request->all());
        return $post;
    }
    public function Deletepost(Request $request, $id){
        $post=posts::find($id);
        $post->delete();
        return 204;
    }
}
