<?php

namespace App\Http\Controllers\FrontAnd;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->paginate(7);
        $works = Work::with('services')->orderBy('id', 'desc')->get();
        return response()->view('front.index', compact("services", 'works'));
    }
    public function download_en()
    {

        $file = './front/company_profile.pdf';
        return Response::download($file);
    }
    public function download_ar()
    {
        $file = './front/بروفايل ترميز تك بالعربي.pdf';
        return Response::download($file);
    }
}
