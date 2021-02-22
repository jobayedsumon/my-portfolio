<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $skills = Skill::orderBy('priority')->get();
        $services = Service::orderBy('priority')->get();
        $experiences = Experience::orderBy('date')->get();


        $data['experiences'] = $experiences;
        $data['services'] = $services;
        $data['skills'] = $skills;

        return view('frontend.index', compact('data'));
    }
}
