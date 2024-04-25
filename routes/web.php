    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TpController;
    use App\Http\Controllers\AdminController;


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

    Route::get('/', [TpController::class,'home'])->name(name:'home');

    Route::get('/service', [TpController::class,'service'])->name(name:'service');

    Route::get('/about', [TpController::class,'about'])->name(name:'about');
    Route::get('/price', [TpController::class,'price'])->name(name:'price');

    Route::get('/contact',[TpController::class,'contact'])->name(name:'contact');
    Route::get('/servicedetail',[TpController::class,'servicedetail'])->name(name:'servicedetail');
    Route::get('/payement',[TpController::class,'payement'])->name(name:'payement');
    Route::get('/thank',[TpController::class,'thank'])->name(name:'thank');

    //___________________________admin
    Route::get('/admin',[AdminController::class, 'admin'])->name(name:'admin');
    Route::post('/adminInfo',[AdminController::class, 'adminInfo'])->name(name:'adminInfo');
    Route::get('/index',[AdminController::class, 'index'])->name(name:'index');
    Route::get('/admin/create',[AdminController::class, 'create'])->name(name:'Admin.create');
    Route::post('/objet', [AdminController::class, 'store'])->name('objet.store');
    Route::get('/produits/{produit}/edit', [AdminController::class, 'edit'])->name('produits.edit');
    Route::put('/produits/{produit}',[AdminController::class, 'update'])->name('produits.update');
    Route::delete('/objets/{objet}',[AdminController::class, 'destroy'])->name('objets.destroy');
    Route::get('/listeCommande',[AdminController::class, 'listeCommande'])->name('listeCommande');
    Route::get('/listeUser',[AdminController::class, 'listeUser'])->name('listeUser');
    Route::get('/profil',[AdminController::class, 'profil'])->name('profil');
    Route::get('/profil/{image}/edit', [AdminController::class, 'editImage'])->name('editImage');
    Route::put('/profil/{image}',[AdminController::class, 'updateImage'])->name('image.update');


   Route::get('/connecter',[TpController::class, 'showLoginForm'])->name(name:'connecter');
   Route::get('/connecter/{id}',[TpController::class, 'connecterIDproduit'])->name(name:'connecterIDproduit');
   Route::post('/loginUser',[TpController::class, 'loginUser'])->name(name:'loginUser');
   Route::get('/inscrire/create',[TpController::class, 'inscrire'])->name(name:'inscrire');

   Route::post('/inscrire', [TpController::class, 'StoreInscrire'])->name(name:'StoreInscrire');





   Route::get('/login', [TpController::class, 'showLoginForm'])->name('login');
   Route::post('/login', [TpController::class, 'loginUser'])->name('loginUser');





