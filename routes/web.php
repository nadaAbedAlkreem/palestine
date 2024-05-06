 


<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
include_once __DIR__.'/dashboard.php';
include_once __DIR__.'/auth.php';


 
Route::get('web/home', [App\Http\Controllers\webControllers\HomeControllers::class, 'index'])->name('web.home');
Route::get('web/company', [App\Http\Controllers\webControllers\CompanyController::class, 'index'])->name('company.home');
Route::get('web/contactUs', [App\Http\Controllers\webControllers\ContactUsController::class, 'index'])->name('contactUs.home');
Route::get('web/donors', [App\Http\Controllers\webControllers\DonationController::class, 'index'])->name('donation.home');
Route::get('web/employment', [App\Http\Controllers\webControllers\EmploymentController::class, 'index'])->name('employment.home');
Route::get('web/volunteer', [App\Http\Controllers\webControllers\VolunteeringContoller::class, 'index'])->name('volunteer.home');

Route::get('web/aboutUs', [App\Http\Controllers\webControllers\SettingController::class, 'aboutUs'])->name('about_us.index');
Route::get('web/principles', [App\Http\Controllers\webControllers\SettingController::class, 'principles'])->name('principles.index');
Route::get('web/goales', [App\Http\Controllers\webControllers\SettingController::class, 'goales'])->name('goales.index');

Route::get('web/news/{id}', [App\Http\Controllers\webControllers\NewsController::class, 'index'])->name('web.news.index');
 
Route::get('web/search', [App\Http\Controllers\webControllers\NewsController::class, 'searchNews'])->name('news.search');
Route::get('web/allNews', [App\Http\Controllers\webControllers\NewsController::class, 'allNews'])->name('news.all');

Route::get('web/programs/all', [App\Http\Controllers\webControllers\ProgramsController::class, 'allPrograms'])->name('programs.all'); 
Route::get('web/programs/details/{id}', [App\Http\Controllers\webControllers\ProgramsController::class, 'index'])->name('programs.details');
Route::get('web/programs/search', [App\Http\Controllers\webControllers\ProgramsController::class, 'searchPrograms'])->name('programs.search');

Route::get('web/all/publicationsAndReport', [App\Http\Controllers\webControllers\PublicationsAndReportsController::class, 'allPublicationAndReport'])->name('publicationsAndReport.all');
 

Route::get('web/visualLibraries/{id}', [App\Http\Controllers\webControllers\VisualLibrariesController::class, 'index'])->name('web.visualLibraries.index');
Route::get('web/all/visualLibraries', [App\Http\Controllers\webControllers\VisualLibrariesController::class, 'allVisualLibraries'])->name('visualLibraries.all');
 
Route::post('web/company/store', [App\Http\Controllers\webControllers\CompanyController::class, 'store'])->name('company.store');
Route::post('web/donors/store', [App\Http\Controllers\webControllers\DonationController::class, 'store'])->name('donation.store');
Route::post('web/contactUs/store', [App\Http\Controllers\webControllers\ContactUsController::class, 'store'])->name('contactUs.store');
Route::post('web/employment/store', [App\Http\Controllers\webControllers\EmploymentController::class, 'store'])->name('employment.store');
Route::post('web/volunteer/store',[App\Http\Controllers\webControllers\VolunteeringContoller::class, 'store'])->name('vlounteer.store');
 