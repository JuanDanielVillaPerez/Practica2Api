<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comentario;

class comentarioController extends Controller
{
    public function Allcomentarios(Request $request){
        $input = comentario::all();
        return $input;
    }
    public function Comentarioid(comentario $comentario ,int $id=0){
        //return view('posts',['posts'=>posts::findOrFail('id')]);
        $comentario = ($id==0)? comentario::all():comentario::find($id);
        return response()->json($comentario,200);
    }
    public function Postcomentario(Request $request){
        $input = $request->all();
        comentario::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Insercion realizada'
        ], 200);
    }
    public function Putcomentario(Request $request,$id){
        $comentario=comentario::find($id);
        $comentario->update($request->all());
        return $comentario;
    }
    public function Deletecomentario(Request $request, $id){
        $comentario=comentario::find($id);
        $comentario->delete();
        return 204;
    }
}
