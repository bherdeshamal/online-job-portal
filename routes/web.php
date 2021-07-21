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
    return view('admin.admin-login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard','IndexpageController@viewCharts');

Route::get('/add-category', function () {
    return view('categories.add-category');
});
    Route::get('/add-category','CategoryController@create');
    Route::post('/categoriesaction','CategoryController@storeDevice');
    Route::get('/view-category','CategoryController@indexc');
    Route::get('/click_edit/{id}','CategoryController@edit');
    Route::post('/update/{id}','CategoryController@updatec')->name('updatec');
    Route::get('click_deletec/{id}','CategoryController@delete');


Route::get('/add-company', function () {
        return view('companies.add-company');
});
    Route::get('/add-company','CompanyController@create');
    Route::post('/companyaction','CompanyController@store');
    Route::get('/view-company','CompanyController@index');
    Route::get('/click_editcompany/{id}','CompanyController@editcompany');
    Route::post('/updatecompany/{id}','CompanyController@updatecompany')->name('updatecompany');
    Route::get('click_deletecompany/{id}','CompanyController@deletecompany');
    
Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/my-dashboard', function () {
    return view('frontend.dashboard');
});

Route::get('/Charts','IndexpageController@viewUserCharts');
Route::get('/Company-Chart','IndexpageController@viewCompanyCharts');

Route::get('/jobs', function () {
    return view('frontend.jobs');
});
    Route::get('/jobs', 'IndexpageController@jobs');
    Route::get('/job-details/{id}','IndexpageController@jobsDetails');
    Route::get('/view-jobs', 'IndexpageController@viewjobs');
    Route::get('/view-details/{id}','IndexpageController@viewDetails');
    Route::post('/add-application','IndexpageController@addtocart');
    Route::get('/my-application','IndexpageController@cart');
    Route::get('/my-application/delete-job/{id}','IndexpageController@deletecartitem');
    Route::get('/track-status','IndexpageController@checkstatus');
    Route::get('/view-applications','IndexpageController@vieworders');
    Route::get('/view-users','IndexpageController@viewappli');
    Route::get('order-proceed/{id}','IndexpageController@proceedorder');
    Route::put('update-tracking-status/{id}','IndexpageController@trackingstatus');
    Route::get('/view-application/delete-job/{id}','IndexpageController@deleteapplication');

Route::get('/user-login', function () {
        return view('frontend.signup');
    });

    Route::post('/check', 'IndexpageController@check');
    Route::get('/user-register', 'IndexpageController@register');
    Route::post('/registeraction','IndexpageController@storeDevice');
    Route::post('/admincheck', 'IndexpageController@admincheck');
    Route::get('/admin-register', 'IndexpageController@adminregister');
    Route::post('/adminregister','IndexpageController@store');

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/view-contact', function () {
    return view('frontend.view-contact');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

    Route::post('/sendaction','ContactController@sendadmin');
    Route::get('/view-contact','ContactController@display');
    Route::get('/revert-back/{id}','ContactController@revertBack');
    Route::post('/sendreplyback/{id}','ContactController@sendreply')->name('sendreplyback');

Route::get('/view-subscription', function () {
    return view('frontend.view-subscription');
});
    Route::match(['get','post'],'/newsletter','NewsletterController@storesubcription');
    Route::get('/view-subscription','NewsletterController@display');
    Route::get('/sendreply','NewsletterController@sendreply');
    Route::post('/sendupdate','NewsletterController@sendupdate');
    Route::get('click_deletesubscriber/{id}','NewsletterController@deletesubscription');

    
Route::get('/account', function () {
    return view('frontend.account');
});
    Route::match(['get','post'],'/account','AccountController@account');

  
Auth::routes();
