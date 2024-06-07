<?php

use App\Models\Form;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;
use App\Http\Controllers\UserController;
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

// Home Page Routes
Route::get('/', function () {
    return view('welcome');
});

// About Us Page Routes
Route::get('/aboutUs', function () {
    return view('aboutUsPage.aboutUs');
});

// Blog Page Routes
Route::get('/blogs', function () {
    return view('blogPages.blogs');
});
Route::get('/whatsNew', function () {
    return view('blogPages.whatsNew');
});
Route::get('/topPicks', function () {
    return view('blogPages.topPicks');
});
Route::get('/article', function () {
    return view('blogPages.article');
});

// Buy Page Routes
Route::get('/buy', function () {
    return view('buyPage.buy');
});
Route::get('/buyRequest', function () {
    return view('buyPage.buyRequest');
});

// Rent Page Routes
Route::get('/rent', function () {
    return view('rentPage.rent');
});
Route::get('/rentRequest', function () {
    return view('rentPage.rentRequest');
});

// Our Services Page Routes
Route::get('/ourServices', function () {
    return view('ourServicesPage.ourServices');
});

// interior Page Routes
Route::get('/interior', function () {
    return view('ourServicesPage.interiorPage.interior');
});
Route::get('/interiorRequest', function () {
    return view('ourServicesPage.interiorPage.interiorRequest');
});
Route::get('/intCard1', function () {
    return view('ourServicesPage.interiorPage.interiorCards.intCard1');
});
Route::get('/intCard2', function () {
    return view('ourServicesPage.interiorPage.interiorCards.intCard2');
});
Route::get('/intCard3', function () {
    return view('ourServicesPage.interiorPage.interiorCards.intCard3');
});

// Furniture Page Routes
Route::get('/furniture', function () {
    return view('ourServicesPage.furniturePage.furniture');
});
Route::get('/furnitureRequest', function () {
    return view('ourServicesPage.furniturePage.furnitureRequest');
});
Route::get('/furCard1', function () {
    return view('ourServicesPage.furniturePage.furnitureCards.furCard1');
});
Route::get('/furCard2', function () {
    return view('ourServicesPage.furniturePage.furnitureCards.furCard2');
});
Route::get('/furCard3', function () {
    return view('ourServicesPage.furniturePage.furnitureCards.furCard3');
});

// budget Page Routes
Route::get('/budget', function () {
    return view('ourServicesPage.budgetPage.budget');
});
Route::get('/budgetRequest', function () {
    return view('ourServicesPage.budgetPage.budgetRequest');
});


Route::get('/log', function () {
    return view('login.login');
});
// log out Page Routes
Route::get('/logout', function () {
    if (Auth::check()) {
        Auth::logout();
        PersonalAccessToken::where('tokenable_id', Auth::id())->delete();
    }
    return redirect('/');
});

// Route to the function to submit the form data from the Request pages
Route::post('/submitRequest', [UserController::class, 'submitRequest'])->name('submitRequest');


Route::post('/login', [UserController::class, 'authenticate'])->name('login');


Route::get('/admin', function () {
    $forms = Form::all(); // Retrieve all forms data

    return view('adminPage.admin', ['forms' => $forms]);
})->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route to the function to authenticate the user
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
