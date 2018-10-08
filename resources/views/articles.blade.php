@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

            </div>

        </div>
    </div>
    
    <div class="row">
   		<section class="article-list">
    	
			@foreach ($articles as $article)
				<div class="article-item">
					<div class="col-md-6">
						<h1>{{ $article['title'] }} </h1>
						<p> {{ $article['content']}} </p>

						
					</div>
				</div>
			@endforeach
			
		</section>
    </div>
</div>
@endsection
