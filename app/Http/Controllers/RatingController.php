<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function create(Request $request){

        $checkrate = Rating::where(['product_id'=>$request->product_id])->first();

        if ($checkrate){
            $checkrate->delete();
        }
        Rating::create([
//            'user_id'=>Auth::id(),
            'product_id'=>$request->product_id,
            'stars_rated'=>$request->rate
        ]);
    }
}
