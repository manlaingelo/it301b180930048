@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-md-offset-2 text-center">
            <div class="display-t">
               <div class="display-tc animate-box" data-animate-effect="fadeIn">
                  <h1>Бидэнтэй холбогдох</h1>
                  <h2>Санал хүсэлт илгээх</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<div id="fh5co-contact">
   <div class="container">
      <div class="row">
         <div class="col-md-5 col-md-push-1 animate-box">
            <div class="fh5co-contact-info">
            <h3>Холбоо барих</h3>
               <ul>
                  <li><i class="fa fa-address-book" aria-hidden="true"> 1301, 13 ДАВХАР, СЭНТРАЛ ТАУЭР,<br> ИХ ЭЗЭН ЧИНГИС ХААНЫ НЭРЭМЖИТ ТАЛБАЙ 2,
                   <br>  СҮХБААТАР ДҮҮРЭГ, <br> УЛААНБААТАР, МОНГОЛ УЛС, 14200</i>
                  </li>
                  <li><i class="fa fa-phone-square"><a href="tel://+97686067337">+ 70107700, 70107710</a></i>
                  </li>
                  <li><i class="fa fa-envelope" aria-hidden="true"><a href="B180930048@must.edu.mn">B180930048@must.edu.mn</a></i>s</li>
                  
               </ul>
            </div>
         </div>
         <div class="col-md-6 animate-box">
         <h3>ТҮНШ БОЛОХ ХҮСЭЛТ ИЛГЭЭХ</h3>
            <form action="#">
               <div class="row form-group">
                  <div class="col-md-6">
                     <!-- <label for="fname">First Name</label> -->
                     <input type="text" id="fname" class="form-control" placeholder="БАЙГУУЛЛАГЫН НЭР">
                  </div>
                  <div class="col-md-6">
                     <!-- <label for="lname">Last Name</label> -->
                     <input type="text" id="lname" class="form-control" placeholder="ФЭЙСБҮҮК ХУУДАС">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-md-12">
                     <!-- <label for="email">Email</label> -->
                     <input type="text" id="email" class="form-control" placeholder="ХОЛБОО БАРИХ ХҮНИЙ ИМЭЙЛ">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-md-12">
                     <!-- <label for="subject">Subject</label> -->
                     <input type="text" id="subject" class="form-control" placeholder="ХОЛБОО БАРИХ ХҮНИЙ НЭР">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-md-12">
                     <!-- <label for="message">Message</label> -->
                     <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Санал"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary">
               </div>
            </form>
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
@endsection