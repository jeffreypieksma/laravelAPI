@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    </div>
    
    <div class="row">
   		
  
        @foreach ($articles as $article)
           
            <div class="article-item ">
                <div class="col m12 card-panel ">
                    <h3><a href="{{ url('article',['id'=>$article->id]) }}"> {{ $article->title }}</a> </h3>
                    <p> {{ $article->content }} </p>
                     {{ucfirst($article->user->name)}}		
                </div>
            </div>
        @endforeach
			
		
    </div>
</div>
@endsection
