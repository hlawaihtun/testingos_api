<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiresource('brands','Api\BrandController');

Route::apiresource('categories','Api\CategoryController');

Route::apiresource('subcategories','Api\SubcategoryController');

Route::apiresource('items','Api\ItemController');

Route::apiresource('users','Api\UserController');





//php artisan make:controller Api/BrandController --api -- model = Brand
//--api (not include create edit)
//--model = Brand (create obj,not using fillter by id)

//localhost:8000/api/brands
