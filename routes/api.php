<?php

use App\Models\character;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('characters', \App\Http\Controllers\CharacterController::class);
/*
Route::get("/characters", function () {
    return character::all();
});

Route::get('/characters/{id}', function ($id) {
    return character::find($id);
})->where("id","[0-9]+");

Route::delete("/characters/{id}",function($id){
    $user=\App\Models\character::find($id);
    if($user==false)
    {return response("",204);}
    $user->delete();
    return response("",202);
});

Route::post("/characters",function(Request $request){
    $c =  Character::create([
        "name" => $request->input('name'),
        "status" => $request->input('status'),
        "species" =>$request->input('species'),
        "type" => $request->input('type'),
        "gender" => $request->input('gender'),
        "image" => $request->input('image'),
        "episodes" => $request->input('episodes'),
        "created"=>$request->input('created')

    ]);
});

Route::get("/characters/species={species}", function($species){
return character::where('species',$species)->get();
});
 */
