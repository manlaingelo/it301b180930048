@extends('layouts.loginapp')

@section('content')
<div class="home-login-image">
   <div class="home-inside">
<div class="container">
    <div class="row">
        <div class="card" style="width:450px; height:300px;">
     
                <div class="card-header">{{ __('Нууц үгээ солих<') }}</div>
                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Цахим хаяг</label>

                            <div class="col-md-1-">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-mt-1 col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Нууц үгээ шинэчлэх
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
