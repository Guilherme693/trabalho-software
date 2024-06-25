<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function dashboard(){
        $livros = Livro::where("usuario", auth()->user()->id)->paginate(50);
        return view("dashboard", compact('livros'));
    }

    public function cadastrar(Request $request){
        $validar = $request->validate([
            'autor' => ['required'],
            'titulo' => ['required'],
            'subtitulo' => ['required'],
            'edicao' => ['required'],
            'editora' => ['required'],
            'ano_de_publicacao' => ['required']
        ]);

        Livro::create($request->except("_token"));
        return redirect("/dashboard");
    
    }
    public function editar(Request $request, $id){
        $validar = $request->validate([
            'autor' => ['required'],
            'titulo' => ['required'],
            'subtitulo' => ['required'],
            'edicao' => ['required'],
            'editora' => ['required'],
            'ano_de_publicacao' => ['required']
        ]);

        Livro::where("id", $id)->update($request->except("_token"));
        return redirect("/dashboard");
    }
    public function deletar($id){
        Livro::where("id", $id)->delete();
        return redirect("/dashboard");
    }
}
