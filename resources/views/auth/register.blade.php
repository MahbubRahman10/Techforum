@extends('layouts.master')
@section('content')
<div class="rop">
<h1 class="page_title">Register</h1>
<div class="seper"></div>

    <form method="post" action="register" class="form-inline" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <h5><input type="text" class="form-control" name="name" placeholder="Name"/></h5>
            <h5><input type="text" class="form-control" title="username must contain at least one letter & one number" name="username" placeholder="Username" /></h5>
            <h5><input type="email" class="form-control" name="email" placeholder="Email"/></h5>
            <h5><input type="password" title="Password must contain at least six characters" class="form-control" name="password" placeholder="Password" /></h5>
            <h5><input type="password" title="Password must contain at least six characters" class="form-control" name="repassword" placeholder="Repassword"/></h5><br>  
            <button type="submit" class="btn btn-info btn-lg" name="btn-reg"  role="button">Register</button>
        </div>
    </form>
</div>
@stop