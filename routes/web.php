<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


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

Route::get('/', 'HomeController@homepage')->name('index');
Route::get('home-logout', 'HomeController@logout')->name('home.logout');




Route::group(['prefix'=>'pages'], function(){
	Route::get('/about', 'HomeController@about')->name('about');
	Route::get('/blog', 'HomeController@blog')->name('blog');
	Route::get('/blog/{slug}', 'HomeController@blog_detail')->name('blog-detail');
	Route::get('/blog-search','HomeController@blogsearch')->name('blog-search');
	
	// Comment and Reply
	Route::post('/blog/{slug}/comment', 'HomeController@comment')->name('comment');
	Route::post('/blog/{slug}/{id}/reply', 'HomeController@reply_comment')->name('reply-comment');

	Route::get('/contact','HomeController@contact')->name('contact');
	Route::get('/faq', 'HomeController@faq')->name('faq');
	Route::get('/gallery', 'HomeController@gallery')->name('gallery');
	Route::get('/gallery/{slug}', 'HomeController@gallery_destination')->name('gallery-destination');
	Route::get('/service', 'HomeController@service')->name('service');
	Route::get('account','HomeController@login')->name('account');
	Route::post('account','HomeController@post_login')->name('postlogin');
	Route::get('register', 'HomeController@register')->name('customer_register');
	Route::post('register', 'HomeController@post_register')->name('customer_post_register');
		
	Route::get('account-info', 'HomeController@account')->name('account-info');
	Route::put('account-info', 'HomeController@updateInfo')->name('update-info');
	Route::put('acount-info/new-password', 'HomeController@updatePassword')->name('update-password');
	Route::get('reset-password/{token}', 'HomeController@resetPassword')->name('reset-password');
	Route::post('reset-password', 'HomeController@postresetPassword')->name('post-reset-password');
	Route::post('password-save', 'HomeController@passwordSave')->name('password-save');

	Route::get('contact', 'HomeController@contact')->name('contact');
	Route::post('contact', 'HomeController@postcontact')->name('postcontact');

	Route::get('booking-success', 'BookingController@success')->name('booking.success');
	Route::post('booking/{id}', 'BookingController@submit_form')->name('booking');

	Route::get('tour-search', 'HomeController@toursearch')->name('search');
	Route::get('tour-list', 'HomeController@tourlist')->name('tourlist');

	Route::post('info-receive', 'HomeController@info_receive')->name('info-receive');
	Route::get('/{slug}', 'HomeController@destination')->name('home.destination');//để slug cuối cùng vì nếu để ở trên máy chủ có thể duyệt tìm cái tên slug trong database của những trang khác
	//Rating
	Route::post('/{slug}/rating','HomeController@rating')->name('home.rating');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/error', 'Admin\DashboardController@error')->name('admin.error');

Route::group(['middleware' => ['auth','admin'], 'prefix'=> 'admin', 'as' => 'admin.'], function(){
	Route::get('/', 'Admin\DashboardController@dashboard')->name('dashboard');

	Route::get('file-manager',function(){
		return view('admin.file');
	})->name('file');
	Route::resource('destination','Admin\DestinationController');
	Route::get('destinationStatus', 'Admin\DestinationController@destinationStatus')->name('destination.status');
	Route::resource('package','Admin\PackageController');
	Route::get('packageStatus', 'Admin\PackageController@packageStatus')->name('package.status');
	Route::resource('tour','Admin\TourController');
	Route::get('tourStatus', 'Admin\TourController@tourStatus')->name('tour.status');
	Route::get('booking', 'Admin\BookingController@admin_index')->name('booking');
	Route::get('booking/{action}/{id}', 'Admin\BookingController@getStatus')->name('booking.status');
	Route::delete('booking/{booking}', 'Admin\BookingController@destroy')->name('booking.destroy');
	Route::resource('role','Admin\RoleController');
	Route::resource('user', 'Admin\UserController');
	Route::resource('gallery', 'Admin\GalleryController');
	Route::get('galleryStatus', 'Admin\GalleryController@galleryStatus')->name('gallery.status');
	Route::resource('blog', 'Admin\BlogController');
	Route::get('blogStatus', 'Admin\BlogController@blogStatus')->name('blog.status');
	Route::resource('tag', 'Admin\TagController');
	Route::get('tagStatus', 'Admin\TagController@tagStatus')->name('tag.status');
	Route::get('add_account', 'Admin\UserController@add')->name('add_account');
	Route::resource('rating','Admin\RatingController');
	Route::get('ratingStatus','Admin\RatingController@ratingStatus')->name('rating.status');
	Route::resource('comment','Admin\CommentController');
	Route::get('commentStatus','Admin\CommentController@commentStatus')->name('comment.status');
	Route::resource('faq_category', 'Admin\FaqCategoryController');
	Route::get('faqcategoryStatus','Admin\FaqCategoryController@faqcategoryStatus')->name('faq_category.status');
	Route::resource('faq','Admin\FaqController');
	Route::get('faqStatus','Admin\FaqController@faqStatus')->name('faq.status');

	Route::resource('tourguide', 'Admin\TourguideController');		
});
