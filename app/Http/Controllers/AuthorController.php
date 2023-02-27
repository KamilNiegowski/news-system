<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\BlogAuthors;
    use DB;
    use Illuminate\Support\Carbon;

    class AuthorController extends Controller
    {
        public function topAuthors()
        {
            $startDate = Carbon::now()->subWeek();
            $endDate = Carbon::now();
            
            $authors = BlogAuthors::select( 'blog_authors.id', 'blog_authors.name', DB::raw( 'COUNT(blog_posts_authors.post_id) as post_count' ) )
                ->join( 'blog_posts_authors', 'blog_posts_authors.author_id', '=', 'blog_authors.id' )
                ->join( 'blog_posts', 'blog_posts.id', '=', 'blog_posts_authors.post_id' )
                ->whereBetween( 'blog_posts.created_at', [ $startDate, $endDate ] )
                ->groupBy( 'blog_authors.id', 'blog_authors.name' )
                ->orderByRaw( 'COUNT(blog_posts_authors.post_id) DESC' )
                ->take( 3 )
                ->get();
            
            return view( 'news.top_authors', [ 'authors' => $authors ] );
            
            
        }
    }
