<?php

    namespace App\Http\Controllers;
    
        use Illuminate\Http\Request;
        
        use App\Http\Requests;
             
        use App\Post;
        
         use App\User;
        
        

class PostsController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index(request $request){
        
        $posts = Post::where(function($query) use ($request){
            
            // if( ($post = $request->get("post") ) )
                
            //     $query->where("post",$posts);
            if(($term = $request->get('term'))){
                $query->where('title', 'like', '%'. $term . '%');
            }
        })->orderBy("id","desc")->paginate(10);
        // $posts = Post::latest()->get();
        
        return view("posts.index", ['posts' => $posts]);
        
        
    }
     public function show(Post $post){
       
        return view('posts.show',compact('post'));
        
    }
    
        public function create(){
        
        return view('posts.create');
        
    }
    public function store(Request $request)
    {
      
     
          
       $post = new Post();

       $post->title = request('title');

       $post->body = request('body');
       
       $request->user()->posts()->save($post);

      

       return redirect('/');


      
    }
   
   public function userProfile(User $user){
      
     
      
     return view('posts.profile',compact('user'));
}

}