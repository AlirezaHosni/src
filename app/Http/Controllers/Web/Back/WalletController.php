<?php

namespace App\Http\Controllers\Web\Back;

use App\Http\Controllers\Controller;
use App\Library\Helper;
use App\User;
use App\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function show()
    {
        $get = Wallet::with('user')->latest()->get();
        
        return view('admin.wallets.show',compact('get'));
    }

    public function showuser()
    {
        $get = User::with('wallets')->where('is_admin',0)->latest()->get();
        //dd($get);
      
        return view('admin.wallets.users.show',compact('get'));
    }

    public function request(Request $request,$id=null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo '<pre>'; print_r($data);die;
            $paid_data = Helper::DateNameShamsiToConvertDateNumber($data['paid_data']);
            // if (empty($data['paid_code'])) {
            //     $paid_code = null;
            // } else {
            //     $paid_code = $data['paid_code'];
            // }
            if (empty($data['price_paid'])) {
                $price_paid = 0;
            } else {
                $price_paid = $data['price_paid'];
            }
            $paid_status = $data['paid_status'] ;
            if($paid_status=="pay-final"){
                $getonewallets = Wallet::where(['id' => $id])->first();
                //$pay = $getonewallets->money_request;
                Wallet::where(['id' => $id])->update([
                    'amount' => $price_paid,'status_wallet' => $data['paid_status'],
                    'set_date' => $paid_data,'deposit' => $price_paid
                ]);
                
                return redirect('ad/wallets/view')->with('flash_message_success', 'با موفقیت کیف پول  بروز شد');
            }else{
                Wallet::where(['id' => $id])->update([
                    'amount' => $price_paid,'status_wallet' => $data['paid_status'],
                    'set_date' => $paid_data,'deposit' => $price_paid
                ]);
                return redirect('ad/wallets/view')->with('flash_message_success', 'با موفقیت کیف پول  بروز شد');
            }


        }
        $getwallets = Wallet::where(['id' => $id])->first();
        return view('admin.wallets.users.request',compact('getwallets'));
    }


    //edit showwallets
    public function success(){
        $walllets = Wallet::with('user')->where('status_wallet','success')->latest()->get();

        return view('admin.wallets.showwallets.success',compact('walllets'));
    }
    public function payout(){
        $walllets = Wallet::with('user')->where('status_wallet','payout')->latest()->get();
        return view('admin.wallets.showwallets.payout',compact('walllets'));
    }
    public function suspended(){
        $walllets = Wallet::with('user')->where('status_wallet','suspended')->latest()->get();
        return view('admin.wallets.showwallets.suspended',compact('walllets'));
    }
    public function withdrew(){
        $walllets = Wallet::with('user')->where('status_wallet','withdrew')->latest()->get();
        return view('admin.wallets.showwallets.withdrew',compact('walllets'));
    }

    //edit
}
