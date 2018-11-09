<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Article;
use App\User;
use App\Http\Requests;
use App\Http\Resources\Article as ArticleResource;

class ArticleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Send data with relation
        $api_token = $request->header('api_token');
       
        if ($request->isJson()) {
           
        }

        //$articles = Article::with('user')->get();

        $articles = Article::paginate(5);
        return ArticleResource::collection($articles);

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

       // dd($data);

        if($article->save()){
            return response('succes!', 200);
            //return new ArticleResource($article);
        }

    }

    public function update(Request $request)
    {

        $data = $request->all();
        
        if (!$request->isMethod('put')) return;

        $data = $request->data;
        
        $article = Article::findOrFail($request->id);

        $article->title  = $data['title'];
        $article->content = $data['content'];
        

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
