<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePage;
use App\Models\AboutPage;
use App\Models\Reference;
use App\Models\Info;
use Validator;

use Illuminate\Support\Facades\Mail;
class HomePageController extends Controller
{
    public function index()
    {
        $info=Info::first();
        $home = HomePage::withTranslations()->first();
        $about = AboutPage::withTranslations()->first();
        $references = Reference::withTranslations()->get();
        return view('front.homepage',compact('home','about','references','info'));
    }

    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'      => 'required|min:5|max:255',
            'email'     => 'required|min:10|max:255',
            'message'   => 'required|min:10|max:255',
        ]);

        if($validator->fails()){
            toastr()->error('error','An error occurred, please enter correct information');
            return redirect()->back();
        }

        $email='eliyevperviz466@gmail.com';
        $title='geo travel saytindan mesaj var';

        Mail::send('front.mail.index',['msg'=>$request->message,'email'=>$request->email,'name'=>$request->name] , function($message) use ($email,$title)
    {
        $message->to($email)->subject($title);
    });
        toastr()->success('succes','E-mail has been sent successfully');
        return  redirect()->back();
    }

    public function subscribe(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'email'     => 'required|min:10|max:255',
        ]);

        if($validator->fails()){
            toastr()->error('error','An error occurred, please enter correct information');
            return redirect()->back();
        }
        $email='eliyevperviz466@gmail.com';
        $title='geo travel saytindan mesaj var';
        Mail::send('front.mail.subscribe',['email'=>$request->email] , function($message) use ($email,$title)
        {
            $message->to($email)->subject($title);
        });
        toastr()->success('succes','E-mail has been sent successfully');
        return redirect()->back();
    }
}