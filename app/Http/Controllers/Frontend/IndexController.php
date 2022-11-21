<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Setting;
use App\Models\ContactUs;
use App\Models\Content;
use App\Models\AboutTag;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

class IndexController extends BaseController
{

    /**
     * Home page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $content = Content::where('page', 'home')->get();
        $contentArr = $this->contentModify($content);
        return view('pages.frontend.index', compact('contentArr'));
    }

    /**
     * service page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function service()
    {
        $content = Content::where('page', 'service')->get();
        $contentArr = $this->contentModify($content);
        return view('pages.frontend.service', compact('contentArr'));
    }

    /**
     * about page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function about()
    {
        $tags = AboutTag::orderByDesc('id')->get();
        $content = Content::where('page', 'about')->get();
        $contentArr = $this->contentModify($content);
        return view('pages.frontend.about', compact('contentArr','tags'));
    }

    /**
     * contact page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function contact()
    {
        $setting = Setting::first();
        $content = Content::where('page', 'contact')->get();
        $contentArr = $this->contentModify($content);
        return view('pages.frontend.contact', compact('setting', 'contentArr'));
    }

    /**
     * contact-us save
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function saveContact(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'msg' => 'required',
        ]);

        ContactUs::create([
            "name" => $request->fname . " " . $request->lname,
            "email" => $request->email,
            "phone" => $request->phone,
            "msg" => $request->msg
        ]);

        $contactDetails                  =   [];
        $contactDetails['name']          =   $request->fname . " " . $request->lname;
        $contactDetails['email']         =   $request->email;
        $contactDetails['phone']         =   $request->phone;
        $contactDetails['msg']           =   $request->msg;
        Mail::send(new ContactEmail($contactDetails));

        return redirect()->back()->with([
            "message" => [
                "result" => "success",
                "msg" => "Your message has been sent successfully."
            ]
        ]);
    }

    /**
     * content modify to array
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function contentModify($contents)
    {
        $contentArr = [];
        foreach ($contents as $content) {
            $contentArr[$content->position] = $content->content;
        }
        return $contentArr;
    }
}
