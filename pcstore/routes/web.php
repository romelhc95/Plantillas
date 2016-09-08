<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('admin.principal.index');
});

/*ADMINISTRADOR*/

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function() {
    Route::get('principal', function () {
    return view('admin.principal.index');
    }); 
    
    Route::group(['prefix'=>'almacen'], function () {

        Route::resource('category', 'CategoryController');









        
        Route::get('marca', function () {
        return view('admin.warehouse.brand');
        }); 
        
        Route::get('modelo', function () {
        return view('admin.warehouse.model');
        }); 
        
        Route::get('producto', function () {
        return view('admin.warehouse.product');
        }); 
    });
    
    Route::group(['prefix'=>'ventas'], function () {
        Route::get('clientes', function () {
        return view('admin.sales.customers');
        }); 
        
        Route::get('ventas', function () {
        return view('admin.sales.sales');
        }); 
        
        Route::get('consultar_ventas', function () {
        return view('admin.sales.consult_sales');
        }); 
        
        Route::get('consultar_venta_fecha', function () {
        return view('admin.sales.consult_sales_date');
        }); 
        
        Route::get('informes_mensuales', function () {
        return view('admin.sales.monthly_reports');
        }); 
    });
    
    Route::group(['prefix'=>'inventario'], function () {
        Route::get('inventario_inicial', function () {
        return view('admin.inventary.initial_inventory');
        }); 
        
        Route::get('abir_nuevo_inventario', function () {
        return view('admin.inventary.open_new_inventory');
        }); 
        
        Route::get('saldos_movimientos', function () {
        return view('admin.inventary.balances_and_movements');
        }); 
    });
    
    Route::group(['prefix'=>'reporte_ventas'], function () {
        Route::get('reporte_general', function () {
        return view('admin.report.general_report');
        }); 
        
        Route::get('reporte_anual', function () {
        return view('admin.report.annual_report');
        }); 
        
        Route::get('reporte_mensual', function () {
        return view('admin.report.monthly_report');
        }); 
    });
    
    Route::group(['prefix'=>'graficos_estadisticos'], function () {
        Route::get('ingresos_egresos', function () {
        return view('admin.graphics.income_expenses');
        });  
    });
    
    Route::get('respaldo_sistema', function () {
        return view('admin.backup.backup');
        }); 
});

/*USUARIO*/





