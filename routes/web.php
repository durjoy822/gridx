<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Working_exprienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\ContactController;
Use App\Http\Controllers\SkillController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\AdminauthController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CvUploadController;
use App\Http\Controllers\AdminProfileInfoController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ContactformController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WorkController;

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

//Route::get('/work/index', function () {
//    return view('admin.work.index');
//});
Route::get('/',[HomeController::class,'Home'])->name('home');
Route::get('/about',[HomeController::class,'About'])->name('about');
Route::get('/work',[HomeController::class,'Work'])->name('work');
Route::get('/blog',[HomeController::class,'Blog'])->name('blog');
Route::get('/skill',[HomeController::class,'Skill'])->name('skill');
Route::get('/service',[HomeController::class,'Service'])->name('service');
Route::get('/client',[HomeController::class,'Client'])->name('client');
Route::get('/blog/details/{id}',[HomeController::class,'blogDetails'])->name('blog.details');
Route::get('/contact',[HomeController::class,'Contact'])->name('contact');
Route::fallback(function () {return view('home.error');});


Route::group(['prefix' => 'admin'], function () {
    Route::middleware(admin::class)->group(function () {
        Route::get('/dashboard', [AdminController::class, 'home'])->name('dashboard');
        Route::get('/logout',[AdminauthController::class,'logout'])->name('logout');

    });
    Route::get('/forgot/form', [AdminController::class,'forgotPass'])->name('forgot.password');
    Route::get('/sent/email', [AdminController::class,'sentEmail'])->name('sent.email');
    Route::get('/reset/password/{token}', [AdminController::class,'resetPassform'])->name('reset.password.form');
    Route::post('/new/password', [AdminController::class,'newPassword'])->name('new.password.get');


    Route::get('/login',[AdminController::class,'login'])->name('login');
    Route::get('/register',[AdminController::class,'register'])->name('register');
    Route::post('/admin/store',[AdminauthController::class,'adminStore'])->name('admin.store');
    Route::post('/login/check',[AdminauthController::class,'loginCheck'])->name('login.check');

    Route::get('/experience/index',[Working_exprienceController::class,'experienceIndex'])->name('experience.index');
    Route::get('/experience/add',[Working_exprienceController::class,'experienceAdd'])->name('experience.add');
    Route::post('/experience/store',[Working_exprienceController::class,'experienceStore'])->name('experience.store');
    Route::get('/experience/edit/{id}',[Working_exprienceController::class,'experienceEdit'])->name('experience.edit');
    Route::post('/experience/update/{id}',[Working_exprienceController::class,'experienceUpdate'])->name('experience.update');
    Route::get('/experience/delete/{id}',[Working_exprienceController::class,'experienceDelete'])->name('experience.delete');

    Route::get('/education/index',[EducationController::class,'educationIndex'])->name('education.index');
    Route::get('/education/add',[EducationController::class,'educationAdd'])->name('education.add');
    Route::post('/education/store',[EducationController::class,'educationStore'])->name('education.store');
    Route::get('/education/edit/{id}',[EducationController::class,'educationEdit'])->name('education.edit');
    Route::post('/education/update/{id}',[EducationController::class,'educationUpdate'])->name('education.update');
    Route::get('/education/delete/{id}',[EducationController::class,'educationDelete'])->name('education.delete');

   Route::get('/project/index',[ProjectController::class,'projectIndex'])->name('project.index');
   Route::get('/project/add',[ProjectController::class,'projectAdd'])->name('project.add');
   Route::post('/project/store',[ProjectController::class,'projectStore'])->name('project.store');
   Route::get('/project/edit/{id}',[ProjectController::class,'projectEdit'])->name('project.edit');
   Route::get('/project/details/{id}',[ProjectController::class,'projectDetails'])->name('project.details');
   Route::post('/project/update/{id}',[ProjectController::class,'projectUpdate'])->name('project.update');
   Route::get('/project/delete/{id}',[ProjectController::class,'projectDelete'])->name('project.delete');

    Route::get('/work/index',[WorkController::class,'workIndex'])->name('work.home');
    // Route::get('/work/index',[WorkController::class,'workIndex'])->name('work.home');

    Route::get('/blog/index',[BlogController::class,'blogIndex'])->name('blog.index');
    Route::get('/blog/add',[BlogController::class,'blogAdd'])->name('blog.add');
    Route::post('/blog/store',[BlogController::class,'blogStore'])->name('blog.store');
    Route::get('/blog/edit/{id}',[BlogController::class,'blogEdit'])->name('blog.edit');
    Route::post('/blog/update/{id}',[BlogController::class,'blogUpdate'])->name('blog.update');
    Route::get('/blog/delete/{id}',[BlogController::class,'blogDelete'])->name('blog.delete');

    Route::get('/offer/index',[OfferController::class,'offerIndex'])->name('offer.index');
    Route::get('/offer/add',[OfferController::class,'offerAdd'])->name('offer.add');
    Route::post('/offer/store',[OfferController::class,'offerStore'])->name('offer.store');
    Route::get('/offer/edit/{id}',[OfferController::class,'offerEdit'])->name('offer.edit');
    Route::post('/offer/update/{id}',[OfferController::class,'offerUpdate'])->name('offer.update');
    Route::get('/offer/delete/{id}',[OfferController::class,'offerDelete'])->name('offer.delete');

    Route::get('/social/index',[SocialMediaController::class,'socialIndex'])->name('social.index');
    Route::get('/social/add',[SocialMediaController::class,'socialAdd'])->name('social.add');
    Route::post('/social/store',[SocialMediaController::class,'socialStore'])->name('social.store');
    Route::get('/social/edit/{id}',[SocialMediaController::class,'socialEdit'])->name('social.edit');
    Route::post('/social/update/{id}',[SocialMediaController::class,'socialUpdate'])->name('social.update');
    Route::get('/social/delete/{id}',[SocialMediaController::class,'socialDelete'])->name('social.delete');

    Route::get('/contact/index',[ContactController::class,'contactIndex'])->name('contact.index');
    Route::get('/contact/add',[ContactController::class,'contactAdd'])->name('contact.add');
    Route::post('/contact/store',[ContactController::class,'contactStore'])->name('contact.store');
    Route::get('/contact/edit/{id}',[ContactController::class,'contactEdit'])->name('contact.edit');
    Route::post('/contact/update/{id}',[ContactController::class,'contactUpdate'])->name('contact.update');
    Route::get('/contact/delete/{id}',[ContactController::class,'contactDelete'])->name('contact.delete');

    Route::get('/skill/index',[SkillController::class,'skillIndex'])->name('skill.index');
    Route::get('/skill/add',[SkillController::class,'skillAdd'])->name('skill.add');
    Route::post('/skill/store',[SkillController::class,'skillStore'])->name('skill.store');
    Route::get('/skill/edit/{id}',[SkillController::class,'skillEdit'])->name('skill.edit');
    Route::post('/skill/update/{id}',[SkillController::class,'skillUpdate'])->name('skill.update');
    Route::get('/skill/delete/{id}',[SkillController::class,'skillDelete'])->name('skill.delete');

    Route::get('/subscriber/index',[SubscriberController::class,'subscriberIndex'])->name('subscriber.index');
    Route::post('/subscriber/store',[SubscriberController::class,'subscriberStore'])->name('subscriber.store');

    Route::get('/slider/index',[SliderController::class,'sliderIndex'])->name('slider.index');
    Route::get('/slider/add',[SliderController::class,'sliderAdd'])->name('slider.add');
    Route::post('/slider/store',[SliderController::class,'sliderStore'])->name('slider.store');
    Route::get('/slider/edit/{id}',[SliderController::class,'sliderEdit'])->name('slider.edit');
    Route::post('/slider/update/{id}',[SliderController::class,'sliderUpdate'])->name('slider.update');
    Route::get('/slider/delete/{id}',[SliderController::class,'sliderDelete'])->name('slider.delete');

    Route::get('/cv/index',[CvUploadController::class,'cvIndex'])->name('cv.index');
    Route::get('/cv/add',[CvUploadController::class,'cvAdd'])->name('cv.add');
    Route::post('/cv/store',[CvUploadController::class,'cvStore'])->name('cv.store');
    Route::get('/cv/edit/{id}',[CvUploadController::class,'cvEdit'])->name('cv.edit');
    Route::post('/cv/update/{id}',[CvUploadController::class,'cvUpdate'])->name('cv.update');
    Route::get('/cv/delete/{id}',[CvUploadController::class,'cvDelete'])->name('cv.delete');
    Route::get('/cv/download/{id}',[CvUploadController::class,'cvDownload'])->name('cv.download');

    Route::get('/profile/index',[AdminProfileInfoController::class,'profileIndex'])->name('profile.index');
//    Route::get('/profile/add',[AdminProfileInfoController::class,'aboutAdd'])->name('profile.add');
//    Route::post('/profile/store',[AdminProfileInfoController::class,'profileStore'])->name('profile.store');
    Route::get('/profile/edit/{id}',[AdminProfileInfoController::class,'profileEdit'])->name('profile.edit');
    Route::post('/profile/update',[AdminProfileInfoController::class,'profileUpdate'])->name('profile.update');
    Route::get('/profile/delete/{id}',[AdminProfileInfoController::class,'profileDelete'])->name('profile.delete');

    Route::get('/logo/index',[LogoController::class,'logoIndex'])->name('logo.index');
    Route::get('/logo/add',[LogoController::class,'logoAdd'])->name('logo.add');
    Route::post('/logo/store',[LogoController::class,'logoStore'])->name('logo.store');
    Route::get('/logo/edit/{id}',[LogoController::class,'logoEdit'])->name('logo.edit');
    Route::post('/logo/update/{id}',[LogoController::class,'logoUpdate'])->name('logo.update');
    Route::get('/logo/delete/{id}',[LogoController::class,'logoDelete'])->name('logo.delete');

    Route::post('/sent/mail',[ContactformController::class, 'SentMail'])->name('sent.mail');

    Route::get('/client/index',[ClientController::class,'clientIndex'])->name('client.index');
    Route::get('/client/add',[ClientController::class,'clientAdd'])->name('client.add');
    Route::post('/client/store',[ClientController::class,'clientStore'])->name('client.store');
    Route::get('/client/edit/{id}',[ClientController::class,'clientEdit'])->name('client.edit');
    Route::post('/client/update/{id}',[ClientController::class,'clientUpdate'])->name('client.update');
    Route::get('/client/delete/{id}',[ClientController::class,'clientDelete'])->name('client.delete');
});


