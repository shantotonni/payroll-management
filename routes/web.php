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
    return view('auth.login');
})->name('user.login');

Auth::routes();

Route::get('/admin/dashboard/', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');


Route::get('/admin/user/list', [
    'as' => 'user.list',
    'uses' => 'HomeController@userList'
]);

//Client Registration route


Route::get('/admin/client/', [
    'as' => 'client.registration.index',
    'uses' => 'ClientController@index'
]);

Route::get('/client/create', [
    'as' => 'client.registration.create',
    'uses' => 'ClientController@create'
]);

Route::post('/client/store', [
    'as' => 'client.registration.store',
    'uses' => 'ClientController@store'
]);


Route::get('/admin/client/show/{id}', [
    'as' => 'client.registration.show',
    'uses' => 'ClientController@show'
]);

Route::get('/admin/client/edit/{id}', [
    'as' => 'client.registration.edit',
    'uses' => 'ClientController@edit'
]);


Route::post('/admin/client/update/{id}', [
    'as' => 'client.registration.update',
    'uses' => 'ClientController@update'
]);


Route::post('/admin/client/delete/{id}', [
    'as' => 'client.registration.delete',
    'uses' => 'ClientController@delete'
]);

//admin create client route

Route::get('/admin/client/create', [
    'as' => 'admin.create.client',
    'uses' => 'ClientController@admin_create_client'
]);

Route::post('/admin/client/store', [
    'as' => 'admin.create.client.store',
    'uses' => 'ClientController@admin_create_client_store'
]);

Route::get('/admin/client/pdf/{id}', [
    'as' => 'admin.client.pdf',
    'uses' => 'ClientController@admin_client_pdf'
]);


Route::get('/admin/client/form-pdf', [
    'as' => 'admin.client.print',
    'uses' => 'ClientController@pdf_form'
]);

Route::get('/admin/client/inactive/{id}', [
    'as' => 'client.inactive',
    'uses' => 'ClientController@clientInactive'
]);

Route::get('/admin/client/active/{id}', [
    'as' => 'client.active',
    'uses' => 'ClientController@clientActive'
]);


//Employee Registration route


Route::get('/admin/employee/', [
    'as' => 'employee.registration.index',
    'uses' => 'EmployeeController@index'
]);

Route::get('/employee/create/', [
    'as' => 'employee.registration.create',
    'uses' => 'EmployeeController@create'
]);


Route::post('employee/store/', [
    'as' => 'employee.registration.store',
    'uses' => 'EmployeeController@store'
]);


Route::get('/admin/employee/show/{id}', [
    'as' => 'employee.registration.show',
    'uses' => 'EmployeeController@show'
]);

Route::get('/admin/employee/edit/{id}', [
    'as' => 'employee.registration.edit',
    'uses' => 'EmployeeController@edit'
]);


Route::post('/admin/employee/update/{id}', [
    'as' => 'employee.registration.update',
    'uses' => 'EmployeeController@update'
]);


Route::post('/admin/employee/delete/{id}', [
    'as' => 'employee.registration.delete',
    'uses' => 'EmployeeController@delete'
]);

//admin create Employee route

Route::get('/admin/employee/create/', [
    'as' => 'admin.create.employee',
    'uses' => 'EmployeeController@admin_create_employee'
]);

Route::post('/admin/employee/store', [
    'as' => 'admin.create.employee.store',
    'uses' => 'EmployeeController@admin_create_employee_store'
]);

Route::get('/admin/employee/form-pdf', [
    'as' => 'admin.employee.print',
    'uses' => 'EmployeeController@pdf_form'
]);

Route::get('/admin/employee/pdf/{id}', [
    'as' => 'admin.employee.pdf',
    'uses' => 'EmployeeController@admin_employee_pdf'
]);

Route::get('/admin/employee/inactive/{id}', [
    'as' => 'employee.inactive',
    'uses' => 'EmployeeController@clientInactive'
]);

Route::get('/admin/employee/active/{id}', [
    'as' => 'employee.active',
    'uses' => 'EmployeeController@clientActive'
]);

Route::get('account/verify/{email}/{verifyToken}', [
    'as' => 'account.verify',
    'uses' => 'EmployeeController@accountVerify'
]);

Route::post('/admin/employee/update/image/{id}', [
    'as' => 'update.image',
    'uses' => 'EmployeeController@updateImage'
]);




//Services route

Route::group(['prefix' => 'admin/services'], function () {

    Route::get('/', [
        'as' => 'services.index',
        'uses' => 'ServicesController@index'
    ]);

    Route::get('/create', [
        'as' => 'services.create',
        'uses' => 'ServicesController@create'
    ]);


    Route::post('/store', [
        'as' => 'services.store',
        'uses' => 'ServicesController@store'
    ]);


    Route::get('/show/{id}', [
        'as' => 'services.show',
        'uses' => 'ServicesController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'services.edit',
        'uses' => 'ServicesController@edit'
    ]);


    Route::post('/update/{id}', [
        'as' => 'services.update',
        'uses' => 'ServicesController@update'
    ]);


    Route::post('/delete/{id}', [
        'as' => 'services.delete',
        'uses' => 'ServicesController@delete'
    ]);

});


//Assign To Employee route

Route::group(['prefix' => 'admin/assign-to-employee'], function () {

    Route::get('/', [
        'as' => 'assign.to.employee.index',
        'uses' => 'AssignToEmployeeController@index'
    ]);

    Route::get('/create', [
        'as' => 'assign.to.employee.create',
        'uses' => 'AssignToEmployeeController@create'
    ]);


    Route::post('/store', [
        'as' => 'assign.to.employee.store',
        'uses' => 'AssignToEmployeeController@store'
    ]);


    Route::get('/show/{id}', [
        'as' => 'assign.to.employee.show',
        'uses' => 'AssignToEmployeeController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'assign.to.employee.edit',
        'uses' => 'AssignToEmployeeController@edit'
    ]);


    Route::post('/update/{id}', [
        'as' => 'assign.to.employee.update',
        'uses' => 'AssignToEmployeeController@update'
    ]);


    Route::post('/delete/{id}', [
        'as' => 'assign.to.employee.delete',
        'uses' => 'AssignToEmployeeController@delete'
    ]);

});


//Assign To Clients route

Route::group(['prefix' => 'admin/assign-for-client'], function () {

    Route::get('/', [
        'as' => 'assign.to.client.index',
        'uses' => 'AssignForClientController@index'
    ]);

    Route::get('/create', [
        'as' => 'assign.to.client.create',
        'uses' => 'AssignForClientController@create'
    ]);


    Route::post('/store', [
        'as' => 'assign.to.client.store',
        'uses' => 'AssignForClientController@store'
    ]);


    Route::get('/show/{id}', [
        'as' => 'assign.to.employee.show',
        'uses' => 'AssignForClientController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'assign.to.client.edit',
        'uses' => 'AssignForClientController@edit'
    ]);


    Route::post('/update/{id}', [
        'as' => 'assign.to.client.update',
        'uses' => 'AssignForClientController@update'
    ]);


    Route::post('/delete/{id}', [
        'as' => 'assign.to.client.delete',
        'uses' => 'AssignForClientController@delete'
    ]);

});


//employee assign to Clients route

Route::group(['prefix' => 'admin/employee-assign-to-client'], function () {

    Route::get('/', [
        'as' => 'employee.assign.to.client.index',
        'uses' => 'EmployeeAssignToClientController@index'
    ]);

    Route::get('/create', [
        'as' => 'employee.assign.to.client.create',
        'uses' => 'EmployeeAssignToClientController@create'
    ]);


    Route::post('/store', [
        'as' => 'employee.assign.to.client.store',
        'uses' => 'EmployeeAssignToClientController@store'
    ]);


    Route::get('/show/{id}', [
        'as' => 'employee.assign.to.employee.show',
        'uses' => 'EmployeeAssignToClientController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'employee.assign.to.client.edit',
        'uses' => 'EmployeeAssignToClientController@edit'
    ]);


    Route::post('/update/{id}', [
        'as' => 'employee.assign.to.client.update',
        'uses' => 'EmployeeAssignToClientController@update'
    ]);


    Route::post('/delete/{id}', [
        'as' => 'employee.assign.to.client.delete',
        'uses' => 'EmployeeAssignToClientController@delete'
    ]);


});


//History route

Route::group(['prefix' => 'admin/history'], function () {

    Route::get('/', [
        'as' => 'history.index',
        'uses' => 'HistoryController@index'
    ]);

    Route::get('/create', [
        'as' => 'history.create',
        'uses' => 'HistoryController@create'
    ]);


    Route::post('/store', [
        'as' => 'history.store',
        'uses' => 'HistoryController@store'
    ]);


    Route::get('/show/{id}', [
        'as' => 'history.show',
        'uses' => 'HistoryController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'history.edit',
        'uses' => 'HistoryController@edit'
    ]);


    Route::post('/update/{id}', [
        'as' => 'history.update',
        'uses' => 'HistoryController@update'
    ]);


    Route::post('/delete/{id}', [
        'as' => 'history.delete',
        'uses' => 'HistoryController@delete'
    ]);

    Route::get('/filter', [
        'as' => 'history.filter',
        'uses' => 'HistoryController@filter'
    ]);

    Route::get('/active/{id}/{active}', [
        'as' => 'history.active',
        'uses' => 'HistoryController@active'
    ]);
    Route::get('/inactive/{id}/{inactive}', [
        'as' => 'history.inactive',
        'uses' => 'HistoryController@inactive'
    ]);


});


//Report route

Route::group(['prefix' => 'admin/report'], function () {

    Route::get('/', [
        'as' => 'report.index',
        'uses' => 'ReportController@index'
    ]);

    Route::get('/create', [
        'as' => 'report.create',
        'uses' => 'ReportController@create'
    ]);


    Route::post('/store', [
        'as' => 'report.store',
        'uses' => 'ReportController@store'
    ]);


    Route::get('/show/{id}', [
        'as' => 'report.show',
        'uses' => 'ReportController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'report.edit',
        'uses' => 'ReportController@edit'
    ]);


    Route::post('/update/{id}', [
        'as' => 'report.update',
        'uses' => 'ReportController@update'
    ]);


    Route::post('/delete/{id}', [
        'as' => 'report.delete',
        'uses' => 'ReportController@delete'
    ]);

    Route::get('/service/show/{id}', [
        'as' => 'report.services.show',
        'uses' => 'ReportController@reportServiceShow'
    ]);

});


//Settings route


Route::group(['prefix' => 'admin/settings'], function () {

    Route::get('/', [
        'as' => 'settings.index',
        'uses' => 'SettingsController@index'
    ]);

    Route::get('/create', [
        'as' => 'settings.create',
        'uses' => 'SettingsController@create'
    ]);


    Route::post('/store', [
        'as' => 'settings.store',
        'uses' => 'SettingsController@store'
    ]);


    Route::get('/show/{id}', [
        'as' => 'settings.show',
        'uses' => 'SettingsController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'settings.edit',
        'uses' => 'SettingsController@edit'
    ]);


    Route::post('/update/{id}', [
        'as' => 'settings.update',
        'uses' => 'SettingsController@update'
    ]);


    Route::post('/delete/{id}', [
        'as' => 'settings.delete',
        'uses' => 'SettingsController@delete'
    ]);

});


//Administrative route


Route::group(['prefix' => 'admin/administrative'], function () {

    Route::get('/', [
        'as' => 'administrative.index',
        'uses' => 'SettingsController@index'
    ]);

    Route::get('/create', [
        'as' => 'administrative.create',
        'uses' => 'SettingsController@create'
    ]);


    Route::post('/store', [
        'as' => 'administrative.store',
        'uses' => 'SettingsController@store'
    ]);


    Route::get('/show/{id}', [
        'as' => 'administrative.show',
        'uses' => 'SettingsController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'administrative.edit',
        'uses' => 'SettingsController@edit'
    ]);


    Route::post('/update/{id}', [
        'as' => 'administrative.update',
        'uses' => 'SettingsController@update'
    ]);


    Route::post('/delete/{id}', [
        'as' => 'administrative.delete',
        'uses' => 'SettingsController@delete'
    ]);

});



//Transaction code route


Route::group(['prefix' => 'admin/transaction'], function () {

    Route::get('/', [
        'as' => 'transaction.index',
        'uses' => 'TransactionController@index'
    ]);

    Route::get('/create', [
        'as' => 'transaction.create',
        'uses' => 'TransactionController@create'
    ]);


    Route::post('/store', [
        'as' => 'transaction.store',
        'uses' => 'TransactionController@store'
    ]);


    Route::get('/show/{id}', [
        'as' => 'transaction.show',
        'uses' => 'TransactionController@show'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'transaction.edit',
        'uses' => 'TransactionController@edit'
    ]);


    Route::post('/update/{id}', [
        'as' => 'transaction.update',
        'uses' => 'TransactionController@update'
    ]);


    Route::post('/delete/{id}', [
        'as' => 'transaction.delete',
        'uses' => 'TransactionController@delete'
    ]);

});

Route::group(['prefix' => 'admin/user'], function () {

    Route::get('/profile', [
        'as' => 'profile.index',
        'uses' => 'UserProfileController@index'
    ]);


});