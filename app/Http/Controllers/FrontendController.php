<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $skills = Skill::orderBy('priority')->get();
        $categories = Category::orderBy('priority')->get();
        $portfolios = Portfolio::orderBy('priority')->get();
        $services = Service::orderBy('priority')->get();
        $experiences = Experience::orderBy('created_at', 'DESC')->get();


        $data['experiences'] = $experiences;
        $data['services'] = $services;
        $data['categories'] = $categories;
        $data['portfolios'] = $portfolios;
        $data['skills'] = $skills;

        return view('frontend.index', compact('data'));
    }

    public function contact(Request $request)
    {
        try {
          $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
          	'message' => $request->message
          ];
           Mail::send('email_view', compact('data'), function ($m) use ($request) {
                $m->from(env('MAIL_FROM_ADDRESS'), 'Contact');
                $m->to(env('MAIL_TO_ADDRESS'))->subject($request->subject);
            });
			return "Mail Sent Successfully!";
        } catch (\Exception $exception) {
            return "Mail Couldn't Sent!";
        }
    }
  
   public function subscribe(Request $request)
    {
        try {
          	Subscriber::create([
            	'email' => $request->email
            ]);
			return "Thanks for subscribing me!";
        } catch (\Exception $exception) {
            return "Couldn't subscribe!";
        }
    }
}
