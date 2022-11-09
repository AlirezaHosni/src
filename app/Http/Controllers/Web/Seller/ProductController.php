<?php

namespace App\Http\Controllers\Web\Seller;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderProduct;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function referal(Request $request)
    {

        if ($request->isMethod('post')) {
            $user_id = Auth::user()->id;
            $data = $request->all();
            DB::table('order_products')->where(['order_id' => $data['order_id'],'TrackingCode'=>$data['TrackingCode'], 'product_id' => $data['product_id']])->update(['referral_text' => $data['referral_text']]);
            return redirect()->route('sellers.referal.prodect');
        }
        $user_id = Auth::user()->id;
//->addDay(10)
        $orderall = Order::where(['user_id' => $user_id])->get();


        return view('sellers.products.referral', compact('orderall'));
    }
    public function referalShow(){
        $user_id=Auth::user()->id;
        $orderall=OrderProduct::where('user_id',$user_id)->get();
        return view('sellers.products.indexReferral')->with(compact('orderall'));
    }
}
