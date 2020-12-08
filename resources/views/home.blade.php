@extends('layouts.manage')
@section('head')
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Dashboard styles -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <!--external css-->
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/style-responsive.css" rel="stylesheet">
@endsection
@section('content')
<div id="fh5co-services">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
                @foreach($posts as $post)
                @if($post->category_id==1)
                <a href="/home/{{$post->slug}}">
					<div class="feature-center animate-box">
						<span class="icon icon2">
                        <i class="icon-eye">
                        <div class="box0">
                            <div class="box1">
                            <img src="{{ Voyager::image( $post->image ) }}" class="rounded float-start">
                            </div>
                        </div>
                        </i>
                        
						</span>
						<div class="desc">
							<h3>{{ $post->title }}</h3>
							<p>{{ $post->excerpt }}</p>
						</div>
					</div>
                </a>
                @endif
                @endforeach
				</div>
				<div class="col-md-4">
                @foreach($posts as $post)
                @if($post->category_id==2)
					<div class="fhco-cta-block">
						<h2>{{ $post->title }}</h2>
						<p>{{ $post->excerpt }}</p>
						<p><a href="/home/{{$post->slug}}" class="btn btn-primary">Дэлгэрэнгүй</a></p>
					</div>
                @elseif($post->category_id==3)
					<div class="fhco-cta-block">
						<h2>Subscribe</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						<form action="#" id="fh5co-subscribe">
							<div class="form-group">
								<label for="email">Enter Email</label>
								<input type="text" class="form-control" id="email">
								<button class="btn btn-primary">Send</button>
							</div>
						</form>
					</div>
                @endif
                @endforeach
				</div>
			</div>
		</div>
	</div>
@endsection
