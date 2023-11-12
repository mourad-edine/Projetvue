<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    public function index(){
        $utilisateur = User::all()->take(5);
        return Inertia::render('Courses/index',[
            'utilisateurs' => $utilisateur
        ]);
    }

    public function index2(){
        return Inertia::render('Courses/index2');
    }

    public function index3(){
        return Inertia::render('Courses/Ajout');
    }

    public function vrai(){
        return Inertia::render('Courses/Test');
    }

    public function Info(int $id){
        $valeur = User::FindOrFail($id);
        return Inertia::render('Courses/info',[
            "val"=>$valeur
        ]);
    }

    public function PageCss(){
        return Inertia::render('Courses/ninjafood');
    }
}
