@extends('layouts.app')
@section('content')
<!-- big header -->
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-sm-6">
            <div class="display-t">
               <div class="display-tc animate-box" data-animate-effect="fadeIn">
                  @foreach($pages as $page)
                  @if($page->slug=="logo")
                     <h1> <strong>{{ $page->title }}</strong> <br/>{{ $page->excerpt }}</h1>
                     <p><a href="#" class="btn btn-primary btn-lg with-arrow">Бүртгүүлэх</a></p>
                  @endif
                  @endforeach
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            @foreach($pages as $page)
            <div class="welcome-logo">
               @if($page->slug=="logo")
                  <img src="{{ Voyager::image( $page->image ) }}" class="imagelogo">
               @endif
            </div> 
            @endforeach
  
            
         </div>
      </div>
   </div>
</header>
<!-- second -->
<div id="fh5co-services" class="fh5co-bg-section">
   <div class="container">
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>ХҮССЭН ҮЕДЭЭ, ХҮССЭН ГАЗРАА</h2>
            @foreach($pages as $page)
               @if($page->slug=="logo")
                 <p> {{$page->body}} </p>
               @endif
              
            @endforeach
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="iphone">
               <img class="img-responsive" src="images/iphone.png" alt="iphone">
            </div>
         </div>
         <div class="col-md-6">
            <div class="row services-inner">
               <div class="col-md-12 col-sm-12">
                  <div class="feature-center animate-box" data-animate-effect="fadeIn">
                     <span class="icon">
                     <i class="icon-image"></i>
                     </span>
                     <h3>Retina Ready</h3>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <div class="feature-center animate-box" data-animate-effect="fadeIn">
                     <span class="icon">
                     <i class="icon-laptop"></i>
                     </span>
                     <h3>Fully Responsive</h3>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <div class="feature-center animate-box" data-animate-effect="fadeIn">
                     <span class="icon">
                     <i class="icon-air-play"></i>
                     </span>
                     <h3>Web Starter</h3>
                     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- third  -->
<div id="fh5co-project">
   <div class="container">
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Our Latest Work</h2>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
         </div>
      </div>
   </div>
   <div class="project-content">
      <div class="col-forth">
         <div class="project animate-box" style="background-image:url(images/project-8.jpg);">
            <a href="#" class="desc">
               <span>Application</span>
               <h3>Project Name</h3>
            </a>
         </div>
      </div>
      <div class="col-forth">
         <div class="project animate-box" style="background-image:url(images/project-1.jpg);">
            <a href="#" class="desc">
               <span>Application</span>
               <h3>Project Name</h3>
            </a>
         </div>
      </div>
      <div class="col-forth">
         <div class="project animate-box" style="background-image:url(images/project-2.jpg);">
            <a href="#" class="desc">
               <span>Application</span>
               <h3>Project Name</h3>
            </a>
         </div>
      </div>
      <div class="col-forth">
         <div class="project animate-box" style="background-image:url(images/project-3.jpg);">
            <a href="#" class="desc">
               <span>Application</span>
               <h3>Project Name</h3>
            </a>
         </div>
      </div>
   </div>
</div>
<!-- 4th  -->
<div id="fh5co-testimonial" class="fh5co-bg-section">
   <div class="container">
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Happy Clients</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-10 col-md-offset-1">
            <div class="row animate-box">
               <div class="owl-carousel owl-carousel-fullwidth">
                  <div class="item">
                     <div class="testimony-slide active text-center">
                        <figure>
                           <img src="images/person_1.jpg" alt="user">
                        </figure>
                        <span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
                        <blockquote>
                           <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                     </div>
                  </div>
                  <div class="item">
                     <div class="testimony-slide active text-center">
                        <figure>
                           <img src="images/person_2.jpg" alt="user">
                        </figure>
                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                        <blockquote>
                           <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                     </div>
                  </div>
                  <div class="item">
                     <div class="testimony-slide active text-center">
                        <figure>
                           <img src="images/person_3.jpg" alt="user">
                        </figure>
                        <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                        <blockquote>
                           <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- 5th -->
<div id="fh5co-started">
   <div class="container">
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Lets Get Started</h2>
            <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
         </div>
      </div>
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2 text-center">
            <p><a href="#" class="btn btn-default btn-lg">Get in Touch</a></p>
         </div>
      </div>
   </div>
</div>
<!-- footer -->
<footer id="fh5co-footer" role="contentinfo">
   <div class="container">
      <div class="row row-pb-md">
         <div class="col-md-4 fh5co-widget">
            <h3>A Little About Run.</h3>
            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
            <p><a class="btn btn-primary btn-outline with-arrow" href="#">Learn More <i class="icon-arrow-right"></i></a></p>
         </div>
         <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
            <ul class="fh5co-footer-links">
               <li><a href="#">About</a></li>
               <li><a href="#">Help</a></li>
               <li><a href="#">Contact</a></li>
               <li><a href="#">Terms</a></li>
               <li><a href="#">Meetups</a></li>
            </ul>
         </div>
         <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
            <ul class="fh5co-footer-links">
               <li><a href="#">Shop</a></li>
               <li><a href="#">Privacy</a></li>
               <li><a href="#">Testimonials</a></li>
               <li><a href="#">Handbook</a></li>
               <li><a href="#">Held Desk</a></li>
            </ul>
         </div>
         <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
            <ul class="fh5co-footer-links">
               <li><a href="#">Find Designers</a></li>
               <li><a href="#">Find Developers</a></li>
               <li><a href="#">Teams</a></li>
               <li><a href="#">Advertise</a></li>
               <li><a href="#">API</a></li>
            </ul>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-12 text-center">
            <p>
               designed by mike
            </p>
            <p>
            <ul class="fh5co-social-icons">
               <li><a href="#"><i class="icon-twitter"></i></a></li>
               <li><a href="#"><i class="icon-facebook"></i></a></li>
               <li><a href="#"><i class="icon-linkedin"></i></a></li>
               <li><a href="#"><i class="icon-dribbble"></i></a></li>
            </ul>
            </p>
         </div>
      </div>
   </div>
</footer>
</div>
<div class="gototop js-top">
   <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
@endsection