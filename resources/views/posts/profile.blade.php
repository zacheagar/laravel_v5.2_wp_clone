@extends ('layouts.master')

@section ('content')

 <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
                     
          <h1 class="jumbotron-heading">Profile Information</h1>
         
           <h2>Name:{{ Auth::user()->name }}</h2><br>
           <h2>Email:{{ Auth::user()->email }}</h2><br>
           <h2 class>My Posts:</h2>
           
           
          @foreach (auth::user()->posts as $post) 
           <h2>{{$post->title}}</h2>
           <h3> {{ $post->created_at->toFormattedDateString() }} </h3>

           <h2>{{$post->body}}</h2>
           @endforeach
         
         
        </div>
      </section>
     
   
    </main>



@endsection