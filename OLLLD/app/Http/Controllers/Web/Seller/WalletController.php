<?php

namespace App\Http\Controllers\Web\Seller;

use App\Http\Controllers\Controller;
use App\Transaction;
use App\User;
use App\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletController extends Controller
{
    public function showWallet(Request $request)
    {
        $user_id = Auth::user()->id;
        if ($request->isMethod('post')) {
            $data = $request->all();
            //dd($data);
            $money_total = $data['money_total'];
            $price_request = $data['price_request'];
            $wallet_id = $data['wallet_id'];
            $request_data = Carbon::now();
            if ($money_total >= $price_request) {
                //dd('ok');
                $ckeckbank = User::where(['id' => $user_id])->first()->code_shaba;
                if ($ckeckbank != null) {
                    
                    $walletsupdate = new Transaction();
                    $walletsupdate->wallet_id = $wallet_id;
                    $walletsupdate->amount = $price_request;
                    $walletsupdate->withdraw = $price_request;
                    $walletsupdate->status = "withdraw-money";
                    $walletsupdate->save();
                    //CHANGEWLAAWT
                    $total = $money_total - $price_request;
                    Wallet::where(['id' => $wallet_id])->update([
                        'ballence' => $total
                    ]);
                    return redirect()->back()->with('flash_message_success', 'مبلغ درخواست شما برای مدیر سایت ارسال شد');

                } else {
                    return redirect()->back()->with('flash_message_error', 'ابتدا کد شبا بانکی خود را با دقت پر کنید');
                }

            } else {
                return redirect()->back()->with('flash_message_error', 'مبلغ درخواست شما از مبلغ مجاز بیشتر است');
            }
        }
 
        $user = User::with('wallets','wallets.transactions')->where('id', $user_id)->first();
        
        //$transaction = Transaction::where('user_id', $user_id)->latest()->get();
        return view('sellers.wallets.show', compact('user'));
    }
}
