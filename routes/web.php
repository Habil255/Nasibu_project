<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestmonialsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;    
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PageController::class,'index'])->name('view');


Route::get('/dashhome',[AdminController::class,'index'])->name('Adminview');


Route::get('/testimonial',[IndexController::class,'index'])->name('Testimonials.view');
Route::post('/testimonial',[IndexController::class,'store'])->name('Testimonials.store');

Route::get('/',[IndexController::class,'show'])->name('index');


Route::get('/servc',[ServicesController::class,'index'])->name('ind');
Route::post('/first',[ServicesController::class,'store'])->name('service.post');
// Route::post('/ser',[ServicesController::class,'servicefirstStore'])->name('firstPart.post');
Route::post('/second',[ServicesController::class,'secondPart'])->name('secondPart.post');
Route::get('/',[ServicesController::class,'show'])->name('service.show');



Route::post('/post-question',[AboutController::class,'storeQuestion'])->name('question.post');
Route::get('/post-question',[AboutController::class,'index'])->name('');

Route::get('/form',[PageController::class,'formView'])->name('viewform');
Route::post('/form',[PageController::class,'storeIssue'])->name('issue.post');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


// Route::get('/received',[AdminController::class,'viewissue'])->name('issue.view');

Route::get('/receivedissues',[PageController::class,'showIssue'])->name('issue.show');

Route::get('/delete-issue/{id}',[PageController::class,'deleteIssue'])->name('issue.delete');

Route::get('/view-issue/{id}',[PageController::class,'show'])->name('show.issue');







//This is the Routes for sending Email

Route::post('sendemail',[SendEmailController::class,'send'])->name('email.send');

Route::post('post-issue',[PageController::class,'storeIssue'])->name('issue.post');

//This are the blog routes 
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::post('/blog',[BlogController::class,'comments'])->name('comment.post');
Route::get('/blog',[BlogController::class,'view']);

Route::get('/comments',[BlogController::class,'showComment']);
Route::get('/reply/{id}',[BlogController::class,'edit']);

Route::get('/blogpost',[BlogController::class,'blogPost']);

Route::post('/blogpost',[BlogController::class,'singlePost'])->name('blogpost.store');


