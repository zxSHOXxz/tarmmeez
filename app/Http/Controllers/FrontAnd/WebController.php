<?php

namespace App\Http\Controllers\FrontAnd;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $services=Service::all();
        return response()->view('front.web',compact("services"));
    }
}
