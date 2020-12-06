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
							  <a href="/home/{{ $post->slug }}">
								<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
							</a>
                  			</div>
							  <p>{{ $post->title }}</p>
                  		</div>
					@endforeach
                  	</div><!-- /row mt -->
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn">
								<div class="white-header">
									<h5>TOP USER</h5>
								</div>
								<p><img src="/images/ui-zac.jpg" class="img-circle" width="80"></p>
								<p><b>Zac Snider</b></p>
								<div class="row">
									<div class="col-md-6">
										<p class="small mt">MEMBER SINCE</p>
										
									</div>
									<div class="col-md-6">
										<p class="small mt">TOTAL SPEND</p>
										
									</div>
								</div>
							</div>
                              
                      	</div><!-- /col-md-4-->


                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>TOP PRODUCT</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-heart"></i> 122</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
										<img src="/images/product.png" width="120">
	                      		</div>
                      		</div>
                      	</div><!-- /col-md-4 -->

						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>TOP USER</h5>
								</div>
								<p><img src="/images/ui-zac.jpg" class="img-circle" width="80"></p>
								<p><b>Zac Snider</b></p>
								<div class="row">
									<div class="col-md-6">
										<p class="small mt">MEMBER SINCE</p>
										
									</div>
									<div class="col-md-6">
										<p class="small mt">TOTAL SPEND</p>
										
									</div>
								</div>
							</div>
						</div><!-- /col-md-4 -->


                    </div><!-- /row -->


					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-md-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>DROPBOX STATICS</h5>
                      			</div>
								
                      		</div><!-- /darkblue panel -->
						</div><!-- /col-md-4 -->


						<div class="col-md-4 mb">
							<!-- INSTAGRAM PANEL -->
							<div class="instagram-panel pn">
								<i class="fa fa-instagram fa-4x"></i>
								<p>@THISISYOU<br/>
									5 min. ago
								</p>
								<p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
							</div>
						</div><!-- /col-md-4 -->

						<div class="col-md-4 col-sm-4 mb">
							<!-- REVENUE PANEL -->
							<div class="darkblue-panel pn">
								<div class="darkblue-header">
									<h5>REVENUE</h5>
								</div>
								<div class=" mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<p class="mt"><b>$ 17,980</b><br/>Month Income</p>
							</div>
						</div><!-- /col-md-4 -->

					</div><!-- /row -->

					<div class="row mt">
                     
					</div><!-- /row -->

                  </div><!-- /col-lg-12 END SECTION MIDDLE -->

              </div><!--/row -->
          </section>
      </section>
      <!--main content end-->

  </section>

@endsection
