<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/login", function () {
    return view("forms/login");
});

Route::get("/register", function () {
    return view("forms/register");
});
