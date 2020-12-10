@extends('layouts.app')
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-md-offset-2 text-center">
            <div class="display-t">
               <div class="display-tc animate-box" data-animate-effect="fadeIn">
                  <h1>Бидний тухай</h1>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<div id="fh5co-about">
   <div class="container">
      <div class="about-content">
         <div class="row animate-box">
            <div class="col-md-6 col-md-push-6">
               @foreach($pages as $page)
               @if($page->id==2)
               <img class="img-responsive" src="{{ Voyager::image( $page->image ) }}" alt="about">
               @endif
               @endforeach
            </div>
            <div class="col-md-6 col-md-pull-6">
               <div class="desc">
                  @foreach($pages as $page)
                  @if($page->id==2)
                  <h3>{{$page->title}}</h3>
                  <p>
                  <p>{{$page->body}}</p>
                  </p>
                  @endif
                  @endforeach
                  @foreach($pages as $page)
                  @if($page->id==2)
                  <ul>
                     <li>{{$page->excerpt}}</li>
                  </ul>
                  @endif
                  @endforeach
               </div>
            </div>
         </div>
      </div>
      <div class="row animate-box">
         <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Дасгалжуулагчид</h2>
            <p>Эелдэг найрсаг хамт олон таныг угтаж байна.</p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
            <div class="fh5co-staff">
               <img src="images/t2.jpg" alt="Free HTML5 Templates by gettemplates.co">
               <h3>Энхтуул</h3>
               <strong class="role">АШУҮИС 2011-2016
               Шилдэг оюутан 2016
               Олон нийтийн гиминастикийн 2-р зэрэг</strong>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
            <div class="fh5co-staff">
               <img src="images/t1.jpg" alt="Free HTML5 Templates by gettemplates.co">
               <h3>Hush Raven</h3>
               <strong class="role">"Голден жим фитнес клубын захирал</strong>
            </div>
         </div>
         <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
            <div class="fh5co-staff">
               <img src="images/t3.jpg" alt="Free HTML5 Templates by gettemplates.co">
               <h3>Э.Уранзаяа</h3>
               <strong class="role">Spinning , Zumba  аэробик хичээлүүдийн багш</strong>
            </div>
         </div>
      </div>
   </div>
</div>
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
               <hr>
               <p><a type="button" class="btn btn-default btn-lg">Илгээх</a></p>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- footer -->
<footer id="fh5co-footer" role="contentinfo">
   <div class="container">
      <div class="row row-pb-md">
         <div class="col-md-4 fh5co-widget">
            <h3>Фитнесс сайтын тухай</h3>
            <p>Фитнесс сайт бол шинэ зууны фитнесийн гишүүнчлэл юм. Өдөр бүр шинэ хөдөлгөөн хийж, өөрийн биед таарсан фитнес болон спортын төрлийг олох боломжийг танд олгоно.</p>
            <p><a class="btn btn-primary btn-outline with-arrow" href="\aboutus">Дэлгэрэнгүй<i class="icon-arrow-right"></i></a></p>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1">
            <ul class="fh5co-footer-links">
               <li><a href="#"> БИДНИЙ ТУХАЙ</a></li>
               <li><a href="#">ҮЙЛЧИЛГЭЭНИЙ НӨХЦӨЛ</a></li>
               <li><a href="#">НУУЦЛАЛЫН НӨХЦӨЛ</a></li>
               <li><a href="#">ТӨЛБӨРИЙН ТУХАЙ</a></li>
            </ul>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1">
            <ul class="fh5co-footer-links">
               <li>
                  <p>Танд ямар нэгэн асуулт байвал бидэнтэй утсаар эсхүл имэйлээр холбогдож болно.</p>
               </li>
               <li><a href="#">b180930048@must.edu.mn</a></li>
               <li><a href="#">#1301, 13 ДАВХАР, СЭНТРАЛ ТАУЭР, ИХ ЭЗЭН ЧИНГИС ХААНЫ НЭРЭМЖИТ ТАЛБАЙ 2, СҮХБААТАР ДҮҮРЭГ, УЛААНБААТАР, МОНГОЛ УЛС, 14200</a></li>
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