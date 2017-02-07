@extends('layouts.app')

@section('content')
    <div id="bottom">
        <div class="container">
            <div class="row">
                <div class="panel-heading">
                    <h2>Login</h2>
                </div>
                <div class="panel-body transForm">
                    <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="col-md-8">
                            <label for="email" class="control-label">E-Mail Address</label>

                            <input id="email"
                                   type="email"
                                   class="form-control"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <div class="col-md-8">
                            <label for="password" class="control-label">Password</label>

                            <input id="password"
                                   type="password"
                                   class="form-control"
                                   name="password"
                                   required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 m-t-lg">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
