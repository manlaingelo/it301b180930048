@extends('layouts.manage')
@section('head')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
body { margin-top:20px; }
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px; }</style>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Төлбөр төлөх
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber"> Хүлээн авагчийн банк</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" value="ХААН Банк" readonly />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cardNumber"> Хүлээн авагчийн данс</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" value="Дансны дугаар" readonly />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cardNumber"> Хүлээн авагчийн нэр</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" value="Хүлээн авагчийн нэр" readonly />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cardNumber"> Гүйлгээний дүн</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" value="170'000" readonly />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cardNumber"> Гүйлгээний утга</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" value="{{Illuminate\Support\Str::random(7)}}" readonly />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-ok"></span>170'000</span> Сарын төлбөр</a>
                </li>
            </ul>
            <br/>
            <button class="btn btn-success btn-lg btn-block" onClick="window.open('https://e.khanbank.com/pageLoginMini');">
            <span class="icon">Төлөх</span>
            </button>
        </div>
    </div>
</div>

@endsection
