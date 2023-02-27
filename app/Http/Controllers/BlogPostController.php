<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\BlogPost;
    use Illuminate\Http\Request;


    class BlogPostController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $posts = BlogPost::all();
            return view( 'news.index', [
                'posts' => $posts,
            ] );
        }
        
        /**
         * Store a newly created resource in storage.
         */
        public function store( Request $request )
        {
            $newPost = BlogPost::create( [
                'title' => $request->title,
                'content' => $request->body,
            
            ] );
            
            return redirect( 'news/' . $newPost->id );
        }
        
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view( 'news.create' );
        }
        
        /**
         * Display the specified resource.
         */
        public function show( BlogPost $blogPost )
        {
            return view( 'news.show', [
                'post' => $blogPost,
            ] );
            
        }
        
        /**
         * Show the form for editing the specified resource.
         */
        public function edit( BlogPost $blogPost )
        {
            return view( 'news.edit', [
                'posts' => $blogPost,
            ] );
        }
        
        /**
         * Update the specified resource in storage.
         */
        public function update( Request $request, BlogPost $blogPost )
        {
            $blogPost->update( [
                'title' => $request->title,
                'content' => $request->body
            ] );
            
            return redirect( 'news/' . $blogPost->id );
        }
        
        /**
         * Remove the specified resource from storage.
         */
        public function destroy( BlogPost $blogPost )
        {
            $blogPost->delete();
            
            return redirect( '/news' );
        }
        
    }
