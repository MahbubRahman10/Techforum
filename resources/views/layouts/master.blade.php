<!DOCTYPE html>
<html>
<head>
    <title>Techforum</title>
      @include('sections.head')
</head>
<body>
      @include('sections/nav')
        <div class="container">
            <div class="mahbub">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8"> 
                            @yield('content')
                        </div>
        
                           @include('sections.side')
                    </div>
                </div>
            </div>  
        </div>  
@include('sections.footer')    
@include('sections.scripts')

</body>      