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
    return view('welcome');
});

Route::group(
    [
    'prefix' => 'admin',
    'namespace' => 'admin'
    ], function()
    {
    Route::get('/', 'DashboardController@index');
    Route::get('category', 'CategorizationContraller@category');
    Route::get('category/create', 'CategorizationContraller@createCategory');
    Route::post('category/store', 'CategorizationContraller@store');
    Route::get('subcategory', 'CategorizationContraller@subcategory');
    Route::get('subcategory/create', 'CategorizationContraller@createsubCategory');
    });

Route::group(
    [
    'prefix' => 'partner',
    'namespace' => 'partner'
    ], function()
    {
    Route::resource('/', 'DashboardController');
    Route::resource('profile', 'ProfileController');
    Route::resource('company_profile', 'CompanyProfileController');
    Route::resource('order', 'OrderController');
    Route::resource('subscription_order', 'SubscriptionOrderController');
    Route::resource('cancel_request', 'CancelRequestController');
    Route::resource('job', 'jobController');
    Route::resource('resource', 'ResourceController');
    Route::resource('category', 'CategoryController');
    Route::resource('complain', 'ComplainController');
    Route::resource('service', 'ServiceController');
    Route::resource('e_shop', 'EShopController');
    Route::resource('marketing_panel', 'MarketingPanelController');
    Route::resource('gift_point', 'GiftPointController');
    Route::resource('discount', 'DiscountController');
    Route::resource('surcharge', 'SurchargeController');
    Route::resource('review', 'ReviewController');
    Route::resource('loan', 'LoanController');
    Route::resource('top_up', 'TopUpController');
    Route::resource('finance', 'FinanceController');
    Route::resource('report', 'ReportController');
    Route::resource('help', 'HelpController');
    Route::resource('terms_condition', 'TermsAndConditionController');
    Route::resource('offline_online', 'OfflineOnlineController');
    Route::resource('training', 'TrainingController');

    });
