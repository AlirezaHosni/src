<?php

namespace App\Http\Controllers\Web\Back;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderProduct;
use App\OrderStatus;
use App\Pay;
use App\Setting;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showcarts()
    {
        $carts = Cart::latest()->get();
        //dd($carts);
        return view('admin.orders.cartshow', compact('carts'));
    }

    public function showorders()
    {
        $orders = Order::latest()->get();
        return view('admin.orders.ordershow', compact('orders'));
    }

    public function showReferralOrders()
    {
        $orderProductReferralIds = OrderProduct::whereNotNull('referral_text')->distinct('order_id')->select('order_id')->get();
        $orders = Order::whereIn('id', $orderProductReferralIds)->latest()->get();

        return view('admin.orders.ordershow',compact('orders'));
    }

    public function showSuccessfulOrders()
    {
        $successfulOrdersIds = Pay::distinct('order_id')->select('order_id')->get();
        $orders = Order::whereIn('id', $successfulOrdersIds)->latest()->get();

        return view('admin.orders.ordershow',compact( 'orders'));
    }

    public function showOrderDetails(Order $order)
    {
        return view('admin.orders.orderdetails', compact('order'));
    }

    public function editorders(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $orderStatus = OrderStatus::where('id', $data['order_status'])->first();
            Order::where(['id' => $id])->update([
                'order_status' => $orderStatus->title
//                'order_status' => $data['order_status']
            ]);
            return redirect('ad/order/show')->with('flash_message_success', 'سفارش وضعیت بروز شد');
        }

        $orders = Order::where(['id' => $id])->first();
        $status = OrderStatus::latest()->get();
        //dd($orders);
        return view('admin.orders.edit', compact('orders','status'));
    }

    public function payments()
    {
        $payments = Pay::latest()->get();
        return view('admin.orders.payments', compact('payments'));
    }
}
