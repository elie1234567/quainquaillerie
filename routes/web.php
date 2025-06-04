<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\ClientLoginController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\marketing;
use App\Http\Controllers\EmployeeController;
use App\Models\ProductPiece;
use App\Models\Employee;
use App\Models\payment;
use App\Models\Achat;
use App\Models\historique;
use App\Models\admin;
use App\Http\Controllers\PaymentController;


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

Route::get('/', function () {
 $piece = ProductPiece::all();
    return view('welcome',compact('piece'));
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard')->middleware('auth');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

Route::get('/tables', [EmployeeController::class, 'index'])->name('tables')->middleware('auth');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');



Route::get('/RTL', function () {
    return view('RTL');
})->name('RTL')->middleware('auth');

Route::get('/profile', function () {
     return view('layouts.wallet');
})->name('profile')->middleware('auth');

Route::get('/signin', function () {
    return view('account-pages.signin');
})->name('signin');

Route::get('/signup', function () {
    return view('account-pages.signup');
})->name('signup')->middleware('guest');

Route::get('/sign-up', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('sign-up');

Route::post('/sign-up', [RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/sign-in', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('sign-in');

Route::post('/sign-in', [LoginController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'store'])
    ->middleware('guest');
   
    Route::get('/products/tsena', [marketing::class, 'tsena'])->name('tsena');
    Route::get('/products/voiture', [marketing::class, 'voiture'])->name('voiture');
    Route::get('/products/maison', [marketing::class, 'maison'])->name('maison');
    

// Route::get('/laravel-examples/user-profile', [ProfileController::class, 'index'])->name('users.profile')->middleware('auth');
// Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])->name('users.update')->middleware('auth');
// Route::get('/laravel-examples/users-management', [UserController::class, 'index'])->name('users-management')->middleware('auth');
// Route::get('/deleteUser/{id}',[UserController::class,'deleteU']);

Route::group(['middleware' => ['auth']], function () {
    Route::match(['get', 'post'], '/storevoiture', [ProductController::class, 'store_voiture'])->name('storevoiture');
    Route::get('/electrique', [ProductController::class, 'index'])->name('electrique');
    Route::get('/maison', [ProductController::class,'trano'])->name('maison');
    Route::get('/voiture', [ProductController::class,'vaika'])->name('voiture');
    Route::get('/materiel', [ProductController::class,'materiel'])->name('materiel');
   
    Route::get('/loginclient', [ClientLoginController::class, 'showLoginForm'])->name('loginclient');
     Route::post('/logina', [ClientLoginController::class, 'login'])->name('logina');
     Route::match(['get', 'post'], '/laravel-examples/rechercher', [UserController::class, 'rechercher_etudiant'])->name('rechercher');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::post('/products/maison', [ProductController::class, 'storeMaison'])->name('storeMaison');
    Route::match(['get', 'post'], '/storeautres', [ProductController::class, 'store_autres'])->name('storeautres');
    
      
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/not', function () {
    return view('notification');
});
Route::post('/logAd', [Controller::class, 'logAd'])->name('logAd');
Route::get('/registreA', [Controller::class, 'registreA'])->name('registreA');
Route::post('/admina', [Controller::class, 'admina'])->name('admina');
Route::get('/loginAdmin', [Controller::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/adminRegister', [Controller::class, 'adminRegister'])->name('adminRegister');
Route::group(['middleware' => ['admin']], function () {
    Route::get('/laravel-examples/users-management', [UserController::class, 'index'])->name('users-management');
    Route::delete('/laravel-examples/users-management/{id}', [UserController::class, 'deleteU'])->name('users.delete');
    // Route::get('/dashboard', [ProductController::class, 'showChart'])->name('dashboard');
   
     Route::get('/tab', function () {
        $total = Employee::count();
        $employees = Employee::all();
        $payemment = payment::all();
        $pay = payment::sum('totale');
        return view('tablee',[
            'total' => $total,
            'pay' => $pay,
        ], compact('employees','payemment'));
    })->name('tab');
});
Route::group(['middleware' => ['auth:web,admin']], function () {
 Route::get('/wallet', function () {
        $total = Employee::count();
        $User = User::count();
        $employees = admin::count();
        $historique = historique::sum('totale');;
        $admin = admin::count();
        $achat = Achat::all();
        $pay = Achat::sum('totaly');
        $payemment = payment::all();
        $paye = payment::sum('totale');
        $dataByDate = [];
        foreach ($achat as $item) {
            $date = $item->daty;
            $total = $item->totaly;
    
            if (!isset($dataByDate[$date])) {
                $dataByDate[$date] = 0;
            }
            $dataByDate[$date] += $total;
        }
        foreach ($payemment as $item) {
            $date = $item->datep;
            $total = $item->totale;
    
            if (!isset($dataByDat[$date])) {
                $dataByDat[$date] = 0;
            }
            $dataByDat[$date] += $total;
        }
        return view('wallet',[
            'dataByDate' => $dataByDate,
            'dataByDat' => $dataByDat,
            'total' => $total,
            'pay' => $pay,
            'admin' => $admin,
            'paye' => $paye,
            'User' => $User,
            'historique' => $historique,
        ], compact('employees','payemment','achat','admin','historique','User'));
    })->name('wallet');

    
    Route::get('/pro', [FournisseurController::class,'affichage'])->name('pro');
    Route::put('/laravel-examples/user-profile/update', [ProfileController::class, 'update'])->name('users.update');
    Route::get('/laravel-examples/user-profile', [ProfileController::class, 'index'])->name('users.profile');
    Route::get('/dashboard', [ProductController::class, 'showChart'])->name('dashboard');
   
});
