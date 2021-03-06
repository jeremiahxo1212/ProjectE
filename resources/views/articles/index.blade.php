@extends('layout')

@section('content')
<div id="wrapper">
	<div id="page" class="container">
    
    @foreach ($articles as $articles)
		<div id="content">
			<div class="title">
				<h2> 
                    <a href="/articles/{{ $articles->id }}">
                    {{ $articles->title}}
                    </a>
                </h2>
			</div>
			<p>
                <img 
                    src="/images/banner.jpg" 
                    alt="" 
                    class="image image-full" /> 
            </p>
            
        {!! $articles->excerpt !!}
		</div>
        
    @endforeach
	</div>
</div>

@endsection
