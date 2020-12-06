@extends('layouts.manage')
@section('content')
<section id="container" >
   <header class="header black-bg">
      <a href="{{ url('/') }}" class="logo"><b>Fitness site</b></a>
      <div class="nav notify-row" id="top_menu">
         <!--  notification start -->
         <ul class="nav top-menu">
         </ul>
         <!--  notification end -->
      </div>
   </header>
   <!--header end-->
   <!--sidebar start-->
   <aside>
      <div id="sidebar"  class="nav-collapse ">
         <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="/images/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Admin {{ Auth::user()->name }}</h5>
            <li class="mt">
               <a class="active" href="#">
               <i class="fa fa-dashboard"></i>
               <span>Dashboard</span>
               </a>
            </li>
            <li class="mt">
               <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
               </form>
            </li>
         </ul>
      </div>
   </aside>
   <!--sidebar end-->

   <!--main content start-->
   <section id="main-content">
      
   </section>
   <!--main content end-->
   <!--footer start-->
   <footer class="site-footer">
      <div class="text-center">
         2014 - Alvarez.is
         <a href="{{url('/home')}}" class="go-top">
         <i class="fa fa-angle-up"></i>
         </a>
      </div>
   </footer>
   <!--footer end-->
</section>
@endsection