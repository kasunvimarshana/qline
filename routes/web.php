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

Route::get('/', array('uses' => 'HomeController@showStartup'));//->name('home');

//Route::get('/', array('uses' => 'LoginController@showLogin'));//->name('home');
//route to login
Route::get('login', array('uses' => 'LoginController@showLogin'))->name('login.showLogin');
// route to process the form
Route::post('login', array('uses' => 'LoginController@doLogin'))->name('login.doLogin');
// route to procss logout
Route::get('logout', array('uses' => 'LoginController@doLogout'))->name('login.doLogout');
// route to storage
Route::get('storage/{filename}', array('uses' => 'UserAttachmentController@showFile'))->where(['filename' => '.*']);

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
    Route::get('measre-points/select/all', array('uses' => 'MeasurePointController@selectAllMeasurePoints'))->name('measurePoint.selectAllMeasurePoints');

    Route::get('setup-configurations/cutting/index', array('uses' => 'QualityRecordCuttingController@index'))->name('qualityRecordCutting.index');
    Route::get('setup-configurations/r-q-c/index', array('uses' => 'QualityRecordRQCController@index'))->name('qualityRecordRQC.index');
    Route::get('setup-configurations/sewing-check/index', array('uses' => 'QualityRecordSewingCheckController@index'))->name('qualityRecordSewingCheck.index');
    Route::get('setup-configurations/sewing-audit/index', array('uses' => 'QualityRecordSewingAuditController@index'))->name('qualityRecordSewingAudit.index');
    Route::get('setup-configurations/finishing/index', array('uses' => 'QualityRecordFinishingController@index'))->name('qualityRecordFinishing.index');
    Route::get('setup-configurations/c-n-i/index', array('uses' => 'QualityRecordCNIController@index'))->name('qualityRecordCNI.index');

    Route::get('quality-record/r-q-c/create', array('uses' => 'QualityRecordRQCController@create'))->name('qualityRecordRQC.create');
    Route::post('quality-record/r-q-c/store', array('uses' => 'QualityRecordRQCController@store'))->name('qualityRecordRQC.store');

    Route::post('quality-record/cutting/store', array('uses' => 'QualityRecordCuttingController@store'))->name('qualityRecordCutting.store');
    Route::post('quality-record/sewing-check/store', array('uses' => 'QualityRecordSewingCheckController@store'))->name('qualityRecordSewingCheck.store');

    Route::get('quality-record-input-scan-data/create', array('uses' => 'QualityRecordInputScanDataController@create'))->name('qualityRecordInputScanData.create');
    Route::post('quality-record-input-scan-data/store', array('uses' => 'QualityRecordInputScanDataController@store'))->name('qualityRecordInputScanData.store');

    Route::get('quality-record-sewing-audits/create', array('uses' => 'QualityRecordSewingAuditController@create'))->name('qualityRecordSewingAudit.create');
    Route::post('quality-record-sewing-audits/store', array('uses' => 'QualityRecordSewingAuditController@store'))->name('qualityRecordSewingAudit.store');

    Route::post('quality-record-finishing/index', array('uses' => 'QualityRecordFinishingController@store'))->name('qualityRecordFinishing.store');
    
    Route::get('backstage/users/create', array('uses' => 'UserController@create'))->name('user.create');
    Route::post('backstage/users/store', array('uses' => 'UserController@store'))->name('user.store');
    
    Route::get('departments/select/all', array('uses' => 'DepartmentController@selectAllDepartments'))->name('department.selectAllDepartments');
    Route::get('sections/select/all', array('uses' => 'SectionController@selectAllSections'))->name('section.selectAllSections');
    
    Route::post('quality-record/c-n-i/store', array('uses' => 'QualityRecordCNIController@store'))->name('qualityRecordCNI.store');
    
    Route::get('/dashboard', array('uses' => 'DashboardController@index'))->name('dashboard');
    
    Route::get('quality-record-sewing-audits/create/fail', array('uses' => 'QualityRecordSewingAuditController@create_fail'))->name('qualityRecordSewingAudit.create_fail');
    Route::get('quality-record-sewing-audits/create/suspend', array('uses' => 'QualityRecordSewingAuditController@create_suspend'))->name('qualityRecordSewingAudit.create_suspend');
    
    Route::post('quality-record-sewing-audits/store/fail', array('uses' => 'QualityRecordSewingAuditController@store_fail'))->name('qualityRecordSewingAudit.store_fail');
    Route::post('quality-record-sewing-audits/store/suspend', array('uses' => 'QualityRecordSewingAuditController@store_suspend'))->name('qualityRecordSewingAudit.store_suspend');
    
    
    Route::get('quality-record-input-defect-data', array('uses' => 'QualityRecordSewingCheckController@flushQualityRecoredInputDefectData'))->name('qualityRecordSewingCheck.flushQualityRecoredInputDefectData');
});

Route::group(['middleware' => ['disablePreventBackMiddleware', 'corsMiddleware']], function(){
    Route::get('user-a-p-i-tokens/create', array('uses' => 'LoginController@createUserAPIToken'))->name('login.createUserAPIToken');
    Route::post('user-a-p-i-tokens/login', array('uses' => 'LoginController@doLoginUserAPIToken'))->name('login.doLoginUserAPIToken');
});

Route::match(['get', 'post'], 'quality-record-input-defect-data/store', array('uses' => 'QualityRecordInputDefectDataController@store'))->name('qualityRecordInputDefectData.store');

Route::match(['get', 'post'], 'quality-record-input-defect-data/all', array('uses' => 'QualityRecordInputDefectDataController@selectAllQualityRecordInputDefectData'))->name('qualityRecordInputDefectData.selectAllQualityRecordInputDefectData');

Route::match(['get', 'post'], 'quality-record-input-defect-data/select', array('uses' => 'QualityRecordInputDefectDataController@selectQualityRecordInputDefectData'))->name('qualityRecordInputDefectData.selectQualityRecordInputDefectData');

Route::match(['get', 'post'], 'workbook/create', array('uses' => 'DashBoardController@createWorkbook'))->name('workbook.createWorkbook');