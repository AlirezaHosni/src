<?php

namespace App\Http\Controllers\Web\Front;

use App\CatFaq;
use App\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $cat = CatFaq::orderBy('title', 'desc')
           ->get();
        return view('front.faqs.cat',compact('cat'));
    }
    public function catindex($id =null)
    {
        $cat = CatFaq::where('id',$id)->first();
        $faq = Faq::where('status', 1)
           ->where(['catfaq_id' => $id])
           ->orderBy('title', 'desc')
           ->get();
           return view('front.faqs.faqs',compact('faq','cat'));
    }

    public function singles($id=null)
    {
        $faq = Faq::where('status', 1)
        ->where(['id' => $id])
        ->first();
        $faqs = Faq::where('status', 1)
            ->where(['catfaq_id' => $faq->catfaq_id])
            ->orderBy('title', 'desc')
            ->get();
        return view('front.faqs.single',compact('faq','faqs'));
    }
}
