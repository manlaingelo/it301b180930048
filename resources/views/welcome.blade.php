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
                  @if($page->slug=="welcome")
                     <h1> <strong>{{ $page->title }}</strong> <br/>{{ $page->excerpt }}</h1>
                     @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="btn btn-primary btn-lg with-arrow">{{ __('Бүртгүүлэх') }}</a>
                      @endif
                  @endif
                  @endforeach
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            @foreach($pages as $page)
            <div class="welcome-logo">
               @if($page->id==1)
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
               @if($page->id==1)
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
                     <h3>Нэг гишүүнчлэлээр</h3>
                     <p>Хүссэн үедээ, хүссэн фитнес клуб, бялдаржуулах төвүүдээр үйлчлүүлэн иог, аэробик, бүжиг, бие хамгаалах урлаг, теннис зэргээр хичээллэх боломжтой. Бүх төрлийн спорт, фитнесийг нэг гишүүнчлэлээр.</p>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <div class="feature-center animate-box" data-animate-effect="fadeIn">
                     <span class="icon">
                     <i class="icon-laptop"></i>
                     </span>
                     <h3>7 ХОНОГ</h3>
                     <p>Фитнес, спортын хамгийн өргөн сонголт. Хэзээ ч уйдахгүй!</p>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <div class="feature-center animate-box" data-animate-effect="fadeIn">
                     <span class="icon">
                     <i class="icon-air-play"></i>
                     </span>
                     <h3>Зөвөлгөө</h3>
                     <p>Ганцхан товч дараад л таалагдсан үйлчилгээгээ захиална.</p>
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
            <h2>Бидний санал болгож буй зүйлс</h2>
            <p>Хэрэгцээт дасгал хөдөлгөөн, эрүүл хооллотын талаарх мэдээ мэдээллийг танд хүргэнэ.</p>
         </div>
      </div>
   </div>
   <div class="project-content">
      @foreach($posts as $post)
      @if($post->category_id==2)
      <div class="col-forth">
         <div class="project animate-box" style="background-image:url({{ Voyager::image( $post->image ) }});">
            <a href="/home/{{$post->slug}}" class="desc">
               <span>{{ $post->title }}</span>
               <h3>{{ $post->excerpt }} </h3>
            </a>
         </div>
      </div>
      @endif
      @endforeach
   </div>
</div>
<!-- 4th  -->

<!-- 5th -->
<div id="fh5co-started">
   <div class="container">
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>ИМЭЙЛЭЭ БҮРТГҮҮЛЭХ</h2>
            <p>Шинэ мэдээ, мэдээллээс хэзээ ч хоцрохгүй.</p>
         </div>
      </div>
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2 text-center">
         <form>
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <p><a type="button" class="btn btn-default btn-lg">Илгээх</a></p>
            </form>
         </div>
      </div>
   </div>
</div>

</div>
<div class="gototop js-top">
   <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
@endsection