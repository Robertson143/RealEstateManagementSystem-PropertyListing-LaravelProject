<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

use App\Http\Controllers\AgentListingController;
use App\Http\Controllers\AgentReviewsController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ClientFormController;
use App\Http\Controllers\SubmittedFormController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\EquityController;


Auth::routes();

Route::get('/', 'FrontEndController@index' )->name('index');
Route::get('/listings', 'FrontEndController@listings' )->name('listings');
Route::get('/listing/{id}', 'FrontEndController@listing' )->name('single.listing');
Route::get('/dashboard', 'FrontEndController@dashboard' )->name('dashboard');
Route::get('clientreview', 'FrontEndController@clientreview' )->name('clientreview');
Route::get('myreviews/{id}', [FrontEndController::class , 'myreviews']);
Route::get('transaction', 'FrontEndController@transaction')->name('transaction');
Route::get('/about', 'FrontEndController@about' )->name('about');
Route::get('/query', 'searchController@search' )->name('search');
Route::get('/search', 'searchController@result' )->name('result');
Route::get('/events', 'EventController@events')->name('events');
Route::get('/payments', 'PaymentsController@payments')->name('payments');
Route::get('/aboutus', 'AboutController@aboutus')->name('aboutus');
Route::post('/contact', 'ContactController@store' )->name('send-message');
Route::post('/sendform', 'ContactController@sendform')->name('sendform');

// 'middleware' => 'auth'
// ['middleware'=>'auth']
// isauthorize:0 -> 0 == admin
Route::group(['prefix' => 'back','middleware' => 'isauthorize:0'], function() {

    Route::get('/', 'AdminController@index' )->name('admin.index');
    Route::resource('listings', 'ListingController');
    Route::resource('realtors', 'RealtorController');
    Route::resource('users', 'UserController');
    Route::resource('som', 'SellerOftheMonth');
    Route::resource('inquiries', 'InquiryController');
    Route::get('submittedform', 'SubmittedFormController@submittedform')->name('admin.layouts.submittedform');
    Route::get('viewforms/{id}', [SubmittedFormController::class , 'viewforms'])->name('viewforms');
    Route::put('updatestats/{id}', [SubmittedFormController::class , 'updatestats'])->name('updatestats');
    Route::get('payment', 'PaymentController@payment')->name('admin.layouts.payment');
    Route::get('addpayment', [PaymentController::class , 'addpayment'])->name('admin.layouts.addpayment');
    Route::post('insertpayment', [PaymentController::class , 'insertpayment'])->name('insertpayment');
    Route::get('viewpayment/{id}', [PaymentController::class , 'viewpayment'])->name('viewpayment');
    Route::put('updatepayment/{id}', [PaymentController::class , 'updatepayment'])->name('updatepayment');
    Route::post('updateequity', [EquityController::class , 'updateequity'])->name('updateequity');
    Route::put('updatestatus', [EquityController::class , 'updatestatus'])->name('updatestatus');
    Route::get('sales', 'SalesController@sales')->name('admin.layouts.sales');
    Route::get('reservation', 'ReservationController@reservation')->name('admin.layouts.reservation');
});

Route::middleware(['auth', 'isRealtor'])->group(function () {
    Route::get('/dashboards', 'DashboardController@index')->name('agentfolder.index');
    Route::get('clientdetails/{id}', 'DashboardController@clientdetails')->name('agentfolder.clientdetails');
    Route::get('/agentlisting', 'AgentListingController@agentlisting')->name('agentfolder.agentlisting');
    Route::get('/agentaddlist', 'AgentListingController@agentaddlist')->name('agentfolder.agentaddlist');
    Route::post('store', 'AgentListingController@store');
    Route::get('/show/{id}', [AgentListingController::class , 'show']);
    Route::post('update/{id}', [AgentListingController::class , 'update']);
    Route::get('/agentreviews', 'AgentReviewsController@agentreviews')->name('agentfolder.agentreviews');
    Route::get('views/{id}', [AgentReviewsController::class , 'views']);
    Route::put('update-inquiry/{id}', [AgentReviewsController::class, 'updatestatus']);
    Route::post('reply', 'AgentReviewsController@reply');
    Route::get('/deletelist/{id}', [AgentListingController::class , 'destroy']);
    Route::get('/form', 'ClientFormController@form')->name('agentfolder.form');
    Route::get('/clientform', 'ClientFormController@clientform')->name('agentfolder.clientform');
    Route::post('insert-form', 'ClientFormController@insertform');
    Route::get('edit-form/{id}', [ClientFormController::class, 'editform']);
    Route::put('update-form/{id}', [ClientFormController::class, 'updateform']);
    Route::get('/salesreport', 'AgentSalesReportController@salesreport')->name('agentfolder.salesreport');
    });



    // Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    // Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    // Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    
    // Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    

