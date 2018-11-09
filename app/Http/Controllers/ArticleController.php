<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\User;
use App\Http\Requests;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();  
 
        return view('articles.index', compact('articles'));
    }
    
    public function read($id){
        $article = Article::find($id);
        return view('articles.read', compact('article'));
    }
}
