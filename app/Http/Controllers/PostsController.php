<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Redirect;
use Gate;
use App\Http\Requests;

class PostsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
    $dados = array(
      'titulo' => 'Posts',
      'posts' => Post::all()
    );
    return view('posts.index', $dados);
  }
  public function cadastrar()
  {
    if (Gate::allows('Insert_post')) {
      $dados = array('titulo' => 'Adicionar Post');
      return view('posts.formulario', $dados);
    }
  }
  public function insert(Request $request)
  {
    $post = new Post();
    $post = $post->create($request->all());
    \Session::flash('insert_ok', 'Post cadastrado com sucesso!');
    return Redirect::to('posts');
  }
  public function editar($id)
  {
    if (Gate::allows('Edit_post')) {
      $post = Post::find($id);
      $dados = array(
        'post' => Post::findOrFail($id),
        'titulo' => 'Editar Post',
      );
      return view('posts.formulario', $dados);
    }else {
      return Redirect::to('posts');
    }
  }
  public function update($id, Request $request)
  {
    $post = Post::findOrFail($id);

    $post->update($request->all());
    \Session::flash('update_ok', 'Post atualizado com sucesso!');
    return Redirect::to('posts');
  }
  public function deletar($id)
  {
    if (Gate::allows('Delete_post')) {
      $post = Post::findOrFail($id);
      $post->delete();
      \Session::flash('delete_ok', 'Post excluido com sucesso!');
    }
    return Redirect::to('posts');
  }
}
