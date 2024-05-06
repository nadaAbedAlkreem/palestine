<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Auth\UserController;
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
 
 
 

//Donors
Route::group([ 'middleware' => [ 'auth:admin','localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile');
Route::post('/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::delete('images/delete/{id}',[App\Http\Controllers\NewsController::class, 'imagesDelete'])->name('news.images'); 
Route::get('setting/index',[App\Http\Controllers\SettingsController::class, 'index'])->name('setting');
Route::post('setting/update',[App\Http\Controllers\SettingsController::class, 'update'])->name('setting.update');
Route::get('NewsImages/{id}', [App\Http\Controllers\NewsController::class, 'NewsImages']);
Route::delete('NewsImagesDelete/{id}', [App\Http\Controllers\NewsController::class, 'NewsImagesDelete']);
Route::get('VisualLibrariesImages/{id}', [App\Http\Controllers\VisualLibrariesController::class, 'VisualLibrariesImages']);
Route::delete('VisualLibrariesImagesDelete/{id}', [App\Http\Controllers\VisualLibrariesController::class, 'VisualLibrariesImagesDelete']);
 
Route::resource('news',  App\Http\Controllers\NewsController::class)->withTrashed();
Route::resource('visualLibraries',  App\Http\Controllers\VisualLibrariesController::class)->withTrashed();
Route::resource('slider',  App\Http\Controllers\SliderController::class)->withTrashed();
Route::resource('publicationsAndReports',  App\Http\Controllers\PublicationsAndReportsController::class)->withTrashed();
Route::resource('partners',  App\Http\Controllers\PartnersController::class)->withTrashed();
Route::resource('achievements',  App\Http\Controllers\AchievementsController::class)->withTrashed();
Route::resource('programs',  App\Http\Controllers\ProgramsController::class)->withTrashed();
Route::resource('contactUs',  App\Http\Controllers\ContactUsController::class)->withTrashed();
Route::resource('companies',  App\Http\Controllers\CompaniesController::class)->withTrashed();
Route::resource('volunteers',  App\Http\Controllers\VolunteersController::class)->withTrashed();
Route::resource('employmentsOrders',  App\Http\Controllers\EmploymentsOrdersController::class)->withTrashed();
Route::resource('donors',  App\Http\Controllers\DonorsController::class)->withTrashed();
Route::resource('users',  App\Http\Controllers\UserController::class)->withTrashed();
Route::get('/select2-autocomplete-ajax-news',[App\Http\Controllers\SliderController::class,'dataAjaxNewsSliderDropdown'])->name('select2.news');
Route::get('/download',[App\Http\Controllers\Controller::class,'download'])->name('download');


//EmploymentsOrders
Route::post('achievements/update',[App\Http\Controllers\AchievementsController::class, 'update'])->name('achievements.update');
Route::post('programs/update',[App\Http\Controllers\ProgramsController::class, 'update'])->name('programs.update');
Route::post('publicationsAndReports/update',[App\Http\Controllers\PublicationsAndReportsController::class, 'update'])->name('publicationsAndReportsController.update');
Route::post('visualLibraries/update',[App\Http\Controllers\VisualLibrariesController::class, 'update'])->name('visualLibraries.update');
Route::post('partners/update',  [App\Http\Controllers\PartnersController::class , 'update'])->name('partners.update');
Route::post('slider/update',[App\Http\Controllers\SliderController::class, 'update'])->name('slider.update');
Route::delete('roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
 
Route::post('news/update',[App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
Route::get('home/setting',[App\Http\Controllers\SettingsController::class, 'indexHome'])->name('home.setting');
Route::get('valuesPrinciples/setting',[App\Http\Controllers\SettingsController::class, 'indexValuesPrinciples'])->name('valuesPrinciples.index');
Route::get('goals/setting',[App\Http\Controllers\SettingsController::class, 'indexGoals'])->name('goals.index');
Route::get('association/setting',[App\Http\Controllers\SettingsController::class, 'indexAssociation'])->name('association.index');
Route::get('vision/setting',  [App\Http\Controllers\SettingsController::class , 'indexVision'])->name('vision.index');
Route::get('messags/setting',  [App\Http\Controllers\SettingsController::class , 'indexMessage'])->name('messags.index');
 
Route::post('home/update',[App\Http\Controllers\SettingsController::class, 'updateHome'])->name('home.update');
Route::post('valuesPrinciples/update',[App\Http\Controllers\SettingsController::class, 'updateValuesPrinciples'])->name('valuesPrinciples.update');
Route::post('goals/update',[App\Http\Controllers\SettingsController::class, 'updateGoals'])->name('goals.update');
Route::post('association/update',[App\Http\Controllers\SettingsController::class, 'updateAssociation'])->name('association.update');
Route::post('vision/update',  [App\Http\Controllers\SettingsController::class , 'updateVision'])->name('vision.update');
Route::post('message/update',  [App\Http\Controllers\SettingsController::class , 'updateMessage'])->name('message.update');
Route::get('roles/{role}/give-permissions', [RoleController::class, 'addPermissionToRole'])
->name('roles.give-permissions');
Route::post('roles/{roleId}/update-permissions', [RoleController::class, 'givePermissionToRole'])
    ->name('roles.update-permissions');
Route::get('permissions/{permissions}/delete', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permissions.destroy');

Route::resources([
    'roles' => App\Http\Controllers\RoleController::class,
    'users' => App\Http\Controllers\Auth\UserController::class,
    'permissions' =>App\Http\Controllers\PermissionController::class
 ]);

});