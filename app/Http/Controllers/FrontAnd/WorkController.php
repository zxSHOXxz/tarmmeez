<?php

namespace App\Http\Controllers\FrontAnd;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(){
        $services=Service::all();
        $works=Work::orderBy('id','desc')->get();
        return response()->view('front.work',compact('services','works'));
    }
}
