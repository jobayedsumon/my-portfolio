<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/storage-link', function() {
  Artisan::call('storage:link');
  dd('done');
});

Route::get('/optimize-clear', function() {
  Artisan::call('optimize:clear');
   dd('done');
});

Route::get('/test-mail', function() {
  try {
          $data = [
          	'message' => 'hello'
          ];
           Mail::send('email_view', compact('data'), function ($m) {
                $m->from(env('MAIL_FROM_ADDRESS'), 'Jobayed Sumon');
                $m->to(env('MAIL_TO_ADDRESS'))->subject('Testing...');
            });
			dd("Mail Sent Successfully!");
        } catch (\Exception $exception) {
            dd($exception->getMessage());
        }
});

Route::get('/email-template', function() {
  $data = [
    'name' => 'Jobayed Sumon',
    'email' => 'sumonjobayed@gmail.com',
    'subject' => 'Website Development',
    'message' => 'Hi, I want to develop a website. Can you do it?'
  ];
  
   return view('email_view', compact('data'));
});



Route::get('/', [FrontendController::class, 'index']);
Route::post('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
