<?php


namespace App\Http\Controllers\Web\Back;

use App\Http\Controllers\Controller;
use App\Library\Helper;
use App\Order;
use App\OrderProduct;
use App\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function sell(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $search_product = $data['title'];
            $start_date = Helper::DateNameShamsiToConvertDateNumber($data['start_date']);
            $end_date = Helper::DateNameShamsiToConvertDateNumber($data['end_date']);

            $seles = OrderProduct::where(function ($query) use ($search_product, $start_date, $end_date) {
                    $query->where('product_name', 'like', '%' . $search_product . '%');
                })->whereBetween('created_at', [$start_date, $end_date])->get();
            return view('admin.reports.sell',compact('seles'));
        }
        $seles = null;
        return view('admin.reports.sell',compact('seles'));
    }

    public function bastankar(Request $request)
    {
        $wallet = Wallet::latest()->get();
        return view('admin.reports.bastankar',compact('wallet'));
    }
}
