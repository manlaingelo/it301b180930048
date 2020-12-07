@extends('layouts.app')
@section('content')
  <div id="sidebar">
      hello dashboard
      <div class="adminmenu">
      <admin-menu :items="{{ menu('user', '_json')}}"></admin-menu> 
      </div>
  </div>
@endsection