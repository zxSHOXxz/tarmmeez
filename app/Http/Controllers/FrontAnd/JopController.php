<?php

namespace App\Http\Controllers\FrontAnd;

use App\Http\Controllers\Controller;
use App\Models\Jop;
use Illuminate\Http\Request;

class JopController extends Controller
{
    public function index(){
        $jops=Jop::orderBy('id','desc')->paginate(7);
        return response()->view('front.jop',compact('jops'));
    }
    public function index_json($id){
        $jops=Jop::find($id);
        return response()->json($jops);
    }
}
