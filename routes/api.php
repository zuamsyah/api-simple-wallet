<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function() {
    return view('api');
});

Route::group(['namespace' => 'Api'], function() {

    /**
     * Transactions routes
     */
    Route::get('transactions', 'TransactionController@index');
    Route::get('transactions/{id}', 'TransactionController@show');
    Route::post('transactions/create', 'TransactionController@store');
    Route::patch('transactions/{id}', 'TransactionController@update');
    Route::delete('transactions/{id}', 'TransactionController@destroy');

    /**
     * Accounts routes
     */
    Route::get('accounts', 'AccountController@index');
    Route::get('accounts/{id}', 'AccountController@show');
    Route::post('accounts/create', 'AccountController@store');
    Route::patch('accounts/{id}', 'AccountController@update');
    Route::delete('accounts/{id}', 'AccountController@destroy');

    /**
     * Expense_cat routes
     */
    Route::get('expensecat', 'Expense_catController@index');
    Route::get('expensecat/{id}', 'Expense_catController@show');
    Route::post('expensecat/create', 'Expense_catController@store');
    Route::patch('expensecat/{id}', 'Expense_catController@update');
    Route::delete('expensecat/{id}', 'Expense_catController@destroy');

    /**
     * Income_cat routes
     */
    Route::get('incomecat', 'Income_catController@index');
    Route::get('incomecat/{id}', 'Income_catController@show');
    Route::post('incomecat/create', 'Income_catController@store');
    Route::patch('incomecat/{id}', 'Income_catController@update');
    Route::delete('incomecat/{id}', 'Income_catController@destroy');

});

