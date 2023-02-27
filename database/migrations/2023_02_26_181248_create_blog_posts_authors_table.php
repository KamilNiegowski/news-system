<?php
    
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Schema;
    
    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create( 'blog_posts_authors', function ( Blueprint $table ) {
                $table->Integer( 'post_id' );
                $table->Integer( 'author_id' );
            } );
            
            $sql = file_get_contents( database_path( 'DB/news_system.sql' ) );
            DB::unprepared( $sql );
        }
        
        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists( 'blog_posts_authors' );
        }
    };
