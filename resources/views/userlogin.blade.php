
<div class="rop">
    <h1 class="page_title">Log In</h1>
    <div class="seper"></div>
    <form action="userlogin" method="post"  class="form-inline" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <h5><input type="text" class="form-control form-control-lg" name="username" /></h5><br>
            {{ $errors->first('username') }}
            <h5><input type="password" class="form-control form-control-lg" name="password" /></h5><br>
            <button type="submit" name="btn-login" class="btn btn-info btn-lg" role="button">Log In</button>
        </div>
    </form>
    <h7>Don't have an account!!! <a href="register">Register</a> now!!</h7>
</div>

