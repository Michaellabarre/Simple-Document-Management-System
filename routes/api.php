<?php
use Illuminate\Http\Request;

Route::get('/signin', [
    'uses' => 'AuthController@getSignInPage',
    'as' => 'signin'
]);

Route::post('/signin', [
    'uses' => 'AuthController@postSignIn',
    'as' => 'signin'
]);

Route::get('/logout', [
    'uses' => 'AuthController@getLogout',
    'as' => 'logout'
]);



Route::group(['middleware' => 'roles','roles' => ['Admin','Accountingstaff']], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('payroll/downloadform', 'PayrollController@downloadform');
    Route::get('profile', 'AuthController@profile');
    Route::put('profile/update/',[
    'as' => 'profile.update',
    'uses' => 'AuthController@updateprofile'
    ]);
});

Route::group(['middleware' => 'roles','roles' => ['Accountingstaff']], function() {
	Route::post('payroll/importExcel', 'PayrollController@importExcel');
	Route::get('payroll/downloadcsv/{title}', 'PayrollController@downloadcsv');
    Route::get('payroll/downloadmanucsv/{title}', 'PayrollController@downloadmanucsv');
    Route::get('payroll/downloadexceldata/{title}', 'PayrollController@Downloadexceldata');

	Route::get('payroll.search', ['as' => 'payroll.search', 'uses' => 'PayrollController@searchPayroll']);
	Route::resource('payroll', 'PayrollController');
	Route::get('payrolltype.search', ['as' => 'payrolltype.search', 'uses' => 'PayrolltypeController@searchPayrolltype']);
	Route::resource('managelibraries/otherincomecode', 'PayrolltypeController');
	Route::get('employee.search', ['as' => 'payrolltype.search', 'uses' => 'EmployeeController@searchEmployee']);
	Route::resource('managelibraries/employee', 'EmployeeController');
    Route::get('deposit.search', ['as' => 'deposit.search', 'uses' => 'DepositController@searchDeposit']);
    Route::resource('deposit', 'DepositController');

});

Route::group(['middleware' => 'roles','roles' => ['Admin']], function() {
	Route::get('user.search', ['as' => 'user.search', 'uses' => 'AuthController@SearchUser']);
	Route::resource('managelibraries/user', 'AuthController');
	Route::post('/signup', [
        'uses' => 'AuthController@postSignUp',
        'as' => 'signup'
    ]);
});


Route::post('document/adddoc/{id}', ['as' => 'document.adddoc', 'uses' => 'DocumentController@AddDocument']);
Route::post('document/addaction/{id}', ['as' => 'document.add_action_doc', 'uses' => 'DocumentController@AddAction']);
Route::resource('document', 'DocumentController');
Route::resource('managelibraries/bureausandservices', 'BureauController');
Route::resource('report', 'ReportController');