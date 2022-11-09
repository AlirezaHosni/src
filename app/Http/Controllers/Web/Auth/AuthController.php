<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function Login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
//           echo "<pre>"; print_r($data); die;
            $data['phone'] = $this->convert2english($data['phone']);
            if (preg_match('/^(?:98|\+98|0098|0)?9[0-9]{9}$/', $data['phone'])) {
                $phone = $data['phone'];
                $password = $data['password'];
                $adminCount = User::where(['phone' => $data['phone'], 'is_admin' => 1])->count();
                if ($adminCount > 0) {
                    if (Auth::attempt(['phone' => $phone, 'password' => $password])) {

                        $userStatus = User::where('phone', $data['phone'])->first();
                        if ($userStatus->status == 0) {
                            return redirect()->back()->with('flash_message_error', 'حساب کاربری شما فعال نیست لطفا ایمیل خود را فعال کنید');
                        }
                        Session::put('adminSession', $data['phone']);
                        $userStatususer = User::where('id', $userStatus->id)->first();
                        return redirect('/ad/dashboard');
                    } else {
                        return redirect()->back()->with('flash_message_error', 'نام کاربری یا رمز ورود نامعتبر است');
                    }
                } else {
                    //echo "failed"; die;
                    return redirect('/ad/login')->with('flash_message_error', 'در حال حاضر شما اجازه ورود ندارید');
                }
            } else {

            }
        }
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        Session::forget('adminSession');
        Session::forget('session_id');
        return redirect('/ad/login')->with('flash_message_error', 'با موفقیت از پنل خارج شده اید!!!');
    }

    function convert2english($string)
    {
        $newNumbers = range(0, 9);
        // 1. Persian HTML decimal
        $persianDecimal = array('&#1776;', '&#1777;', '&#1778;', '&#1779;', '&#1780;', '&#1781;', '&#1782;', '&#1783;', '&#1784;', '&#1785;');
        // 2. Arabic HTML decimal
        $arabicDecimal = array('&#1632;', '&#1633;', '&#1634;', '&#1635;', '&#1636;', '&#1637;', '&#1638;', '&#1639;', '&#1640;', '&#1641;');
        // 3. Arabic Numeric
        $arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
        // 4. Persian Numeric
        $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');

        $string = str_replace($persianDecimal, $newNumbers, $string);
        $string = str_replace($arabicDecimal, $newNumbers, $string);
        $string = str_replace($arabic, $newNumbers, $string);
        return str_replace($persian, $newNumbers, $string);
    }

}
