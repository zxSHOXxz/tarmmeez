<?php

namespace App\Http\Controllers\FrontAnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsAndConditionsController extends Controller
{
    public function index(){
        return response()->view('front.terms-and-conditions');
    }
}
