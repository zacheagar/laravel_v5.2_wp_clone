 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
 <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 py-4">
             
              
            </div>
            <div class="col-sm-4 py-4">
              
              <ul class="list-unstyled">
               
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
         
          <a href={!! url('/posts/profile'); !!}  class="nav-link  navbar-brand ">{{ Auth::user()->name }}</a> 
          <a href={!! url('/posts/create'); !!}  class="nav-link  navbar-brand ">Create</a> 
            
        
          <!--{{ Form::open(['method' => 'GET']) }}-->
          <!--  {{ Form::input('search' , 'q' , null, ['placeholder' => 'Search']) }}-->
          <!--{{ Form::close() }}-->
          {!!Form::open(['url' => '/posts/home','method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
          
          {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search']) !!}
            
              
         
            {!! Form::close() !!}
        </div>
  
      <ul class="nav navbar-nav navbar-left">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="nav-item">
        
      </li>
                           
                            <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out "></i>Logout</a>
                                
                            </ul>
                        </li>
                    @endif
                
     </div>
     
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}