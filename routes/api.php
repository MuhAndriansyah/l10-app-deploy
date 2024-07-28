<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get("/v1/users", function() {

    $getUsers = DB::table('users')->get();

    return response()->json(["data" => $getUsers], 200);
});