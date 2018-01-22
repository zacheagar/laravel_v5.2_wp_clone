@extends ('layouts.master')

@section ('content')

 <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
                     
          
         
          
          @foreach ($posts as $post)
           @include ('posts.article')
          @endforeach
          
        </div>
      </section>
     
   
    </main>

@endsection