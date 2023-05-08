<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Auth\SocialLoginController;
use GuzzleHttp\Psr7\Request;
use Spatie\Sitemap\SitemapGenerator;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * BEGIN: Injected from .gp/snippets/laravel/routes/web/allow-mixed-web.snippet
 */

$url = config('app.url');
resolve(\Illuminate\Routing\UrlGenerator::class)->forceRootUrl($url);
resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');

/**
 * END: Injected from .gp/snippets/laravel/routes/web/allow-mixed-web.snippet
 */

require __DIR__ . '/jetstream.php';

/**
 * General Links
 */
Route::get('/', function () {
    return view('caraballo-home');
})->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

// CALENDAR
// Route::get('calendar', [FullCalendarController::class, 'index']);
Route::controller(FullCalendarController::class)->group(function () {
    Route::get('calendar', 'index')->name('calendar');
    Route::post('calendarAjax', 'ajax');
});

// Route::get('/blog', function () {
//     return view('blog.blog');
// })->name('blog');

// Route::get('blog', 'Blog\BlogController@index')->name('blog');
// Route::get('blog/show/{id}', 'Blog\BlogController@show')->name('article');
Route::get('blog', [BlogController::class, 'blog'])->name('blog');
Route::get('blog/post/{url}', [BlogController::class, 'post'])->name('post');
Route::get('blog/category/{category}', [BlogController::class, 'category'])->name('post.category');
Route::get('blog/author/{writer}', [BlogController::class, 'author'])->name('post.writer');
Route::get('blog/tag/{tag}', [BlogController::class, 'tag'])->name('post.tag');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contact', [ContactController::class, 'store'])->name('contact_store');

/**
 * Compliance Links
 */
Route::get('/terms-of-use', function () {
    return view('compliance.terms');
})->name('terms');

Route::get('/privacy-policy', function () {
    return view('compliance.privacy');
})->name('privacy');







/**
 * Socialite Login Links
 */
Route::get('/login/social/{provider}', [SocialLoginController::class, 'redirect'])->name('social.redirect');
Route::get('/login/social/{provider}/callback', [SocialLoginController::class, 'callback']);

/**
 * Dashboard Links
 */
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');
});

/**
 * Utilities Links
 */
/* Manually generate sitemap */
Route::get("generate-sitemap", function () {

    SitemapGenerator::create('https://onlinewebtutorblog.com/')->writeToFile(public_path('sitemap.xml'));
    dd("done");
});

Route::get('/sitemap', function () {
    return view('sitemap');
})->name('sitemap');

Route::get('/appinfo', function () {
    return view('utilities.appinfo');
});



/**
 * Development Links
 */
Route::get('/template', function () {
    return view('dev.template');
});

Route::get('/test', function () {
    return view('dev.test');
});

Route::get('/maintenance', function () {
    return view('dev.maintenance');
});

Route::get('/documetation', function () {
    return view('docs.docs');
});
