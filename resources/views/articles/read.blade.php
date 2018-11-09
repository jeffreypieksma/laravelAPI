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
   		      
        <div class="article-item ">
            <div class="col m12 card-panel">
                <h3> {{ $article->title }} </h3>
                <p> {{ $article->content }} </p>
                    {{ucfirst($article->user->name)}}		
            </div>
        </div>		
		
    </div>
</div>
@endsection
