@extends('layouts.app')

@section('content')
    <div id="bottom">
        <div class="container">
            <div class="row">
                <div class="panel-heading "><h1>Reģistrēties</h1></div>

                <div class="panel-body transForm">
                    <form class="form" role="" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="col-md-8">
                            <label for="name" class="control-label">Kompānijas nosaukums</label>

                            <input id="name"
                                   type="text"
                                   class="form-control"
                                   name="name"
                                   value="{{ old('name') }}"
                                   required
                                   autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="col-md-8">
                            <label for="email" class="control-label">E-pasta adrese</label>

                            <input id="email"
                                   type="email"
                                   class="form-control"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="col-md-8">
                            <label for="password" class="control-label">Parole</label>

                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="col-md-8">
                            <label for="password-confirm" class="control-label">Parole atkāŗtoti</label>

                            <input id="password-confirm"
                                   type="password"
                                   class="form-control"
                                   name="password_confirmation"
                                   required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-6 ">
                            <button type="submit" class="btn btn-primary">
                                Reģistrēties
                            </button>
                            <a href="/" class="btn btn-primary">Atcelt</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
