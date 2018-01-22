@if (count($posts) === 0)
<h1>No post found </h1>
@elseif (count($posts) >= 1)
     print out results
    @foreach($posts as $post)
    print post
    @endforeach
@endif