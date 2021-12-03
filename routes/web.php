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

Auth::routes(['register' => false]);

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

//    Clientes

    Route::group(['prefix' => 'clientes'], function () {
        Route::get('index', [
            'as' => 'clients.index',
            'uses' => 'ClientsController@index'
        ]);

        Route::get('create', [
            'as' => 'clients.create',
            'uses' => 'ClientsController@create'
        ]);

        Route::post('store', [
            'as' => 'clients.store',
            'uses' => 'ClientsController@store'
        ]);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('edit', [
                'as' => 'clients.edit',
                'uses' => 'ClientsController@edit'
            ]);

            Route::get('show', [
                'as' => 'clients.show',
                'uses' => 'ClientsController@show'
            ]);

            Route::put('update', [
                'as' => 'clients.update',
                'uses' => 'ClientsController@update'
            ]);

            Route::delete('destroy', [
                'as' => 'clients.destroy',
                'uses' => 'ClientsController@destroy'
            ]);

            Route::get('historial-financiero', [
                'as' => 'clients.financing',
                'uses' => 'ClientsController@financing'
            ]);

        });
    });


//    Formularios
    Route::group(['prefix' => 'formularios'], function () {

        Route::get('create', [
            'as' => 'forms.create',
            'uses' => 'FormsController@create'
        ]);


        Route::post('store', [
            'as' => 'forms.store',
            'uses' => 'FormsController@store'
        ]);


        Route::get('index', [
            'as' => 'forms.index',
            'uses' => 'FormsController@index'
        ]);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('edit', [
                'as' => 'forms.edit',
                'uses' => 'FormsController@edit'
            ]);

            Route::get('show', [
                'as' => 'forms.show',
                'uses' => 'FormsController@show'
            ]);

            Route::put('update', [
                'as' => 'forms.update',
                'uses' => 'FormsController@update'
            ]);

            Route::delete('destroy', [
                'as' => 'forms.destroy',
                'uses' => 'FormsController@destroy'
            ]);

            Route::get('plan-de-pagos', [
                'as' => 'forms.paymentPlan',
                'uses' => 'FormsController@paymentPlan'
            ]);

//            PDF
            Route::get('contrato-pdf', [
                'as' => 'forms.contratoPdf',
                'uses' => 'FormsController@contratoPdf'
            ]);

            Route::get('pagare-pdf', [
                'as' => 'forms.pagarePdf',
                'uses' => 'FormsController@pagarePdf'
            ]);

            Route::get('liquidacion-de-prestamo-pdf', [
                'as' => 'forms.liquidacionPdf',
                'uses' => 'FormsController@liquidacionPdf'
            ]);

            Route::patch('adjuntar-documentacion', [
                'as' => 'forms.attachArchives',
                'uses' => 'FormsController@attachArchives'
            ]);

        });

    });

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('searchClient', 'AjaxController@searchClient');

        Route::post('payDue','AjaxController@payDue');

        Route::post('cancelPayDue','AjaxController@cancelPayDue');

        Route::get('additional-costs','AjaxController@additionalCosts');

    });

//  Financing
    Route::group(['prefix' => 'financiamientos'], function () {

        Route::get('create', [
            'as' => 'financings.create',
            'uses' => 'FinancingsController@create'
        ]);


        Route::post('store', [
            'as' => 'financings.store',
            'uses' => 'FinancingsController@store'
        ]);


        Route::get('index', [
            'as' => 'financings.index',
            'uses' => 'FinancingsController@index'
        ]);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('edit', [
                'as' => 'financings.edit',
                'uses' => 'FinancingsController@edit'
            ]);

            Route::get('show', [
                'as' => 'financings.show',
                'uses' => 'FinancingsController@show'
            ]);

            Route::put('update', [
                'as' => 'financings.update',
                'uses' => 'FinancingsController@update'
            ]);

            Route::delete('destroy', [
                'as' => 'financings.destroy',
                'uses' => 'FinancingsController@destroy'
            ]);

        });

    });

//  ArchiveTypes
    Route::group(['prefix' => 'tipo-de-archivos'], function () {

        Route::get('create', [
            'as' => 'archiveTypes.create',
            'uses' => 'ArchiveTypesController@create'
        ]);


        Route::post('store', [
            'as' => 'archiveTypes.store',
            'uses' => 'ArchiveTypesController@store'
        ]);


        Route::get('index', [
            'as' => 'archiveTypes.index',
            'uses' => 'ArchiveTypesController@index'
        ]);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('edit', [
                'as' => 'archiveTypes.edit',
                'uses' => 'ArchiveTypesController@edit'
            ]);

            Route::get('show', [
                'as' => 'archiveTypes.show',
                'uses' => 'ArchiveTypesController@show'
            ]);

            Route::put('update', [
                'as' => 'archiveTypes.update',
                'uses' => 'ArchiveTypesController@update'
            ]);

            Route::delete('destroy', [
                'as' => 'archiveTypes.destroy',
                'uses' => 'ArchiveTypesController@destroy'
            ]);

        });

    });

});

