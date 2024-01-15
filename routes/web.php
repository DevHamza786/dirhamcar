<?php

use App\Http\Controllers\admin\AddonController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\PolicyController;
use App\Http\Controllers\admin\CarController;
use App\Http\Controllers\admin\CarTypeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FeatureController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\RevervationController;
use App\Http\Controllers\admin\AboutUsController;
use App\Http\Controllers\admin\PrivacyPolicyController;
use App\Http\Controllers\admin\TermController;
use App\Http\Controllers\frontend\OffersController;
use App\Http\Controllers\frontend\AboutUssController;
use App\Http\Controllers\frontend\TermsController;
use App\Http\Controllers\frontend\PrivacyPolicysController;
use App\Http\Controllers\frontend\BranchesController;
use App\Http\Controllers\frontend\BlogsController;
use App\Http\Controllers\frontend\CarDetailController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\FleetController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminSubscribersController;
use App\Http\Controllers\AdminFeedbackController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SubscriberController;

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



Route::prefix('/')->group(function () {

    Route::get('update/currency', [HomeController::class, 'updateCurrency'])->name('update.currency');

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/cars/searching', [HomeController::class, 'carSearch'])->name('cars.searching');
    Route::get('/fleets', [FleetController::class, 'index'])->name('fleets');
    Route::get('/fleets/filter-data', [FleetController::class, 'filterData'])->name('fleets.filter-data');
    Route::get('/fleets/get-filter-date', [FleetController::class, 'getFilterDate'])->name('fleets.get-filter-date');
    Route::get('/car-details', [CarDetailController::class, 'index'])->name('car-details');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    
        // api for fancy box 
    Route::get('/car_imgs', [CarDetailController::class, 'fancybox'])->name('car_imgs');
    

    Route::get('/checkout/user/sessionId', [CheckoutController::class, 'userSessionId'])->name('checkout.user-sessionId');
    Route::get('/checkout/payment', [CheckoutController::class, 'userPayment'])->name('checkout.user-payment');
    Route::get('/checkout/send/invoice', [CheckoutController::class, 'sendInvoice'])->name('checkout.send-invoice');
    Route::get('/checkout/complete', [CheckoutController::class, 'completePayment'])->name('checkout.complete-payment');


    Route::post('/checkout-store', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::post('/checkout-store/checked', [CheckoutController::class, 'storeChecked'])->name('checkout.store.checked');

    Route::get('/create-checkout-session', [CheckoutController::class, 'createSession'])->name('fleets.create-checkout-session');
    Route::get('/about-us', [AboutUssController::class, 'index'])->name('about-us');
    Route::get('/privacy-policy', [PrivacyPolicysController::class, 'index'])->name('privacy-policy');
    Route::get('/term', [TermsController::class, 'index'])->name('term');
    Route::get('/offers', [OffersController::class, 'index'])->name('offers');
    Route::get('/branches', [BranchesController::class, 'index'])->name('branches');
    Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
    Route::get('/feedback', [FeedbackController::class, 'feedBack'])->name('feedback');
    Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
    Route::get('/blogs/{slug}', [BlogsController::class, 'show'])->name('show');
    Route::post('/feedback-store', [FeedbackController::class, 'store']);
    Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');
 
    Route::post('/contact', [ContactController::class, 'submitForm']);
});







Route::get('/dhc-admin', [LoginController::class, 'index']);
Route::post('/dhc-admin/store', [LoginController::class, 'store'])->name('dhc-admin.store');

Route::get('/logout', [LoginController::class, 'logout'])->middleware('logout.custom')->name('admin.logout');

Route::middleware(['auth.custom'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');


    // ----- Cars ---------
    Route::get('/car/list', [CarController::class, 'index'])->name('admin.car.index');
    Route::get('/car/create', [CarController::class, 'create'])->name('admin.car.create');
    Route::post('/car/store', [CarController::class, 'store'])->name('admin.car.store');
    Route::get('/car/destory', [CarController::class, 'destory'])->name('admin.car.destory');
    Route::get('/car/edit/{id}', [CarController::class, 'create'])->name('admin.car.edit');


    // ----- Cars type---------
    Route::get('/car/type/list', [CarTypeController::class, 'index'])->name('admin.carType.index');
    Route::get('/car/type/create', [CarTypeController::class, 'create'])->name('admin.carType.create');
    Route::post('/car/type/store', [CarTypeController::class, 'store'])->name('admin.carType.store');
    Route::get('/car/type/destory', [CarTypeController::class, 'destory'])->name('admin.carType.destory');
    Route::get('/car/type/edit/{id}', [CarTypeController::class, 'create'])->name('admin.carType.edit');


    // ----- Cars  feature---------

    Route::get('/feature/list', [FeatureController::class, 'index'])->name('admin.feature.index');
    Route::get('/feature/create', [FeatureController::class, 'create'])->name('admin.feature.create');
    Route::post('/feature/store', [FeatureController::class, 'store'])->name('admin.feature.store');
    Route::get('/feature/destory', [FeatureController::class, 'destory'])->name('admin.feature.destory');
    Route::get('/feature/edit/{id}', [FeatureController::class, 'create'])->name('admin.feature.edit');


    // ----- Cars   Addon---------

    Route::get('/addon/list', [AddonController::class, 'index'])->name('admin.addon.index');
    Route::get('/addon/create', [AddonController::class, 'create'])->name('admin.addon.create');
    Route::post('/addon/store', [AddonController::class, 'store'])->name('admin.addon.store');
    Route::get('/addon/destory', [AddonController::class, 'destory'])->name('admin.addon.destory');
    Route::get('/addon/edit/{id}', [AddonController::class, 'create'])->name('admin.addon.edit');



    // ----- Cars  Blog---------

    Route::get('/blog/list', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/blog/destory', [BlogController::class, 'destory'])->name('admin.blog.destory');
    Route::get('/blog/edit/{id}', [BlogController::class, 'create'])->name('admin.blog.edit');

    Route::get('/revervation', [RevervationController::class, 'index'])->name('admin.revervation.index');
    Route::get('/invoice/{id}', [RevervationController::class, 'invoicePdf'])->name('admin.revervation.invoice');
    Route::get('/revervation/driver/{id}', [RevervationController::class, 'revervationDriver'])->name('admin.revervation.driver');
    Route::get('/download-page/{id}', [RevervationController::class, 'downloadPage'])->name('download.page');
    Route::get('/download-page-pdf/{id}', [RevervationController::class, 'downloadPagePDF'])->name('download.pagepdf');
    
  
    Route::get('/', function () {
    return view('mail/test-old');
});

Route::get('/pdf', function () {
    $data = [
        'title' => 'Sample PDF',
        'content' => 'This is a sample PDF generated from Laravel view.'
    ];

    $pdf = new Dompdf();
    $pdf->loadHtml(View::make('mail/invoice', $data));
    $pdf->setPaper([0, 0, 920, 1400]);
    $pdf->setBasePath(public_path());


    // Render the PDF


    $pdf->render();

    // Output the generated PDF to the browser
    return $pdf->stream('sample.pdf');
});










    // Route::get('/revervation/create', [RevervationController::class, 'create'])->name('admin.revervation.create');
    // Route::post('/revervation/store', [RevervationController::class, 'store'])->name('admin.revervation.store');
    // Route::get('/revervation/destory', [RevervationController::class, 'destory'])->name('admin.revervation.destory');
    // Route::get('/revervation/edit/{id}', [RevervationController::class, 'create'])->name('admin.revervation.edit');
    
    
    // ----- Cars  Policy---------

    Route::get('/policy/list', [PolicyController::class, 'index'])->name('admin.policy.index');
    Route::get('/policy/create{id?}', [PolicyController::class, 'create'])->name('admin.policy.create');
    Route::post('/policy/store', [PolicyController::class, 'store'])->name('admin.policy.store');
    Route::get('/policy/destory', [PolicyController::class, 'destory'])->name('admin.policy.destory');
    Route::get('/policy/edit/{id}', [PolicyController::class, 'create'])->name('admin.policy.edit');




    Route::get('/admin/contacts', [AdminContactController::class, 'index'])->name('admin.contacts.index');

    // ------Email Subscription-------

    Route::get('/admin/subscribers', [AdminSubscribersController::class, 'index'])->name('admin.subscribers.index');

    // ------Feedback-------

    Route::get('/admin/feedback', [AdminFeedbackController::class, 'index'])->name('admin.feedback.index');
    
    Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('about-us', [AboutUsController::class, 'index'])->name('admin.about-us.index');
    Route::get('about-us/edit', [AboutUsController::class, 'edit'])->name('admin.about-us.edit');
    Route::post('about-us/update', [AboutUsController::class, 'update'])->name('admin.about-us.update');
    
    Route::get('privacy-policy', [PrivacyPolicyController::class, 'index'])->name('admin.privacy-policy.index');
    Route::get('privacy-policy/edit', [PrivacyPolicyController::class, 'edit'])->name('admin.privacy-policy.edit');
    Route::post('privacy-policy/update', [PrivacyPolicyController::class, 'update'])->name('admin.privacy-policy.update');
    
    Route::get('/admin/terms', [TermController::class, 'index'])->name('admin.term.index');
    Route::get('/admin/terms/edit', [TermController::class, 'edit'])->name('admin.term.edit');
    Route::post('/admin/terms/update', [TermController::class, 'update'])->name('admin.term.update');
});
    
    
});
