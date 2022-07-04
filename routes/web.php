<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function () {
    //$products = \App\Models\Product::all(); //select * from products

    //$user = new \App\Models\User();
    //active record
    //$user = \App\Models\User()::find(1);

    //$user->name = 'UsuarioTeste Att';
    //$user->email = 'email@teste.com';
    //$user->password = bcrypt('12345678');

    //return $user->save();
    //return $products;
    //\App\Models\User::paginate(10);
    //\App\Models\User::find(10);
    //$user = \App\Models\User::find(61);

    //return $user->store;

    //return $user;
    //$loja = \App\Models\Store::find(1);

    //return $loja->products;

    //criar uma loja para um usuario
    //$user = \App\Models\User::find(1);
    //$store = $user->store()->create([
    //    'name' => 'Loja teste',
    //    'description' => 'Loja de teste do banco de dados',
    //    'mobile_phone' => '(42)9999-9999',
    //    'phone' => '(42)9999-9999',
    //    'slug' => 'loja-teste'
    //]);

    //dd($store);

    //criar um produto para uma loja
    //$store = \App\Models\Store::find(11);
    //$product = $store->products()->create([
    //    'name' => 'Teste de produto',
    //    'description' => 'Esse produto é um teste',
    //    'body' => 'testando a criação de um produto nada mais que isso...',
    //    'price' => 29.90,
    //    'slug' => 'teste-de-produto',
    //]);

    //dd($product);

    //criar uma categoria
    //$category1 = \App\Models\Category::create([
    //    'name' => 'Games',
    //    'description' => null,
    //    'slug' => 'games'
    //]);

    //$category2 = \App\Models\Category::create([
    //    'name' => 'Computadores',
    //    'description' => null,
    //    'slug' => 'computadores'
    //]);

    //return \App\Models\Category::all();

    //adicionar um produto a uma categoria
    //$product = \App\Models\Product::find(11);
    //$product->categories()->attach([1]); //adiciona a categoria 1 para o produto / detach para remover
    //$product->categories()->sync([1,2]);

    //return \App\Models\User::all();
});

Route::prefix('admin')->name('admin.')->group(function () {
    
    Route::prefix('stores')->name('stores.')->group(function () {
        Route::get('/', [StoreController::class, 'index'])->name('index');
        Route::get('/create', [StoreController::class, 'create'])->name('create');
        Route::post('/store', [StoreController::class, 'store'])->name('store');
        Route::get('/{store}/edit', [StoreController::class, 'edit'])->name('edit');
        Route::post('/update/{store}', [StoreController::class, 'update'])->name('update');
        Route::get('/destroy/{store}', [StoreController::class, 'destroy'])->name('destroy');
    });

    Route::resource('products', ProductController::class);
});
