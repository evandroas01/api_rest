<?php

use Illuminate\Http\Request;

    Route::get("registers","RegistersController@index");
    Route::get("registers/{register}","RegistersController@show");
    Route::post("registers", "RegistersController@addRegister");
    Route::put("registers/{register}","RegistersController@update");
    Route::delete("registers/{register}","RegistersController@delete");
