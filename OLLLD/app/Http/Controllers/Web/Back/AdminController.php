<?php

namespace App\Http\Controllers\Web\Back;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
class AdminController extends Controller
{
    public function DashboardAdmin()
    {
        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id);
        session(['adminSession', $userDetails->phone]);
        //Session::put('adminSession', $userDetails->username);

        $meta_title = "پنل ادمین";
        return view('admin.account');
    }

    protected function uploadImages(Request $request)
    {
        $this->validate(request() , [
            'upload' => 'required|mimes:jpeg,png,bmp',
        ]);

        $year = Carbon::now()->year;
        //$imagePath = "/upload/images/{$year}/";

        $file = request()->file('upload');
        $filename = $file->getClientOriginalName();

        // if(file_exists(public_path($imagePath) . $filename)) {
        //     $filename = Carbon::now()->timestamp . $filename;
        // }
        // $fileName = pathinfo($filename, PATHINFO_FILENAME);
        // $extension = $request->file('upload')->getClientOriginalExtension();
        // $fileName = $fileName . '_' . time() . '.' . $extension;
        // $file->move(public_path($imagePath) , $filename);
        //EDIT
        
            //     $extension = $file->getClientOriginalExtension();
            //     $New_path = rand(111111, 999999999) . '.' . $extension;
            //     $path_one = "/upload/images/{$year}/";
            //     $standard_path = $path_one . $New_path;
            //     if (!File::isDirectory($path_one)) {
            //         File::makeDirectory($path_one, $mode = 0777, true, true);
            //     }
            //     //Image::make($file)->save($standard_path);
            //   $file->move(public_path($standard_path));
                
                 $image_path = request()->file('upload');
                $extension = $image_path->getClientOriginalExtension();
                $New_path = rand(111111, 999999999) . '.' . $extension;
                $path_one = 'upload/images' . '/' . 'standard' . '/';
                $standard_path = $path_one . $New_path;
                if (!File::isDirectory($path_one)) {
                    File::makeDirectory($path_one, $mode = 0777, true, true);
                }
                Image::make($image_path)->save($standard_path);
        //EDIT
        
        
       // $url = $path_one . $filename;
        $urlf = asset($standard_path);
        //return "<script>window.parent.CKEDITOR.tools.callFunction(1 , '{$url}' , '')</script>";
        return response()->json(['fileName' => $New_path, 'uploaded'=> 1, 'url' => $urlf]);
    }

    private function resize($path , $sizes , $imagePath , $filename)
    {
        $images['original'] = $imagePath . $filename;
        foreach ($sizes as $size) {
            $images[$size] = $imagePath . "{$size}_" . $filename;

            Image::make($path)->resize($size, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path($images[$size]));
        }

        return $images;
    }

}
