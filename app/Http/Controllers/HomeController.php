<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function index()
   { 
        $user = Auth::user();
        $nome = $user->name;

        if(Gate::allows('see-form')){
            echo "ESTE USER PODE VER O FORM";
        }else{
            echo "ESTE USER NÃO PODE VER O FORM";
        }

        $data = [
            'nome' => $nome
        ];

        return view('welcome', $data);
   }
}
