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
<section id="container" >
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12 main-">

                  	<div class="row mtbox">
					@foreach($posts as $post)
						<div class="col-md-4 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
							<a href="/home/{{$post->slug}}">
                                <img src="{{ Voyager::image( $post->image ) }}" alt="..." class="img-thumbnail">
							</a>
                  			</div>
							  <p>{{ $post->title }}</p>
                  		</div>
					@endforeach
					</div>
					</div>
              </div><!--/row -->
          </section>
      </section>
      <!--main content end-->

  </section>

@endsection
