<?php

use CristianPontes\ZohoCRMClient\Response\Record;
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

// FAQs :
Route::get('/faqs', function () {
    return view('ar/faqs');
});

// Thanks Newsletter :
Route::get('/thank-you', function () {
    return view('ar/newsletter');
});

// Thanks Newsletter :
Route::get('/report_call_center_ministries_performance_in_saudi_arabia', function () {
    return view('ar/report');
});

// Submit New Order to Zoho CRM :
Route::post('/submit_new_order', function (Request $request) {

    /*$records = [];
    try{

        ZCRMRestClient::initialize();
        $oAuthClient = ZohoOAuth::getClientInstance();
        $grantToken = "1000.382aced1da4a65d96b69fef02eb5cec5.96a588b8ca343b1c87dcb8fd96833a3e";
        $oAuthTokens = $oAuthClient->generateAccessToken($grantToken);

        $record = ZCRMRecord::getInstance("Leads", null);
        $record->setFieldValue("Last Name", $request->name);
        $record->setFieldValue("Email", $request->email);
        $record->setFieldValue("Mobile", $request->mobile);
        $record->setFieldValue("Website", $request->website);
        $record->setFieldValue("Size", $request->size);
        $record->setFieldValue("Lead Source", 'Landing Page Form');
        $records[] = $record;

        $zcrmModuleIns = ZCRMModule::getInstance("Leads");
        $response = $zcrmModuleIns->createRecords($records);
        $entityResponses = $response->getEntityResponses();

        foreach ($entityResponses as $entityResponse){
            if("success"==$entityResponse->getStatus()) {
                return redirect('/successful-order');
            } else {
                return redirect('/unsuccessful-order');
            }
        }

        echo "Hello World\n";

    } catch(ZCRMException $e){
        echo $e->getCode();
        echo $e->getMessage();
        echo $e->getExceptionCode();
    }*/

    $client = new ZohoCRMClient('Leads', 'c95eefc1ce28cf9fe9206733044e4f1f');
    $records = $client->insertRecords()
        ->setRecords([
            array(
                'Last Name' => $request->name,
                'Email' => $request->email,
                'Mobile' => $request->mobile,
                'Website' => $request->website,
                'Size' => $request->size,
                'Lead Source' => 'Landing Page Form'
            )
        ])
        ->onDuplicateError()
        ->triggerWorkflow()
        ->request();

    foreach ($records as $record) {
        // If the record inserted
        if($record->isInserted()){
            return redirect('/successful-order');
        }
        //If is not inserted
        return redirect('/unsuccessful-order');
    }
    return redirect('/successful-order');

});

// Successful Order :
Route::get('/successful-order', function () {
    return view('ar/successful');
});

Route::get('/unsuccessful-order', function() {
    return view('ar/unsuccessful');
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

// FAQs :
Route::get('/en/faqs', function () {
    return view('en/faqs');
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
        // If the record inserted
        if($record->isInserted()){
            return redirect('/en/successful-order');
        }
        //If is not inserted
        return redirect('/en/unsuccessful-order');
    }

    return redirect('/en/successful-order');


});

// Successful Order :
Route::get('/en/successful-order', function () {
    return view('en/successful');
});

// Successful Order :
Route::get('/en/unsuccessful-order', function () {
    return view('en/unsuccessful');
});






