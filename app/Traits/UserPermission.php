<?php
/*
@created 16/04/2020 - 3:03 AM
@project laravel-permission
@author csesumonpro
*/

namespace App\Traits;


trait UserPermission {


    public function checkRequestPermission()
    {
        if(
            empty(auth()->user()->role->permission['permission']['user']['list']) && \Route::is('user.index') ||
            empty(auth()->user()->role->permission['permission']['user']['add']) && \Route::is('user.create') ||
            empty(auth()->user()->role->permission['permission']['user']['edit']) && \Route::is('user.edit')
        ){
            return response()->view('welcome');
        }
    }

}

