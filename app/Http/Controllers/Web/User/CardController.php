<?php

namespace App\Http\Controllers\Web\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\createCardRequest;
use App\Library\Helper;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function cardbank(createCardRequest $request)
    {
        if ($request->isMethod('post')) {
            $data = User::findOrFail($request->user_id);
            $data->card_bank = $request->card_bank;
            $data->code_shaba = $request->code_shaba;
            $data->save();
            return  redirect()->back();
        }
        $user_id = Auth::user()->id;
        $pro = Profile::where('user_id', $user_id)->first();
        $cardbank = User::where(['id' => $user_id])->first();
        return view('account.card.cardbank', compact('cardbank', 'user_id','pro'));
    }
}
