<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KonselorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JadwalKonselingController;
use App\Models\JadwalKonseling;
use App\Models\Konseling;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingKonselingController;
use App\Http\Controllers\CancelBookingController;
use App\Models\BookingKonseling;
use App\Models\Reschedule;
use App\Http\Controllers\RescheduleController;

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

// Route::get('/', function () {
//     return view('welcome', [ArtikelController::class, 'index']);
// });
Route::middleware(['guest'])->group(function(){
    Route::get('/', [ArtikelController::class, 'getAllArtikels'])->name('welcome');
    Route::get('/login', [AuthController::class, 'indexlogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('actionLoginUser');
    Route::get('/register', [AuthController::class, 'indexregister'])->name('register');
    Route::post('/register', [AuthController::class, 'actionRegisterUser'])->name('actionRegisterUser');
    Route::get('/loginKonselor', [AuthController::class, 'indexloginKonselor'])->name('loginKonselor');
    Route::post('/loginKonselor', [AuthController::class, 'loginKonselor'])->name('actionLoginKonselor');
    Route::get('/registerKonselor', [AuthController::class, 'indexregisterKonselor'])->name('registerKonselor');
    Route::post("/registerKonselor",[AuthController::class,'actionRegisterKonselor'])->name('actionRegisterKonselor');
});
   
// Route::prefix('admin')->group(function () {
//     Route::get('/login', 'UserController@loginForm')->name('admin.login');
//     Route::post('/login', 'UserController@login')->name('admin.login.submit');
    
// });
// Route::get('/admin/login', [UserController::class, 'loginForm'])->name('login');
// Route::post('/admin/login', [UserController::class, 'login'])->name('login.submit');
// Route::get('/admin/reset', [UserController::class, 'resetForm'])->name('reset');
// Route::post('/admin/reset', [UserController::class, 'ubahPassword'])->name('reset.submit');
// Route::get('/konseling/create', [KonselingController::class, 'create'])->name('konseling.create');
// Route::get('/konseling/sukses', [KonselingController::class, 'suksesOrder'])->name('konseling.sukses');
Route::get('/artikel/show/{artikel}', [ArtikelController::class, 'show'])->name('artikel.show');
// Route::post('/konseling', [KonselingController::class, 'store'])->name('konseling.store');


// Route::middleware('auth')->group(function(){
//     Route::get('/logout',[UserController::class,'logout']);
//     Route::get('/admin/konseling', [KonselingController::class, 'index'])->name('konseling.index');
   
//     Route::get('admin/konseling/{konseling}/edit', [KonselingController::class, 'edit'])->name('konseling.edit');
//     Route::put('/konseling/{konseling}/update', [KonselingController::class, 'update'])->name('konseling.update');
//     Route::delete('/konseling/{konseling}/destroy', [KonselingController::class, 'destroy'])->name('konseling.destroy');
    
//     Route::get('/admin/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
//     Route::get('/admin/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
//     Route::post('/admin/artikel/store/', [ArtikelController::class, 'store'])->name('artikel.store');
    
//     Route::get('/admin/artikel/edit/{artikel}', [ArtikelController::class, 'edit'])->name('artikel.edit');
//     Route::put('/admin/artikel/edit/{artikel}',[ArtikelController::class, 'update'])->name('artikel.update');
//     Route::delete('/admin/artikel/{artikel}',[ArtikelController::class, 'destroy'])->name('artikel.destroy');
// });
Route::middleware(['auth:admin'])->group(function(){ 
   
    Route::get('/admin',[AdminController::class,'indexHomeAdmin'])->name('homeAdmin');
    Route::get('/admin/allMember',[AdminController::class,'indexAllMember'])->name('indexAllMember');
    Route::get('/admin/allBK',[AdminController::class,'indexAllBK'])->name('indexAllBK');
    Route::post("/admin/aktivasiKonselor/{id}",[AdminController::class,'activateKonselor'])->name('activateKonselor');
    Route::post("/admin/approvePembayaran/{id}",[AdminController::class,'approvePembayaran'])->name('approvePembayaran');
    Route::post("/admin/resetPW/{id}",[AdminController::class,'resetMemberPassword'])->name('resetMemberPassword');
    Route::post("/admin/resetPWKonselor/{id}",[AdminController::class,'resetKonselorPassword'])->name('resetKonselorPassword');
   
    Route::post("/logoutAdmin",[AuthController::class,'logoutAdmin'])->name('logoutAdmin');
});

Route::middleware(['auth:web'])->group(function(){ 
   
    Route::get('/home',[UserController::class,'indexHomeUser'])->name('homeUser');
    Route::get('/home/profileUser',[UserController::class,'profileUser'])->name('profileUser');
    Route::get('/home/editprofileUser/{id}',[UserController::class,'IndexEditProfileUser'])->name('IndexEditProfileUser');
    Route::post("/home/updateprofileUser/{id}",[UserController::class,'updateProfileUser'])->name('updateProfileUser');
    Route::get('/home/editpasswordUser/{id}',[UserController::class,'IndexEditPasswordUser'])->name('IndexEditPasswordUser');
    Route::post("/home/updatepasswordUser/{id}",[UserController::class,'updatePasswordUser'])->name('updatePasswordUser');

    Route::get('/home/JadwalKonseling',[JadwalKonselingController::class,'indexAllJK'])->name('indexAllJK');
    Route::get('/home/AllKonselorMap',[UserController::class,'indexAllMap'])->name('indexAllMap');

    Route::get('/home/DetailKonselor/{id}',[UserController::class,'indexDetailKonselorByMap'])->name('indexDetailKonselorByMap');

    Route::get('/home/bookingKonseling/{id}',[JadwalKonselingController::class,'IndexBookingJk'])->name('IndexBookingJK');
    Route::post('/home/addBookingKonseling/{id}',[BookingKonselingController::class,'addBookingKonseling'])->name('addBookingKonseling');
    Route::post('/home/addBookingbyCredit/{id}',[BookingKonselingController::class,'addBookingbyCredit'])->name('addBookingKonselingCredit');

    Route::get('/home/addReschedule/{id}',[RescheduleController::class,'IndexAddReschedule'])->name('IndexAddReschedule');
    Route::post('/home/actionAddReschedule/{id}',[RescheduleController::class,'actionAddRes'])->name('actionAddRes');  

    Route::post('/home/actionAddCancel/{id}',[CancelBookingController::class,'addCancellation'])->name('addCancellation');  
    Route::post('/home/actionDone/{id}',[BookingKonselingController::class,'konselingDone'])->name('konselingDone');  
   
    Route::post("/logoutUser",[AuthController::class,'logoutUser'])->name('logoutUser');
});


Route::middleware(['auth:konselor'])->group(function(){
    
    Route::get('/konselor',[KonselorController::class,'indexHomeKonselor'])->name('homeKonselor');    
    Route::get('/konselor/profileKonselor',[KonselorController::class,'profileKonselor'])->name('profileKonselor');
    Route::get('/konselor/editprofileKonselor/{id}',[KonselorController::class,'IndexEditProfileKonselor'])->name('IndexEditProfileKonselor');
    Route::post("/konselor/updateprofileKonselor/{id}",[KonselorController::class,'updateProfileKonselor'])->name('updateProfileKonselor');
    Route::get('/konselor/editpasswordKonselor/{id}',[KonselorController::class,'IndexEditPasswordKonselor'])->name('IndexEditPasswordKonselor');
    Route::post("/konselor/updatepasswordKonselor/{id}",[KonselorController::class,'updatePasswordKonselor'])->name('updatePasswordKonselor');

    Route::get('/konselor/addJadwalKonseling',[JadwalKonselingController::class,'indexAddJK'])->name('indexAddJK');  
    Route::post('/konselor/addJadwalKonseling',[JadwalKonselingController::class,'actionAddJK'])->name('actionAddJK');  
    Route::get('/konselor/editJadwalKonseling/{id}',[JadwalKonselingController::class,'IndexEditJK'])->name('IndexEditJK');
    Route::post('/konselor/editJadwalKonseling/{id}',[JadwalKonselingController::class,'actionEditJK'])->name('actionEditJK'); 
    Route::post('/konselor/deleteJadwalKonseling/{id}',[JadwalKonselingController::class,'deleteJK'])->name('actionDeleteJK');   

    Route::get('/konselor/listReschedule',[RescheduleController::class,'indexKonselorRes'])->name('indexKonselorRes');  
    Route::post("/konselor/acceptRes/{id}",[RescheduleController::class,'confirmRes'])->name('confirmRes');
    Route::post("/konselor/rejectRes/{id}",[RescheduleController::class,'rejectRes'])->name('rejectRes');

    Route::get('/konselor/listCancel',[CancelBookingController::class,'indexKonselorCancel'])->name('indexKonselorCancel');  
    Route::post("/konselor/acceptCancel/{id}",[CancelBookingController::class,'confirmCancel'])->name('confirmCancel');
    Route::post("/konselor/rejectCancel/{id}",[CancelBookingController::class,'rejectCancel'])->name('rejectCancel');

    Route::post("/logoutKonselor",[AuthController::class,'logoutKonselor'])->name('logoutKonselor');
});

// Route::post("/logoutUser",[AuthController::class,'logoutUser'])->name('logoutUser');
// Route::post("/logoutKonselor",[AuthController::class,'logoutKonselor'])->name('logoutKonselor');