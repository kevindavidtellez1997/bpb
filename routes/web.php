<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\StripeController;




Route::get('/home', function () {
    return view('home');
});
 Route::get('/', function () {
     return view('home');
 });
 Route::get('/changeClassDay', function () {
    return view('cambiarHoraClase');
});
Route::get('/signTermsOfService', function () {
    return view('firmarContrato');
});
// Route::get('/', function () {
//        return view('sinConecxion');
// });
Route::get('/verifyCode', function () {
      return view('verificarComprarWallet');
  });
Route::get('/PayWorkshop', function () {
    return view('pagarWorshopWallet');
});
Route::get('/Account',function(){
    return View('acount');
});
Route::get('/campsClinics',function(){
    return View('Camps&Clinics');
});
 Route::get('/ReserCoach2', function () {
     return view('ReserCoach2');
 });
 Route::get('/bookLesson', function () {
     return view('calendarioClase');
 });

 Route::get('/boockCoach', function () {
    return view('boockCoachs');
});
Route::get('/UserAdmin', function () {
    return view('UserAdmin');
});
Route::get('/UserLesson',function(){
    return View('UserLesson');
});
Route::get('/Lesson',function(){
    return View('boockLesson');
});
Route::get('/TermsofService',function(){
    return View('teminos');
});
Route::get('/PayWallet',function(){
    return View('/PayWallet');
});
Route::get('/Wallet',function(){
    return View('/Wallet');
});
Route::get('/StripeWallet',function(){
    return View('stripeWallet');
});

Route::post('/payment', [StripeController::class, 'store']);

Route::get('/Stripe',function(){
    return View('index');
});

Route::get('/coupons',function(){
    return View('cupomUser');
});
Route::get('/selectCupons',function(){
    return View('selectCupons');
});
Route::get('/Athletes',function(){
    return View('Students');
});
Route::get('/RegisterAthletes',function(){
    return View('registroEstudiantes');
});

Route::get('/recovery',function(){
    return View('passwordRecovery');
});

Route::get('/password',function(){
    return View('cambiarPassword');
});
Route::get('/recoveryCode', function(){
    return View('codigoEmail');
});
Route::get('/recoveryCodePassword', function(){
    return View('recoveryCodePassword');
});
Route::get('/editUser', function(){
    return View('atletaEditar');
});
Route::get('/code', function(){
    return View('veriParaComprar');
});
Route::get('/register',[RegisterController::class,'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register',[RegisterController::class,'store'])
    ->name('register.store');

Route::get('/login',[SessionsController::class,'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login',[SessionsController::class,'store'])
    ->name('login.store');

Route::get('/logout',[SessionsController::class,'destroy'])->name('login.destroy');

    



