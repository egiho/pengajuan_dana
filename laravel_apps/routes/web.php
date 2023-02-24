<?php

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

use App\Http\Controllers\SimpleFinance\IncomeController;


Route::get('/', function () {
  return redirect('login');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@index')->name('home.dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::prefix('income')->group(function () {
        Route::get("/", [IncomeController::class, "index"])->name("page.income");
        Route::get("add", [IncomeController::class, "add"])->name("page.income.add");
        Route::post("add", [IncomeController::class, "create"])->name("page.income.add.post");
        Route::get("add-ajax", [IncomeController::class, "addAjax"])->name("page.income.addAjax.get");
        Route::post("add-ajax", [IncomeController::class, "addAjax"])->name("page.income.addAjax.post");
        Route::post("edit", [IncomeController::class, "edit"])->name("page.income.edit.post");
        Route::post("edit-ajax", [IncomeController::class, "editAjax"])->name("page.income.editAjax.post");
        Route::get("graph", [IncomeController::class, "graph"])->name("page.income.graph");
        Route::get("data-table", [IncomeController::class, "dataTable"])->name("page.income.dataTable");
        Route::get("data-table/edit", [IncomeController::class, "dataTableEdit"])->name("page.income.dataTable.edit");
        Route::post("data-table/edit", [IncomeController::class, "dataTableEdit"])->name("post.page.income.dataTable.edit");
        // Route::get("data-table/delete", [IncomeController::class, "dataTableDelete"])->name("page.income.dataTable.delete");
        Route::delete("data-table/delete", [IncomeController::class, "dataTableDelete"])->name("delete.page.income.dataTable.delete");
    });

});


