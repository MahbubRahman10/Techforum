@extends('layouts.master')

@section('content')

<div class="rop">
    <h1 class="page_title">Log In</h1>
    <div class="seper"></div>
    <form action="login" method="post"  class="form-inline" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <h5><input type="text" class="form-control form-control-lg" name="username" placeholder="Username"/>  <span>  {{ $errors->first('username')}}</span></h5><br>         
            <h5><input type="password" class="form-control form-control-lg" name="password" placeholder="password"/> <span>  {{ $errors->first('password') }}</span></h5><br>
            <button type="submit" name="btn-login" class="btn btn-info btn-lg" role="button">Log In</button>

        </div>
    </form>
    <h7>Don't have an account!!! <a href="register">Register</a> now!!</h7>
</div>
@stop
