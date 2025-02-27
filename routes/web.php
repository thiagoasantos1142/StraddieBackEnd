<?php

use App\Http\Controllers\AdminuIController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\RegisterController;
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
Route::get('savetxt', [StradieSiteController::class, 'saveText']);
Route::get('index', [DashboardController::class, 'index']);
Route::get('landing-page', [LandingpageController::class, 'landing_page']);
Route::resource('/form-documents', FormDocuments::class);

Route::get('register', [AuthenticationController::class, 'register']);
Route::post('registerOriginador', [RegisterController::class, 'storeOriginador'])->name('register.originador');


Route::get('cadastro', [AuthenticationController::class, 'organizationRegistration']);
Route::get('organizationRegistration', [AuthenticationController::class, 'organizationRegistration']);
Route::post('organizationRegistration', [RegisterController::class, 'storeOrganization'])->name('register.organization');


Route::get('chat', [AdminuIController::class, 'chat']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function() {
        if (auth()->user()->user_type_id !== 1) {
            return redirect()->route('profile');
        }
        return app(DashboardController::class)->index();
    })->name('dashboard');

    Route::group(['prefix' => 'dashboard'], function () {

       

        Route::resource('/dueDiligence', DueDiligenceController::class);
        Route::post('/dueDiligence/cancel/{id}', [DueDiligenceController::class, 'cancel'])->name('dueDiligence.cancel');
        Route::post('/dueDiligence/aprove/{id}', [DueDiligenceController::class, 'aprove'])->name('dueDiligence.aprove');
        Route::get('/due-diligence/create/{creditRightsTitleId}', [DueDiligenceController::class, 'create'])->name('due-Diligence.create');
       

        Route::post('/users/update/roles/{id}', [UserController::class, 'updateRoles'])->name('updateRoles');
        Route::resource('/users', UserController::class);
        Route::resource('/organization', OrganizationController::class);
        Route::resource('/address', AddressController::class);

        //Offers
        Route::post('/assets/makeOffer/{assetId}', [OfferController::class, 'makeOffer'])->name('assets.makeOffer');
        Route::resource('/assets', AssetsController::class);
        Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');
        Route::get('/offers/received', [OfferController::class, 'getReceivedOffers'])->name('offers.received');
        Route::get('/offers/made', [OfferController::class, 'getMadeOffers'])->name('offers.made');
        
        Route::get('/offers/cancel', [OfferController::class, 'cancelMadeOffers'])->name('offers.cancel');
        
        Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');        
        Route::post('/offers/{offer}/accept', [OfferController::class, 'accept'])->name('offers.accept');
        Route::post('/offers/{offer}/counter', [OfferController::class, 'counter'])->name('offers.counter');
        //Offers
        

        Route::resource('/lawyer', LawyerController::class);
        Route::resource('/creditRightsTitle', CreditRightsTitleController::class);

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
        Route::resource('crtType', CrtTypeController::class);

        Route::post('/add-user-corporate', [UserController::class, 'addUserCorporate'])->name('corporate.add.user');
        Route::post('/credit-rights-title', [CreditRightsTitleController::class, 'addUserTitle'])->name('creditRightsTitle.add.user');
        Route::post('/save-lawyer-in-crt', [CreditRightsTitleController::class, 'addLawyerInTitle']);
        Route::post('/save-organization-incrt', [CreditRightsTitleController::class, 'addOrganizationInTitle']);
        Route::post('/deleteUsersCreditRigtsTitle', [UsersCreditRigtsTitleController::class, 'customDeleteRoute'])->name('deleteUsersCreditRigtsTitle');
        Route::post('/deleteLawyerCreditRigtsTitle', [CrtLawyerController::class, 'customDeleteRoute'])->name('deleteLawyerCreditRigtsTitle');
        Route::post('/deleteLawyerToUser', [LawyerController::class, 'deleteLawyerToUser'])->name('deleteLawyerToUser');

        Route::post('/upload/file', [FileController::class, 'upload'])->name('upload.file');
        Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
        Route::get('profile', [PagesController::class, 'profile'])->name('profile');
    });



    
        
    // Route::get('notify-list', [PagesController::class, 'notify_list']);
    // Route::get('email-inbox', [PagesController::class, 'email_inbox']);
    // Route::get('gallery', [PagesController::class, 'gallery']);
    // Route::get('about', [PagesController::class, 'about']);
    // Route::get('faq', [PagesController::class, 'faq']);
    // Route::get('terms', [PagesController::class, 'terms']);
    // Route::get('invoice', [PagesController::class, 'invoice']);
    // Route::get('pricing', [PagesController::class, 'pricing']);
    // Route::get('settings', [PagesController::class, 'settings']);
    // Route::get('blog', [PagesController::class, 'blog']);
    // Route::get('blog-details', [PagesController::class, 'blog_details']);
    // Route::get('blog-post', [PagesController::class, 'blog_post']);
    // Route::get('emptypage', [PagesController::class, 'emptypage']);
    // Route::get('file-manager', [PagesController::class, 'file_manager']);
    // Route::get('filemanager-list', [PagesController::class, 'filemanager_list']);
    // Route::get('shop', [PagesController::class, 'shop']);
    // Route::get('shop-description', [PagesController::class, 'shop_description']);
    // Route::get('cart', [PagesController::class, 'cart']);
    // Route::get('add-product', [PagesController::class, 'add_product']);
    // Route::get('wishlist', [PagesController::class, 'wishlist']);
    // Route::get('checkout', [PagesController::class, 'checkout']);


    // // Route::get('login', [AuthenticationController::class, 'login']);
    // Route::get('forgot-password', [AuthenticationController::class, 'forgot_password']);
    // Route::get('lockscreen', [AuthenticationController::class, 'lockscreen']);
    // Route::get('under-maintenance', [AuthenticationController::class, 'under_maintenance']);
    // Route::get('error400', [AuthenticationController::class, 'error400']);
    // Route::get('error401', [AuthenticationController::class, 'error401']);
    // Route::get('error403', [AuthenticationController::class, 'error403']);
    // Route::get('error404', [AuthenticationController::class, 'error404']);
    // Route::get('error500', [AuthenticationController::class, 'error500']);
    // Route::get('error503', [AuthenticationController::class, 'error503']);


    // Route::get('widgets', [WidgetsController::class, 'widgets']);


    // Route::get('alerts', [UikitController::class, 'alerts']);
    // Route::get('buttons', [UikitController::class, 'buttons']);
    // Route::get('colors', [UikitController::class, 'colors']);
    // Route::get('avatars', [UikitController::class, 'avatars']);
    // Route::get('dropdown', [UikitController::class, 'dropdown']);
    // Route::get('listgroup', [UikitController::class, 'listgroup']);
    // Route::get('tags', [UikitController::class, 'tags']);
    // Route::get('pagination', [UikitController::class, 'pagination']);
    // Route::get('navigation', [UikitController::class, 'navigation']);
    // Route::get('typography', [UikitController::class, 'typography']);
    // Route::get('breadcrumbs', [UikitController::class, 'breadcrumbs']);
    // Route::get('badge', [UikitController::class, 'badge']);
    // Route::get('offcanvas', [UikitController::class, 'offcanvas']);
    // Route::get('toast', [UikitController::class, 'toast']);
    // Route::get('scrollspy', [UikitController::class, 'scrollspy']);
    // Route::get('mediaobject', [UikitController::class, 'mediaobject']);
    // Route::get('accordion', [UikitController::class, 'accordion']);
    // Route::get('tabs', [UikitController::class, 'tabs']);
    // Route::get('modal', [UikitController::class, 'modal']);
    // Route::get('tooltipandpopover', [UikitController::class, 'tooltipandpopover']);
    // Route::get('progress', [UikitController::class, 'progress']);
    // Route::get('carousel', [UikitController::class, 'carousel']);


    // Route::get('icons', [IconsController::class, 'icons']);
    // Route::get('icons2', [IconsController::class, 'icons2']);
    // Route::get('icons3', [IconsController::class, 'icons3']);
    // Route::get('icons4', [IconsController::class, 'icons4']);
    // Route::get('icons5', [IconsController::class, 'icons5']);
    // Route::get('icons6', [IconsController::class, 'icons6']);
    // Route::get('icons7', [IconsController::class, 'icons7']);
    // Route::get('icons8', [IconsController::class, 'icons8']);
    // Route::get('icons9', [IconsController::class, 'icons9']);
    // Route::get('icons10', [IconsController::class, 'icons10']);


    // Route::get('cards', [AdminuIController::class, 'cards']);
    // Route::get('calendar2', [AdminuIController::class, 'calendar2']);
     Route::get('chat', [AdminuIController::class, 'chat']);
    // Route::get('notify', [AdminuIController::class, 'notify']);
    // Route::get('sweetalert', [AdminuIController::class, 'sweetalert']);
    // Route::get('rangeslider', [AdminuIController::class, 'rangeslider']);
    // Route::get('scroll', [AdminuIController::class, 'scroll']);
    // Route::get('loaders', [AdminuIController::class, 'loaders']);
    // Route::get('rating', [AdminuIController::class, 'rating']);
    // Route::get('timeline', [AdminuIController::class, 'timeline']);
    // Route::get('treeview', [AdminuIController::class, 'treeview']);
    // Route::get('ribbons', [AdminuIController::class, 'ribbons']);
    // Route::get('swiper', [AdminuIController::class, 'swiper']);
    // Route::get('users-list', [AdminuIController::class, 'users_list']);
    // Route::get('search', [AdminuIController::class, 'search']);


    // Route::get('form-elements', [FormsController::class, 'form_elements']);
    // Route::get('form-layouts', [FormsController::class, 'form_layouts']);
    // Route::get('form-advanced', [FormsController::class, 'form_advanced']);
    // Route::get('form-editor', [FormsController::class, 'form_editor']);
    // Route::get('form-validation', [FormsController::class, 'form_validation']);
    // Route::get('form-input-spinners', [FormsController::class, 'form_input_spinners']);
    // Route::get('select-2', [FormsController::class, 'select_2']);


    // Route::get('tables', [TablesController::class, 'tables']);
    // Route::get('datatable', [TablesController::class, 'datatable']);
    // Route::get('grid-tables', [TablesController::class, 'grid_tables']);


    // Route::get('maps1', [MapsController::class, 'maps1']);
    // Route::get('maps2', [MapsController::class, 'maps2']);
    // Route::get('maps', [MapsController::class, 'maps']);


    // Route::get('chart-chartist', [ChartsController::class, 'chart_chartist']);
    // Route::get('chart-echart', [ChartsController::class, 'chart_echart']);
    // Route::get('chart-apex', [ChartsController::class, 'chart_apex']);
});
