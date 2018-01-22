@extends('layouts.master')

@section('content')
<div class="col-sm-4 offset-sm-4 blog-main">
<h1>{{$post->title}}</h1>
<h3> {{ $post->created_at->toFormattedDateString() }} </h3>

<h2>{{$post->body}}</h2>

<div class="comments">
    @foreach ($post->comments as $comment)
      <article>
          {{$comment->body}}
           {{ $comment->post->user['name']}}
           
           {{$comment->created_at->diffForHumans()}}
      </article>
    @endforeach
</div>
<div
<form method="POST" action="/posts/{{ $post->id }}/comments">

    {{csrf_field()}}
<textarea name="body" placeholder="Your comment here." class="form-control">
  </textarea>
<br>
  <button type="submit" class="btn btn-primary">Add Comment </button>

</form>
@endsection