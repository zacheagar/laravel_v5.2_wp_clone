<div class="blog-post">
   
    <div class="col-sm-12 blog-main">
        <div class="blog-post">
             <a href="/posts/{{ $post->id }}" >
            <h1 class="jumbotron-heading">{{ $post->title }}</h1>
            </a>
           
            <p class="blog-post-meta">{{ $post->user['name']}} on {{ $post->created_at->toFormattedDateString() }}</p>
            <p class="lead text-muted">{{ $post->body }}</p>
         </div>
    </div>
</div>