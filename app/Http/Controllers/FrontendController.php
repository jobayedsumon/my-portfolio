<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $skills = Skill::orderBy('priority')->get();
        $categories = Category::orderBy('priority')->get();
        $portfolios = Portfolio::orderBy('updated_at', 'DESC')->get();
        $services = Service::orderBy('priority')->get();
        $experiences = Experience::orderBy('created_at')->get();


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
            if (mail($request->email, $request->subject, $request->message)) {
                return 'Successfully sent email!';
            } else {
                return 'Email sending failed!';
            }

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
