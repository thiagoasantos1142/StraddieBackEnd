<?php

use App\Http\Controllers\V1\Admin\DashboardController;
use App\Http\Controllers\V1\Admin\DueDiligenceController;
use App\Http\Controllers\V1\Admin\FileController;
use App\Http\Controllers\V1\Admin\LawyerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\V1\Admin\AssetsController;
use App\Http\Controllers\V1\Admin\CourtsController;
use App\Http\Controllers\V1\Admin\CreditRightsTitleController;
use App\Http\Controllers\V1\Admin\OrganizationController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\V1\Admin\AddressController;
use App\Http\Controllers\V1\Admin\ContactsController;
use App\Http\Controllers\V1\Admin\CrtLawyerController;
use App\Http\Controllers\V1\Admin\CrtTypeController;
use App\Http\Controllers\V1\Admin\FormDocuments;
use App\Http\Controllers\V1\Admin\OfferController;
use App\Http\Controllers\V1\Admin\UsersCreditRigtsTitleController;
use App\Http\Controllers\V1\Sites\StradieSiteController;

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

Route::resource('/', StradieSiteController::class);
Route::get('index', [DashboardController::class, 'index']);
Route::get('landing-page', [LandingpageController::class, 'landing_page']);
Route::resource('/form-documents', FormDocuments::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'dashboard'], function () {

        Route::group(['middleware' => ['can:define-access--company-admin']], function () {
            Route::resource('/users', UserController::class);
            Route::post('/assets/makeOffer/{assetId}', [AssetsController::class, 'makeOffer'])->name('assets.makeOffer');
            Route::resource('/assets', AssetsController::class);
            Route::resource('/offers', OfferController::class);
            
            
        });

        Route::group(['middleware' => ['can:define-access--admin']], function () {
            Route::resource('/organization', OrganizationController::class);
            Route::resource('/address', AddressController::class);

            Route::resource('/lawyer', LawyerController::class);
            Route::resource('/creditRightsTitle', CreditRightsTitleController::class);
            Route::resource('/dueDiligence', DueDiligenceController::class);
            Route::post('/dueDiligence/cancel/{id}', [DueDiligenceController::class, 'cancel'])->name('dueDiligence.cancel');
            Route::post('/dueDiligence/aprove/{id}', [DueDiligenceController::class, 'aprove'])->name('dueDiligence.aprove');

            Route::resource('/file', AddressController::class);
            Route::get('/download/{id}', [FileController::class, 'download'])->name('download.file');
            Route::post('uploadFile',  [FileController::class, 'uploadFile'])->name('uploadFile');

            Route::get('file/aprove/{id}',  [FileController::class, 'aprove'])->name('aprove.file');
            Route::get('file/reject/{id}',  [FileController::class, 'reject'])->name('reject.file');

            
            Route::resource('/files', FileController::class);
            Route::resource('/usersCreditRigtsTitle', UsersCreditRigtsTitleController::class);
            Route::resource('/crtLawyer', CrtLawyerController::class);
            Route::resource('/contacts', ContactsController::class);
            Route::get('/varas/{courtId}', [CourtsController::class, 'getCourtVaras']);
            Route::get('/due-diligence/create/{creditRightsTitleId}', [DueDiligenceController::class, 'create'])->name('dueDiligence.create');
            Route::resource('crtType', CrtTypeController::class);

            Route::post('/add-user-corporate', [UserController::class, 'addUserCorporate'])->name('corporate.add.user');
            Route::post('/credit-rights-title', [CreditRightsTitleController::class, 'addUserTitle'])->name('creditRightsTitle.add.user');
            Route::post('/add-user-lawyer', [LawyerController::class, 'addUserLawyer'])->name('lawyer.add.user');

            Route::post('/deleteUsersCreditRigtsTitle', [UsersCreditRigtsTitleController::class, 'customDeleteRoute'])->name('deleteUsersCreditRigtsTitle');
            Route::post('/deleteLawyerCreditRigtsTitle', [CrtLawyerController::class, 'customDeleteRoute'])->name('deleteLawyerCreditRigtsTitle');
            Route::post('/deleteLawyerToUser', [LawyerController::class, 'deleteLawyerToUser'])->name('deleteLawyerToUser');
        });

        Route::post('/upload/file', [FileController::class, 'upload'])->name('upload.file');
        Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
        Route::get('profile', [PagesController::class, 'profile'])->name('profile');
    });
});
