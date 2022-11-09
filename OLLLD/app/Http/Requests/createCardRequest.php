<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createCardRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'card_bank'=>'card_number',
            'code_shaba'=>'sheba',
        ];
    }
    public function messages(){
        return[
            "card_bank.card_number"=>"شماره کارت وارد شده معتبر نمی باشد",
            "code_shaba.sheba"=>"شماره شبا وارد شده معتبر نمی باشد",
        ];
    }
}
