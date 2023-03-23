<?php

use Illuminate\Support\Facades\Route;

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
// api route start



// api route end

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/users/changestatus/{id}', [App\Http\Controllers\UserController::class, 'change_status'])->name('changestatus');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'update_profile'])->name('profile.update');
Route::post('/update-address/{id}', [App\Http\Controllers\HomeController::class, 'update_address'])->name('address.update');



Route::get('/employees', [App\Http\Controllers\UserController::class, 'employees'])->name('employees');
Route::get('/employees/create', [App\Http\Controllers\UserController::class, 'create_employee'])->name('employees.create');
Route::post('/employees/stored', [App\Http\Controllers\UserController::class, 'stored_employee'])->name('employees.stored');
Route::get('/employees/edit/{id}', [App\Http\Controllers\UserController::class, 'edit_employee'])->name('employees.edit');
Route::post('/employees/update/{id}', [App\Http\Controllers\UserController::class, 'update_employee'])->name('employees.update');

Route::get('/info-resources', [App\Http\Controllers\UserController::class, 'inforesources'])->name('inforesources');
Route::get('/info-resources/create', [App\Http\Controllers\UserController::class, 'inforesources_create'])->name('inforesources.create');
Route::post('/info-resources/store', [App\Http\Controllers\UserController::class, 'inforesources_store'])->name('inforesources.store');
Route::get('/info-resources/edit/{id}', [App\Http\Controllers\UserController::class, 'inforesources_edit'])->name('inforesources.edit');
Route::post('/info-resources/update/{id}', [App\Http\Controllers\UserController::class, 'inforesources_update'])->name('inforesources.update');
Route::get('/info-resources/delete/{id}', [App\Http\Controllers\UserController::class, 'inforesources_delete'])->name('inforesources.delete');

Route::get('/job-completed', [App\Http\Controllers\UserController::class, 'complete_job'])->name('complete_job');
Route::get('/jobs_export',[App\Http\Controllers\UserController::class, 'get_jobs_data'])->name('jobs.export');
Route::get('/complete-jobs-export',[App\Http\Controllers\UserController::class, 'get_completejobs_data'])->name('completejobs.export');
Route::get('/downloads',[App\Http\Controllers\UserController::class, 'get_downloads'])->name('user.downloads');




Route::delete('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');
Route::get('/admins', [App\Http\Controllers\AdminController::class, 'index'])->name('admins');
Route::delete('/admins/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admins.delete');

Route::get('/finances', [App\Http\Controllers\FinanceController::class, 'index'])->name('finances');
Route::delete('/finances/delete/{id}', [App\Http\Controllers\FinanceController::class, 'destroy'])->name('finances.delete');

Route::get('/contractors', [App\Http\Controllers\ContractorController::class, 'index'])->name('contractors');
Route::delete('/contractors/delete/{id}', [App\Http\Controllers\ContractorController::class, 'destroy'])->name('contractors.delete');

Route::get('/job-timesheets', [App\Http\Controllers\ContractorController::class, 'timesheets'])->name('timesheets');

Route::resource('/jobs', 'App\Http\Controllers\JobsController');
Route::resource('/jobdetails', 'App\Http\Controllers\JobDetailsController');
Route::resource('/notes', 'App\Http\Controllers\NotesController');
Route::resource('/exemptions', 'App\Http\Controllers\ExemptionsController');
Route::resource('/contact-info', 'App\Http\Controllers\ContactInfoController');
Route::resource('/logs', 'App\Http\Controllers\LogsController');
Route::resource('/timespents', 'App\Http\Controllers\TimeSpentController');
Route::resource('/tenants', 'App\Http\Controllers\TenantsController');
Route::resource('/otherworks', 'App\Http\Controllers\OtherWorksController');
Route::resource('/orders', 'App\Http\Controllers\OrdersController');
Route::resource('/cardlefts', 'App\Http\Controllers\CartLeftController');
Route::resource('/documents', 'App\Http\Controllers\DocumentsController');
Route::resource('/info', 'App\Http\Controllers\InfoController');
Route::resource('/tradies-directory', 'App\Http\Controllers\TradiesController');


Route::get('/contractors/details/{id}', [App\Http\Controllers\ContractorController::class, 'details'])->name('contractors.details');


Route::get('/application-received', [App\Http\Controllers\Application::class, 'index'])->name('application');