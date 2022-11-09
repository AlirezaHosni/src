<?php

namespace App\Http\Controllers\Web\Seller;

use App\CategoryUser;
use App\Http\Controllers\Controller;
use App\Marketer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //nemodar
    public function showcat()
    {

        $user_id = Auth::user()->id;
        $usersget = User::where(['id' => $user_id])->first()->type_identity;
        if($usersget=="marketer"){
            return redirect('page/access');
        }else{
            $marks = Marketer::where(['user_id' => $user_id])->first();
            $getall = CategoryUser::where(['user_id' => $user_id])->get();
            //dd($getall);

            return view('sellers.category.show',compact('marks','getall'));
        }

    }
    public function nemodar($id=null)
    {
        $user_id = Auth::user()->id;
        $marks = Marketer::where(['user_id' => $user_id])->first();
       
        $data_price = $marks->pluck('agree_start');
        $p = $marks->pluck('agree_end');
        $h = $marks->pluck('buy_max_category');
        //dd($price);
        $fruit_count = $marks??'';
        $veg_count = $marks??'';
        $grains_count = $marks??'';
        $ph = ['32323','322323','3232323','323232'];
        return view('sellers.category.nemodar',compact('marks','fruit_count','veg_count','grains_count','data_price','p','h','ph'));
        
    }
}
