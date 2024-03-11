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

Auth::routes([
    'register' => false, // Registration Routes...
    'login' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
//home page
Route::get('/', 'IndexController@index')->name('home');

// login, logout, register

// GoogleLoginController redirect and callback urls
Route::get('/login/google', 'GoogleLoginController@redirectToGoogle')->name('auth.google');
Route::get('/login/google/callback', 'GoogleLoginController@handleGoogleCallback');


Route::get('/login-user',           'LoginRegisterController@index')->name('userLogin');;
Route::get('/login-business',       'LoginRegisterController@indexBusiness')->name('businessLogin');
Route::get('/logout',               'LoginRegisterController@logout');
Route::post('/login',               'LoginRegisterController@login')->name('login');
Route::post('/reset-pwd',               'LoginRegisterController@reset')->name('resetPwd');
Route::post('/register',            'LoginRegisterController@register')->name('register');
//business auth
//Route::post('/login-business',       ['as'=>'login_business','uses'=>'BusinessController@login'])->name('login_business');
//Route::post('/register-business',   'BusinessController@register')->name('register_business');

// contact send mail

Route::post('/sendmail/send',   'SendEmailController@send')->name('contactSendMail');

Route::get('/custom',            'NavItemController@custom')->name('custom');
Route::post('/custom_save',            'NavItemController@custom_save')->name('custom_save');
//

Route::get('/store',            'NavItemController@store')->name('store');
Route::get('/lab-reservation/booking/step-one',  'LabReservationController@labReservationOne')->name('labReservationOne');
Route::get('/lab-reservation/booking/step-two',  'LabReservationController@labReservationTwo')->name('labReservationTwo');
Route::post('/lab-reservation/getLabTypes',  'LabReservationController@getLabTypes')->name('getTypesAjax');
Route::post('/lab-reservation/booking/step-tree',  'LabReservationController@labReservationTree')->name('labReservationTwo');
Route::post('/lab-reservation/booking/labReservationAllFormWithPayment',  'LabReservationController@labReservationAllFormWithPayment')->name('labReservationAllFormWithPayment');
Route::post('/lab-reservation/booking/step-one-ajax',  'LabReservationController@labReservationOneAjax')->name('labReservationOneAjax');
Route::post('/lab-reservation/booking/payment',  'LabReservationController@payment')->name('labReservationPayment');
Route::resource('/LabReservation',  'LabReservationController');

//product-include----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('/product-include/mobility-service',                                                 'NavItemController@mobilityServices')->name('product_include.mobility_service');
Route::get('/product-include/mobility-service/business-messaging',                              'NavItemController@businessMessaging')->name('product_include.mobility_service.business_messaging');
Route::get('/product-include/mobility-service/business-messaging/telcron-business-messaging',   'NavItemController@telcronBusinessMessaging')->name('product_include.mobility_service.business_messaging.telcron_business_messaging');

//services-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('/services/eSource',                                                                 'NavItemController@eSource')->name('services.eSource');
Route::get('/services/consulting',                                                              'NavItemController@consulting')->name('services.consulting');
Route::get('/services/compliance-management',                                                   'NavItemController@complianceManagement')->name('services.compliance_management');
Route::get('/services/resources/emc',                                                           'NavItemController@emc')->name('services.resources.emc');
Route::get('/services/resources/product-safety',                                                'NavItemController@productSafety')->name('services.resources.product_safety');
Route::get('/services/resources/rf-exposure',                                                   'NavItemController@rfExposure')->name('services.resources.rf_exposure');
Route::get('/services/resources/reference-link',                                                'NavItemController@referenceLink')->name('services.resources.reference_link');
Route::get('/services/resources/products',                                                      'NavItemController@products')->name('services.resources.products');

//about---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('/about/our-partners',                                                               'NavItemController@ourPartners')->name('about.our_partners');
Route::get('/about/our-capabilities',                                                           'NavItemController@ourCapabilities')->name('about.our_capabilities');
Route::get('/about/our-team',                                                                   'NavItemController@ourTeam')->name('about.our_team');
Route::get('/about/blog',                                                                       'NavItemController@blog')->name('about.blog');
Route::get('/about/blog/SamuelJames',                                                           'NavItemController@blogSamuelJames')->name('about.blog.samuel_james');

//about---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('/lab-reservation/schedule-testing',                                                 'NavItemController@scheduleTesting')->name('lav_reservation.schedule_testing');

// Lab Reservation Route without LoggedIn User
Route::get('reserve-lab', 'NavItemController@bookLab')->name('book_lab');

// Submit RFQ
Route::get('submit-rfq', 'NavItemController@submitRFQ')->name('submitrfq');
Route::get('submit-rfq/devices', 'NavItemController@rfqDevices')->name('submitRFQ.devices');
Route::get('submit-rfq/modules', 'NavItemController@rfqModules')->name('submitRFQ.modules');
Route::get('submit-rfq/get-certified', 'NavItemController@rfqGetCertified')->name('submitRFQ.getCertified');


// Lab Rating / Directory...
Route::get('lab-rating-directory', 'labRatingController@index')->name('lab.lab_rating_directory');
Route::get('lab-rating-directory/view-listing', 'labRatingController@view_listing')->name('lab.view_listing');
Route::get('lab-rating-directory/submit-listing', 'labRatingController@submit_listing')->name('lab.submit_listing');
Route::post('lab-rating-directory/add-submit-listing', 'labRatingController@submit_listing_add')->name('lab.add_submit_listing');
Route::any('/search', 'labRatingController@search')->name('search');
// Fetch Country and City List Ajax Route
Route::get('lab-rating-directory/country/{country}', 'labRatingController@fetchCountry')->name('lab.fetchCountry');
Route::get('lab-rating-directory/city/{city}', 'labRatingController@fetchCity')->name('lab.fetchCity');
// Modal Route
Route::post('lab-rating-directory/certification-Testing', 'labRatingController@certificationTesting')->name('certificationTesting');
Route::post('lab-rating-directory/pre-certification-Testing', 'labRatingController@preCertificationTesting')->name('preCertificationtesting');

// FAQ Page Route
Route::get('lab-reservation/faqs', 'NavItemController@faqs')->name('labReservation.faqs');
// Rewards Route
Route::get('lab-reservation/rewards', 'NavItemController@rewards')->name('labReservation.rewards');
Route::get('lab-reservation/submit-lab-review', 'NavItemController@submitLabReview')->name('labReservation.submitLabReview');

// ContactUS Route
Route::get('contact-us', 'NavItemController@contactUs')->name('contactus');
Route::post('submit-rfq/contact-us', 'contactUsController@index')->name('submitrfq.contactus');

// Home Page Search Route
Route::post('/homeSearch', 'IndexController@homeSearch')->name('home-search');