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
    Route::get('standard-r-q-cs/select/all', array('uses' => 'StandardRQCController@selectAllStandardRQCs'))->name('standardRQC.selectAllStandardRQCs');
    Route::get('standard-sewing-checks/select/all', array('uses' => 'StandardSewingCheckController@selectAllStandardSewingChecks'))->name('standardSewingCheck.selectAllStandardSewingChecks');
    Route::get('standard-sewing-audits/select/all', array('uses' => 'StandardSewingAuditController@selectAllStandardSewingAudits'))->name('standardSewingAudit.selectAllStandardSewingAudits');
    
});

Route::get('setup-configurations', array('uses' => 'SetupConfigurationController@index'))->name('setupConfiguration.index');
Route::get('setup-configurations/cutting', array('uses' => 'CuttingController@index'))->name('setupConfigurationCutting.index');
Route::get('setup-configurations/r-q-c', array('uses' => 'RQCController@index'))->name('setupConfigurationRQC.index');
Route::get('setup-configurations/sewing-check', array('uses' => 'SewingCheckController@index'))->name('setupConfigurationSewingCheck.index');
Route::get('setup-configurations/sewing-audit', array('uses' => 'SewingAuditController@index'))->name('setupConfigurationSewingAudit.index');
Route::get('setup-configurations/finishing', array('uses' => 'FinishingController@index'))->name('setupConfigurationFinishing.index');
Route::get('setup-configurations/c-n-i', array('uses' => 'CNIController@index'))->name('setupConfigurationCNI.index');

Route::post('setup-configurations/store', array('uses' => 'SetupConfigurationController@store'))->name('setupConfiguration.store');
Route::post('setup-configurations/cutting/store', array('uses' => 'CuttingController@store'))->name('setupConfigurationCutting.store');
Route::post('setup-configurations/r-q-c/store', array('uses' => 'RQCController@store'))->name('setupConfigurationRQC.store');
Route::post('setup-configurations/sewing-check/store', array('uses' => 'SewingCheckController@store'))->name('setupConfigurationSewingCheck.store');
Route::post('setup-configurations/sewing-audit/store', array('uses' => 'SewingAuditController@store'))->name('setupConfigurationSewingAudit.store');
Route::post('setup-configurations/finishing/store', array('uses' => 'FinishingController@store'))->name('setupConfigurationFinishing.store');
Route::post('setup-configurations/c-n-i/store', array('uses' => 'CNIController@store'))->name('setupConfigurationCNI.store');

Route::get('defect-categories/select/all', array('uses' => 'DefectCategoryController@selectAllDefectCategories'))->name('defectCategory.selectAllDefectCategories');
Route::get('defects/select/all', array('uses' => 'DefectController@selectAllDefects'))->name('defect.selectAllDefects');

Route::get('setup-configurations/cutting/index', array('uses' => 'QualityRecordCuttingController@index'))->name('qualityRecordCutting.index');
Route::get('setup-configurations/r-q-c/index', array('uses' => 'QualityRecordRQCController@index'))->name('qualityRecordRQC.index');
Route::get('setup-configurations/sewing-check/index', array('uses' => 'QualityRecordSewingCheckController@index'))->name('qualityRecordSewingCheck.index');
Route::get('setup-configurations/sewing-audit/index', array('uses' => 'QualityRecordSewingAuditController@index'))->name('qualityRecordSewingAudit.index');
Route::get('setup-configurations/finishing/index', array('uses' => 'QualityRecordFinishingController@index'))->name('qualityRecordFinishing.index');
Route::get('setup-configurations/c-n-i/index', array('uses' => 'QualityRecordCNIController@index'))->name('qualityRecordCNI.index');

Route::get('setup-configurations/r-q-c/create', array('uses' => 'QualityRecordRQCController@create'))->name('qualityRecordRQC.create');