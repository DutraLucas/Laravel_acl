<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Permission;
use App\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
      $dados = array(
        'titulo' => 'Dashboard',
        'total_user' => User::count(),
        'total_posts' => Post::count(),
        'total_permissions' => Permission::count(),
        'total_roles' => Role::count(),
      );
      return view('dashboard', $dados);
    }
}
