<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class BlogPost extends Model
    {
        use HasFactory;
        
        protected $table = 'blog_posts';
        
        protected $fillable = [ 'title', 'content' ];
        
        public function authors()
        {
            return $this->belongsToMany( BlogAuthors::class, 'blog_posts_authors', 'post_id', 'author_id' );
        }
    }
