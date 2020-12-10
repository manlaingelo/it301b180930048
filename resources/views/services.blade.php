@extends('layouts.app')
@section('head')
<style>
.rounded-lg {
  border-radius: 1rem !important;
}

.text-small {
  font-size: 0.9rem !important;
}

.custom-separator {
  width: 5rem;
  height: 6px;
  border-radius: 1rem;
}

.text-uppercase {
  letter-spacing: 0.2em;
}
</style>
@endsection
@section('content')
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-md-offset-2 text-center">
            <div class="display-t">
               <div class="display-tc animate-box" data-animate-effect="fadeIn">
                  <h1>ТӨЛБӨРИЙН ТУХАЙ</h1>
                  <h2>Гишүүнчлэлийн багцын төлбөр төлөх боломжууд</h2>
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
         
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
               <h2>ТӨЛБӨР ТӨЛӨХ БОЛОМЖУУД:</h2>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
               <div class="fh5co-staff">
                  <h3>ОНЛАЙНААР ТӨЛБӨР ХИЙХ</h3>
                  <strong class="role">ТА Fitness site АПП РУУ ӨӨРИЙН АККАУНТААР НЭВТЭРЧ, ТӨЛБӨР ГЭСЭН ХЭСГЭЭС ГИШҮҮНЧЛЭЛИЙН БАГЦЫГ СОНГОН, АЛЬ Ч БАНКНЫ ТӨЛБӨРИЙН КАРТ АШИГЛАН 24 ЦАГИЙН ТУРШ ОНЛАЙНААР ЦАГ АЛДАЛГҮЙ ТӨЛБӨР ТӨЛӨХ БОЛОМЖТОЙ.</strong>
               </div>
            </div>
            <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
               <div class="fh5co-staff">
                  <h3>MOST MONEY, SMART BANK АПП-ААР ТӨЛӨХ</h3>
                  <strong class="role">ТА MOST MONEY ЭСХҮЛ SMART BANK АПП-НЫ ҮЙЛЧИЛГЭЭГ АШИГЛАН ТӨЛБӨР ТӨЛӨХ БОЛОМЖТОЙ. ХЭРЭВ ТА MOST MONEY ЭСХҮЛ SMART BANK АПП-Д БҮРТГҮҮЛЖ АМЖААГҮЙ БОЛ ХХБ ЭСХҮЛ ГОЛОМТ БАНКНЫ САЛБАРУУДАД ГАР УТАС, ЦАХИМ ҮНЭМЛЭХТЭЙГЭЭ ОЧИЖ БҮРТГҮҮЛЭЭРЭЙ.</strong>
               </div>
            </div>
            <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
               <div class="fh5co-staff">
                  <h3>БАНКААР ТӨЛӨХ</h3>
                  <strong class="role">ТА ХХБ, ГОЛОМТ, ХААН БАНКНЫ МОБАЙЛ, ИНТЕРНЕТ БАНК ҮЙЛЧИЛГЭЭГ АШИГЛАН ЭСХҮЛ ӨӨРТ ОЙР БАЙРЛАХ БАНКНЫ САЛБАРААС ТӨЛБӨР ТӨЛӨХ БОЛОМЖТОЙ.</strong>
               </div>
            </div>
         </div>
      </div>
      
   </div>
</div>
<div id="fh5co-started">
         <div class="container">
            <div class="row animate-box">
               <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                  <h2>ГИШҮҮНЧЛЭЛИЙН ТӨРЛҮҮД</h2>
               </div>
            </div>
            <div class="row animate-box">
            <section>
  <div class="container py-5">
    <div class="row text-center align-items-end">
      <!-- Pricing Table-->
      @foreach($payments as $data)
      <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="bg-white p-5 rounded-lg shadow">
          <h1 class="h6 text-uppercase font-weight-bold mb-4">{{$data->paymentname}}</h1>
          <h2 class="h1 font-weight-bold">{{$data->typeamount}}<span class="font-weight-normal ml-2"><br>төгрөг/Сар</span></h2>

          <div class="custom-separator my-4 mx-auto bg-primary"></div>

          <ul class="list-unstyled my-5 text-left font-weight-normal">
            <li class="mb-3">
              </i> {{$data->detailone}}</li>
            <li class="mb-3">
              </i> {{$data->detailtwo}}</li>
            <li class="mb-3">
              </i> {{$data->detailthree}}</li>
            <li class="mb-3">      
              <del>{{$data->detailfour}}</del>
            </li>
            <li class="mb-3 text-muted">
              <del>{{$data->detailfive}}</del>
            </li>
          </ul>
          <a href="#" class="btn btn-primary btn-block">Төлөх</a>
        </div>
      </div>
      @endforeach
      <!-- END -->

    </div>
  </div>
</section>
            </div>
         </div>
      </div>
@endsection