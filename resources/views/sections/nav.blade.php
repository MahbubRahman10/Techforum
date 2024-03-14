<header class="main__header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"a-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a><img class="navbar-brand" src="/img/logo.png" ></a>
        <a href="#" onclick="javascript.void()" class="submenu">Menus</a>
      </div>
<?php $up=Request::path();?>
      <div class="menuBar">
        <ul class="menu">
          <li><a href="/techforum" >Home</a></li>
          <li ><a href="/about">About</a></li>
             <li id="dropdown1" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Categories</a>
              <ul class="dropdown-menu">
              @foreach ($category as $values)
                  <li><a href="{{ URL('/category='.$values->category_id)}}">{{ $values->category_name }}</a></li>
             @endforeach 
       </ul>
             </li>
         

            @if(Auth::user())

            <li><a href="{{ URL('/profile='.Auth::user()->id )}}">Profile</a></li>
           
            <li><a href="question">Questiom</a></li>
           <li><a href="{{ url('log') }}">Logout</a></li>
            
            @else

        <li ><a href="/login">Login</a></li>
        <li ><a href="/register">Register</a></li>

            @endif


		 
		       
        </ul>
      </div>
    </nav>
  </div>
</header>
