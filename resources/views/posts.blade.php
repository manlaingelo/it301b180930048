@extends('layouts.manage')
@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>{{ $post->title }}</h1>
				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				<p>{!! $post->body !!}</p>
                <a href="/home" class="btn btn-primary btn-block">Буцах</a>
			</div>
		</div>
	</div>
@endsection