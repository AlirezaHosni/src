<?php

namespace App\Http\Controllers\Web\Back;

use App\Http\Controllers\Controller;
use App\Inventory;
use App\Library\SmsHelper;
use App\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stock(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $stock = $data['stock'];
            $product_id = $data['product_id'];
            if ($stock >= 0) {
                $sendsms = Inventory::where('product_id', $product_id)->where('status', 0)->orderBy('phone')->get();
                if(count($sendsms) > 0){
                    $collection = collect($sendsms);
                    $ids = $collection->pluck('id');
                    //   dd($ids);
                    $plucked = $collection->pluck('phone');

                    $phone_u = $plucked->all();
                    $from = "+9850001040987456";
                    $pattern_code = "ku43mnjqdc";
                    $sub = array("verifycode" => '1234');
                    $to = $phone_u;
                    //echo '<pre>'; print_r($sub);die;
                    $sendsms = new SmsHelper($from, $to, $sub, $pattern_code);
                    $sendsms->sendsms();
                    foreach ($ids as $key => $row) {
                        $id = $row;
                        Inventory::where(['id' => $id])->update([
                            'status' => 1
                        ]);
                    }
                }
                $pro = Product::where('id', $id)
                    ->first();
                $total = $stock;
                Product::where(['id' => $product_id])->update([
                    'stock' => $total
                ]);
                return redirect('ad/products/view')->with('flash_message_success', 'محصول  با موفقیت بروز  شد');
            } else {
                return redirect()->back()->with('flash_message_success', 'عدد باید بیشتر از صفر باشه');
            }
        }
        $pro = Product::where('id', $id)
            ->first();

        return view('admin.stocks.add', compact('pro'));
    }
}
