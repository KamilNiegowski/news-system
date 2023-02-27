<?php
    
    use App\Http\Controllers\AuthorController;
    use App\Http\Controllers\BlogPostController;
    use Illuminate\Support\Facades\Route;
    
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */
    
    Route::get( '/', function () {
        return view( 'welcome' );
    } );
    Route::get( '/news', [ BlogPostController::class, 'index' ] );
    Route::get( '/news/{blogPost}', [ BlogPostController::class, 'show' ] );
    Route::get( '/news/create/news', [ BlogPostController::class, 'create' ] );
    Route::post( '/news/create/news', [ BlogPostController::class, 'store' ] );
    Route::get( '/news/{blogPost}/edit', [ BlogPostController::class, 'edit' ] );
    Route::put( '/news/{blogPost}/edit', [ BlogPostController::class, 'update' ] );
    Route::delete( '/news/{blogPost}', [ BlogPostController::class, 'destroy' ] );
    Route::get( '/top-authors', [ AuthorController::class, 'topAuthors' ] );

