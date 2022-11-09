<?php

namespace App\Http\Controllers\Web\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\createCardRequest;
use App\Library\Helper;
use App\Marketer;
use App\Order;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;

class
UserController extends Controller
{
    public function showCustomer()
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        $marks = User::where(['identifiercode' => $user->identifiercode, 'is_seller' => 0])->latest()->get();
        return view('sellers.users.show', compact('marks'));
//        if ($usersget == "marketer") {
//            return redirect('page/access');
//        } else {
//        }
    }

    public function showordergenology($id = null)
    {
        $orders = Order::where(['user_id' => $id])->latest()->get();

        return view('sellers.users.genology.orders', compact('orders'));
    }

    public function showProfile(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            if (empty($data['path'])) {
                $profile_path = $data['avatar_img'];
            } else {
                $image_path = $data['path'];
                $image_del = $data['avatar_img'];
                if (!empty($image_del)) {
                    if (file_exists($image_del)) {
                        unlink($image_del);
                    }
                }
                $extension = $image_path->getClientOriginalExtension();
                $New_path = rand(111111, 999999999) . '.' . $extension;
                $path_path = 'upload' . '/' . 'sellers/' . 'profiles' . '/';
                $profile_path = $path_path . $New_path;
                if (!File::isDirectory($path_path)) {
                    File::makeDirectory($path_path, $mode = 0777, true, true);
                }
                Image::make($image_path)->resize(140, 140)->save($profile_path);


            }
            $image=new Profile();
            $image->path=$profile_path;
            $image->save();

           /* $user_id = Auth::user()->id;

            Profile::where('user_id',$user_id)->update([
                'nationalcode' => $data['nationalcode'],'path' => $profile_path
            ]);*/
            return redirect()->back()->with('flash_message_success', 'کاربری ویرایش شد');

        }
        $user_id = Auth::user()->id;
        //dd($user_id);
        $users = User::where('id', $user_id)->first();
        //dd($marks);
        $cus = Profile::where(['user_id' => $user_id])->first();
        $marker = Marketer::where(['user_id' => $user_id])->first();
        return view('sellers.profiles.show', compact('users', 'cus', 'marker'));
    }

    public function updatebanks(createCardRequest $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();
            $user_id = Auth::user()->id;
            if (empty($data['card_bank'])) {
                $card = null;
            } else {
                $card = $data['card_bank'];
            }
            if (empty($data['code_shaba'])) {
                $code_shaba = null;
            } else {
                $code_shaba = $data['code_shaba'];
            }
            User::where(['id' => $user_id])->update([
                'card_bank' => $card, 'code_shaba' => $code_shaba
            ]);
            return redirect()->back()->with('flash_message_success', 'کاربری ویرایش شد');
        }
        $user_id = Auth::user()->id;
        $users = DB::table('users')->where('id', $user_id)->orderBy('phone')->select('username', 'phone', 'card_bank', 'code_shaba')->first();
        $pro = Profile::where('user_id', $user_id)->first();
        return view('sellers.users.banks', compact('users','pro'));
    }
    public function imageProfile(Request $request)
    {
        $data=Profile::findOrFail($request->id);
        $file=$request->file('path');
        if (empty($file)){
            $image=$data->path;
            $data->path=$image;
        }else{
            if (!in_array($file->extension(), ['jpg', 'png', 'jpeg', 'gif', 'tiff']))
                return redirect()->back()->with('flash_message_error', 'لطفا برای عکس پروفایل فقط از فرمت های تصویر استفاده کنید');
            
            $oldimage=$data->path;

            if (!empty($oldimage) and file_exists($oldimage)){
                $pathold="upload/sellers/profiles/".$oldimage;
                    unlink($pathold);

            }
            $image=$file->getClientOriginalName();
            $path="upload/sellers/profiles/".$image;
            if (file_exists($path)){
                $image=bin2hex(random_bytes(5)).$image;
            }
            $file->move('upload/sellers/profiles/',$image);
            $data->path=$image;
            $data->save();
            return redirect()->back()->with('flash_message_success', 'کاربری ویرایش شد');
        }




    }
}
