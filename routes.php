<?php

Route::get("/user", [
    'as'   => "RofilSecurity.login.form",
    'uses' => "Rofil\Security\Http\Controllers\SecurityController@formLogin"

]);

Route::post("/user", [
    'as'   => "RofilSecurity.login.proses",
    'uses' => "Rofil\Security\Http\Controllers\SecurityController@prosesLogin"
]);

Route::get("/logout", [
    'as'   => "RofilSecurity.login.logout",
    'uses' => "Rofil\Security\Http\Controllers\SecurityController@logout"
]);
