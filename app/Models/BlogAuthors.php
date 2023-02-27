<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class BlogAuthors extends Model
    {
        use HasFactory;
        
        protected $fillable = [ 'name' ];
        
        public function posts()
        {
            return $this->belongsToMany( BlogPost::class, 'blog_posts_authors', 'author_id', 'post_id' );
        }
        
    }
