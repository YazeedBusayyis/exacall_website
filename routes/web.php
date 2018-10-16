<?php
use CristianPontes\ZohoCRMClient\ZohoCRMClient;
use Illuminate\Http\Request;

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

/*
|--------------------------------------------------------------------------
|  Arabic Routing
|--------------------------------------------------------------------------
*/

// Welcome Landing Page :
Route::get('/', function () {
    return view('ar/welcome');
});

Route::get('/services' , function () {
    return view('ar/services');
});

// Pricing :
Route::get('/pricing' , function () {
    return view('ar/pricing');
});

// Privacy and Policy Page :
Route::get('/privacy-policy', function () {
    return view('ar/privacy');
});

// Terms and Conditions Page :
Route::get('/terms-conditions', function () {
    return view('ar/terms');
});

// Contact Us :
Route::get('/team', function () {
    return view('ar/team');
});

// Contact Us :
Route::get('/contact-us', function () {
    return view('ar/contact');
});

// Thanks Newsletter :
Route::get('/thank-you', function () {
    return view('ar/newsletter');
});

// Submit New Order to Zoho CRM :
Route::post('/submit_new_order', function (Request $request) {
    $client = new ZohoCRMClient('Leads', 'c95eefc1ce28cf9fe9206733044e4f1f');
    $records = $client->insertRecords()
        ->setRecords([
            array(
                'Last Name' => $request->name,
                'Email' => $request->email,
                'Mobile' => $request->mobile,
                'Website' => $request->website,
                'Size' => $request->size,
                'Leed Source' => 'Landing Page Form'
            )
        ])
        ->onDuplicateError()
        ->triggerWorkflow()
        ->request();

    foreach ($records as $record) {
        // returns bool
        if($record->isDuplicate()){
            return back()->withErrors('duplicated');
        }

        // returns bool
        if($record->isInserted()){
            return redirect('/successful_order');
        }
    }


});

// Successful Order :
Route::get('/successful-order', function () {
    return view('ar/successful');
});

/*
|--------------------------------------------------------------------------
|  English Routing
|--------------------------------------------------------------------------
*/

// Welcome Landing Page :
Route::get('en/', function () {
    return view('en/welcome');
});

Route::get('en/services' , function () {
    return view('en/services');
});

// Pricing :
Route::get('/en/pricing' , function () {
    return view('en/pricing');
});

// Privacy and Policy Page :
Route::get('/en/privacy-policy', function () {
    return view('en/privacy');
});

// Terms and Conditions Page :
Route::get('/en/terms-conditions', function () {
    return view('en/terms');
});

// Contact Us :
Route::get('/en/team', function () {
    return view('en/team');
});

// Contact Us :
Route::get('/en/contact-us', function () {
    return view('en/contact');
});

// Thanks Newsletter :
Route::get('/en/thank-you', function () {
    return view('en/newsletter');
});

// Submit New Order to Zoho CRM :
Route::post('/en/submit_new_order', function (Request $request) {
    $client = new ZohoCRMClient('Leads', 'c95eefc1ce28cf9fe9206733044e4f1f');
    $records = $client->insertRecords()
        ->setRecords([
            array(
                'Last Name' => $request->name,
                'Email' => $request->email,
                'Mobile' => $request->mobile,
                'Website' => $request->website,
                'Size' => $request->size,
                'Leed Source' => 'Landing Page Form'
            )
        ])
        ->onDuplicateError()
        ->triggerWorkflow()
        ->request();

    foreach ($records as $record) {
        // returns bool
        if($record->isDuplicate()){
            return back()->withErrors('duplicated');
        }

        // returns bool
        if($record->isInserted()){
            return redirect('/successful_order');
        }
    }


});

// Successful Order :
Route::get('/en/successful-order', function () {
    return view('en/successful');
});







