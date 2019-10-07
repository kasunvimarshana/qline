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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::fallback('FallbackController@index')->name('fallback');
Route::any('fallback', array('uses' => 'FallbackController@index'))->name('fallback');

Route::get('/', array('uses' => 'LoginController@showLogin'));//->name('home');
//route to login
Route::get('login', array('uses' => 'LoginController@showLogin'))->name('login.showLogin');
// route to process the form
Route::post('login', array('uses' => 'LoginController@doLogin'))->name('login.doLogin');
// route to procss logout
Route::get('logout', array('uses' => 'LoginController@doLogout'))->name('login.doLogout');

Route::group(['middleware' => ['authorizedUserMiddleware', 'disablePreventBackMiddleware', 'corsMiddleware']], function(){
    
    Route::get('/home', array('uses' => 'HomeController@index'))->name('home');
    
    Route::get('companies/select/all', array('uses' => 'CompanyController@selectAllCompanies'))->name('company.selectAllCompanies');
    Route::get('strategic-business-units/select/all', array('uses' => 'StrategicBusinessUnitController@selectAllStrategicBusinessUnits'))->name('strategicBusinessUnit.selectAllStrategicBusinessUnits');
    Route::get('factories/select/all', array('uses' => 'FactoryController@selectAllFactories'))->name('factory.selectAllFactories');
    Route::get('lines/select/all', array('uses' => 'LineController@selectAllLines'))->name('line.selectAllLines');
    Route::get('customers/select/all', array('uses' => 'CustomerController@selectAllCustomers'))->name('customer.selectAllCustomers');
    Route::get('styles/select/all', array('uses' => 'StyleController@selectAllStyles'))->name('style.selectAllStyles');
    Route::get('colours/select/all', array('uses' => 'ColourController@selectAllColours'))->name('colour.selectAllColours');
    Route::get('exports/select/all', array('uses' => 'ExportController@selectAllExports'))->name('export.selectAllExports');
    Route::get('standard-r-q-cs/select/all', array('uses' => 'StandardRQCController@selectAllStandarsRQCs'))->name('standardRQC.selectAllStandarsRQCs');
    Route::get('standard-sewing-checks/select/all', array('uses' => 'StandardSewingCheckController@selectAllStandardSewingChecks'))->name('standardSewingCheck.selectAllStandardSewingChecks');
    Route::get('standard-sewing-audits/select/all', array('uses' => 'StandardSewingAuditController@selectAllStandardSewingAudits'))->name('standardSewingAudit.selectAllStandardSewingAudits');
    
});