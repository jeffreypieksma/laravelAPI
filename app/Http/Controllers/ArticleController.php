<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Http\Requests;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = Article::paginate(5);
        return ArticleResource::collection($articles);

    }
    public function indexBackend(){
        $articles = Article::all();
        return view('articles', compact('articles'));
    }   
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
       
        if ($request->isMethod('post')) $article = new Article;
        
        if ($request->isMethod('put')) $article = Article::findOrFail($request->id);     

        $article->title = $request->input('title');
        $article->content = $request->input('content');

        dd($data);

        if($article->save()){
            return response('succes!', 200);
            //return new ArticleResource($article);
        }

    }

    public function update(Request $request)
    {

        $data = $request->all();
        
        if (!$request->isMethod('put')) return;
        
        $article = Article::findOrFail($request->id);

        $data = $request->data;
        
        $article->title = 'test123';
        $article->content = 'hallo';
        // dd( $title ):

        // $article->title  = $data['title'];
        // $article->content = $data['content'];
        
        // $foreach ($request->data as $data) {
        //     $article->title  = $data['title'];
        //     $article->content = $data['content'];
        // }  

        // $article->title = $request->input('title');
        // $article->content = $request->input('content');

        if($article->save()){
            return response('succes!', 200);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return new ArticleResource($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $article = Article::FindOrfail($id);

        if ($article->delete()) {
            return response(null, 204);
            return new ArticleResource($article);
        }

        
    }
}
