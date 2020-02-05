<?php

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

Route::get('/', function () {
    return redirect(url(config('constants.ADMIN_URL')));
});

Auth::routes();

Route::get('admin', array('uses' => 'Admin\UserController@login'));
Route::post('admin/doLogin', array('uses' => 'Admin\UserController@doLogin'));
Route::get('admin/logout', array('uses' => 'Admin\UserController@logout'));
Route::post('admin/resetPass', array('uses' => 'Admin\UserController@resetPass'));

Route::get('admin/logout', array('uses' => 'Admin\UserController@logout'));

Route::group(['middleware' => 'checkUserLogin', 'prefix' => config('constants.ADMIN_URL')], function() {

	Route::get('dashboard', array('uses' => 'Admin\UserController@dashboard'));
	Route::get('listusers', array('uses' => 'Admin\UserController@list_users'));
	Route::get('ajaxListusers', array('uses' => 'Admin\UserController@ajaxListusers'));
	Route::get('listusers/exportcsv', array('uses' => 'Admin\UserController@export_csv'));
	Route::post('deleteusers', array('uses' => 'Admin\UserController@delete_users'));

	Route::post('updatestatus', array('uses' => 'Admin\UserController@update_status'));
	Route::get('usersedit/{id}', array('uses' => 'Admin\UserController@users_edit'));
	Route::get('usersdetails/{id}', array('uses' => 'Admin\UserController@user_details'));
	Route::post('usersupdate/{id}', array('uses' => 'Admin\UserController@users_update'));
	Route::get('change-password', array('uses' => 'Admin\UserController@change_password'));
	Route::post('savechangepassword', array('uses' => 'Admin\UserController@save_change_password'));
	Route::get('update-profile', array('uses' => 'Admin\UserController@get_profile'));
	Route::post('saveprofile', array('uses' => 'Admin\UserController@update_profile'));
	Route::post('uploadimage', array('uses' => 'Admin\PlaceController@upload_image'));
    Route::post('uploadprofileimage', array('uses' => 'Admin\UserController@upload_image'));
	Route::get('addcars', array('uses' => 'Admin\CarsController@add_cars'));
	Route::post('saveCars', array('uses' => 'Admin\CarsController@saveCars'));
	Route::get('addcars/{id?}', array('uses' => 'Admin\CarsController@add_cars'))->name('addcars');
	Route::post('carImage', array('uses' => 'Admin\CarsController@carImage'));
	Route::post('deletecarimage', array('uses' => 'Admin\CarsController@deletecarimage'));
	Route::get('listcars', array('uses' => 'Admin\CarsController@list_cars'));
	Route::get('ajaxlistcars', array('uses' => 'Admin\CarsController@ajaxListcars'));
	Route::post('deletecar', array('uses' => 'Admin\CarsController@delete_car'));
	Route::post('changecarStatus', array('uses' => 'Admin\CarsController@changecarStatus'));
	Route::post('brandImage', array('uses' => 'Admin\CarsController@brandImage'));
    Route::post('deletebrandimage', array('uses' => 'Admin\CarsController@deletebrandimage'));
	
	//dealer
    Route::get('adddealer', array('uses' => 'Admin\DealerController@add_dealer'));
	Route::post('saveDealer', array('uses' => 'Admin\DealerController@saveDealer'));
	Route::get('adddealer/{id?}', array('uses' => 'Admin\DealerController@add_dealer'))->name('adddealer');
	Route::post('dealerImage', array('uses' => 'Admin\DealerController@dealerImage'));
	Route::post('deletedealerimage', array('uses' => 'Admin\DealerController@deletedealerimage'));
	Route::get('listdealers', array('uses' => 'Admin\DealerController@list_dealers'));
	Route::get('ajaxlistdealers', array('uses' => 'Admin\DealerController@ajaxListdealers'));
	Route::post('deletedealer', array('uses' => 'Admin\DealerController@delete_dealer'));
	Route::post('changedealerStatus', array('uses' => 'Admin\DealerController@changedealerStatus'));
	Route::post('ajaxCheckName', array('uses' => 'Admin\DealerController@ajaxCheckName'));

    //dealer ends

});


//Front Route
Route::get('/', array('uses' => 'Front\FrontController@index'));
Route::get('quoteRequest/{amount?}', array('uses' => 'Front\FrontController@quoteRequest'))->name('quoteRequest');
Route::post('savedetails', array('uses' => 'Front\FrontController@saveDetails'));
Route::post('checkemail', array('uses' => 'Front\FrontController@checkemail'));
Route::post('findaddress', array('uses' => 'Front\FrontController@findaddress'));
Route::get('about-us', array('uses' => 'Front\FrontController@about_us'));
Route::get('our-process', array('uses' => 'Front\FrontController@our_process'));
Route::get('finance-calculator', array('uses' => 'Front\FrontController@finance_calculator'));
Route::get('best-first-car-deals', array('uses' => 'Front\FrontController@best_first_car_deals'));
Route::get('faq', array('uses' => 'Front\FrontController@faq'));
Route::get('contact-us', array('uses' => 'Front\FrontController@contact_us'));
Route::get('our-complaints', array('uses' => 'Front\FrontController@our_complaints'));
Route::get('help-advice', array('uses' => 'Front\FrontController@help_advice'));
Route::get('privacy-policy', array('uses' => 'Front\FrontController@privacy_policy'));
Route::get('terms-and-conditions', array('uses' => 'Front\FrontController@terms_and_conditions'));

// Member Area
Route::get('login', 'MemberController@login');
Route::post('login', 'MemberController@member_doLogin');
Route::get('logout', 'MemberController@logout');
// http://localhost/newcarloan/public/member/member-area
Route::group(['middleware' => 'checkMemberLogin', 'prefix' => config('constants.MEMBER_URL')], function() {

	Route::get('member-area', 'MemberController@member_area');
	Route::get('documents', 'fronttwoController@documents');		//DONE Front Template
	Route::get('add-car', 'fronttwoController@add_car');			//DONE Front Template
	Route::get('car-page', 'fronttwoController@car_page');			//NOTE Working Slider
	Route::get('car-search', 'fronttwoController@car_search');		//DONE Front Template
	Route::get('cars', 'fronttwoController@cars');					//DONE Front Template
	Route::get('refera-friend', 'fronttwoController@refera_friend');//DONE Front Template
	Route::get('saved-cars', 'fronttwoController@saved_cars');		//DONE Front Template
	Route::get('save-car-member', 'Admin\CarsController@save_car_member_section');   // car save in member area
	
});

Route::get('sendemail', 'Front\FrontController@mailsendtest');                                // Send Email - Demo test
Route::get('emailview', 'Front\FrontController@email_template_view');
Route::get('default-car-list', 'Admin\CarsController@ajaxListcars');                          // Search car | default car list | only ajax return

// cache clear
Route::get('clear', function() {
    Artisan::call('cache:clear');
	Artisan::call('view:clear');
	// Artisan::call('route:cache');
	return 'All cache cleared';
});
